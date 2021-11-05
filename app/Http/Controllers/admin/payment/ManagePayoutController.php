<?php

namespace App\Http\Controllers\admin\payment;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentPayout;
use App\Models\Team\Team;
use App\Models\ServiceFee;
use App\Models\Payments\Payment;
use App\Models\Event\EventRegisterTeam;
use App\AuthorizeNet\RefundPaymentGateway;
use App\Services\RefundPaymentService;



class ManagePayoutController extends Controller
{
    public function __construct(RefundPaymentService $refundService)
    {
        $this->refundService = $refundService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $payments= EventRegisterTeam::fetchRelations()->get();
       $servicefee = ServiceFee::first();
       return view('admin.pages.payouts.show',compact('payments','servicefee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showPaymentRefundForm($id)
    {
        $team  = EventRegisterTeam::where('payments_id',$id)->fetchRelations()->first();
        $servicefee = ServiceFee::first();
        return view('admin.pages.payouts.paymentrefundform', compact('team','servicefee'));
    }

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

        return redirect()->route('adminpayout.index');
    }   


    
}
