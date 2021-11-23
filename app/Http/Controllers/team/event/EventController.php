<?php

namespace App\Http\Controllers\team\event;

use App\AuthorizeNet\PaymentGateway;
use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team\Team;
use App\Models\Payments\PaymentPayout;
use Auth;
use Session;
use App\Models\Payments\Payment;
use App\Models\ServiceFee;
use App\Models\Event\EventRegisterTeam;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use App\PaymentError\CustomError;
use App\Services\CustomAuthorizeErrorService;
use App\Services\PaymentService;
use App\Exceptions\PaymentException;
use App\Models\CheckAgeGroupStatus;
use DB;


class EventController extends Controller
{
    public function __construct(PaymentService $paymentservice)
    {
        $this->paymentservice = $paymentservice;
    }



    /**
     * Show all Events
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('approved', 1)->with('eventRegTeams')->get();

        return view('coach.pages.events.events', compact('events'));
    }

    /**
     * Show One Event
     *
     * @param \App\Models\Event\Event::id
     * @return \Illuminate\Http\Response
     */
    public function viewEvent($id)
    {
        $active = 2;
        $event = Event::find($id);
        return view('coach.pages.events.event', compact('event', 'active'));
    }

    /**
     * Add Event to Team
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function addTeamToEvent(Request $request)
    {
        parent::dangerMessage("Please Pay Event Fee");
        return redirect()->back();
    }

    /**
     * Add Team View
     *
     * @param \App\Models\Event\Event::id
     * @return \Illuminate\Http\Response
     */
    public function addToEvent($id)
    {

        $userId     = Auth::user()->id;
        $teamId     = EventRegisterTeam::where(['user_id'=>$userId])->where('payment_status', '=' ,1)->pluck('team_id')->all();
        $teams      = Team::where(['user_id'=>$userId])->whereNotIn('id',$teamId)->with('agegroup')->get();
        $event      = Event::find($id);
        $servicefee = ServiceFee::first();
      
    

        return view('coach.pages.events.addteamtoevent', compact('event', 'servicefee','teams'));
    }

    /**
     * Show Teams
     *
     * @param \App\Modesl\Event::id
     * @return \Illuminate\Http\Response
     */
    public function showTotalTeams($id)
    {

        $eventteams =EventRegisterTeam::where(['event_id'=> $id])->fetchRelations()->groupBy('team_id')->get();
       
       

        $event = Event::find($id);


        return view('coach.pages.events.showTeams', compact('event','eventteams'));
    }

    /**
     * Payment Gateway Add Teams For Event
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function payTeamForEvent(Request $request, PaymentGateway $payment)
    {

        $input = $request->all();

        if (empty($request['checkbox'])) {
            $response = $payment->setPaymentData($request->all())
                ->setRefId()
                ->paymentType()
                ->transactionRequest()
                ->call();
            if ($response != null) {
                if ($response->getMessages()->getResultCode() == "Ok") {
                    $tresponse = $response->getTransactionResponse();
                    $this->paymentservice->storePaymentTransaction($tresponse, $input);
                } else {
                    $errorno2  = 2;
                    parent::transFailMsg($errorno2); //err 2
                    $tresponse = $response->getTransactionResponse();
                }
            } else {
                $errorno3 = 3;
                parent::transFailMsg($errorno3); //err 3
            }
        } else {
            $this->paymentservice->registerTeamInToEventWithoutPayment($input);
        }
         return redirect()->back();
    }

    public function verifyagegroupforeventteam(Request $request)
    {
                 
        $result = CheckAgeGroupStatus::where('event_id', $request->eventId)->where('age_group_id', $request->ageGroupId)->first();
        $checkExist = $result->status ?? '';
        return response()->json(['status' => $checkExist]);
    }
}
