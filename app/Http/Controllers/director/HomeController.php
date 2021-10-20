<?php

namespace App\Http\Controllers\director;

use App\AuthorizeNet\RefundPaymentGateway;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player\PlayerData;
use App\Models\User;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use Session;
use App\Models\Team\Team;
use App\Models\Payments\Payment;
use App\Models\Payments\RefundPayment;
use App\Models\ServiceFee;
use App\Models\Event\EventRegisterTeam;
use App\Services\RefundPaymentService;

class HomeController extends Controller
{
    public function __construct(RefundPaymentService $refundService)
    {
        $this->refundService = $refundService;
    }

    public function index()
    {
        return view('director.pages.dashboard');
    }

    /**
     * show payment payout record to director dashboard
     */
    public function directorPayout()
    {
        $servicefee = ServiceFee::first();
        //$payments=EventRegisterTeam::with('teams')->with('payments')->with('events')->with('users')->with('checkRefundpayments')->get();
        $payments=EventRegisterTeam::fetchRelations()->get();
        return view('director.pages.payouts.show',compact('payments','servicefee'));
    }

    /**
     *Show director refund the Event amount form
     *@param int App\Models\Team\Team::id
     *@return \Illuminate\Http\Response
     */
    public function showPaymentRefundForm($id)
    {
        //$team  = EventRegisterTeam::where('payments_id',$id)->with('teams')->with('payments')->with('events')->with('users')->with('checkRefundpayments')->first();
        $team  = EventRegisterTeam::where('payments_id',$id)->fetchRelations()->first();
        $servicefee = ServiceFee::first();
        return view('director.pages.payouts.paymentrefundform', compact('team','servicefee'));
    }

    /**
     *Director Refund The Event Amount
     *@return \Illuminate\Http\Response
     */
    function refundTransaction(Request $request , RefundPaymentGateway $payment )
    {
        $input =$request->all();
        $response = $payment->setPaymentData($input)
        ->setRefId()
        ->paymentType()
        ->transactionRequest()
        ->call();
      if ($response != null) {
            if($response->getMessages()->getResultCode() == "Ok") {
                $tresponse = $response->getTransactionResponse();
                $this->refundService->storeRefundTransaction($tresponse , $input);
            } else { 
                $errorMsg = 2;                
                parent::refundErrorMsg($errorMsg); //err 2                                                                 
            }
        } else { 
            $errorMsg = 3;
            parent::refundErrorMsg($errorMsg); //err 3    
        }

        return redirect()->back();
    }   

    public function playersInDirectorDashboard()
    {
        $players =PlayerData::with('user')->get();
        return view('director.pages.player.showplayers',compact('players'));
    }

    public function playersearchinDirector(Request $request)
    {
        $players = PlayerData::with('user')->whereHas('user', function ($q) use ($request) {
            $q->where('type', 4);
            $q->where('email', 'like', '%' . $request->inputsearch . '%');
            $q->orWhere('name', 'like', '%' . $request->inputsearch . '%');
        })->get();
        return view('director.pages.player.showplayers',compact('players'));

    }

    public function playerProfileinDirector($id) 
    {
        $player =User::find($id);
        return view('director.pages.player.profile', compact('player'));

        
    }

}