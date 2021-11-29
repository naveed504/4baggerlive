<?php
namespace App\Repositories;

use Exception;
use App\Models\Request;
use App\Models\Payments\Payment;
use App\Models\Event\EventRegisterTeam;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class PaymentRepository
{
    protected $payment;

    public function __construct(Controller $parent)
    {
        $this->parent = $parent;
    }

    /**
     * storePaymentTransaction Intp DB
     *
     * @param array  $tresponse 
     * @param array  $input 
     * @return response
     */
    public function savePaymentTransactionInToDB($tresponse, $input)
    {
        try{
            $adminServiceFee = $input['servicefee'] / 100 * $input['amount']; //get admin service fee
            $directorAmount  = $input['amount'] - $adminServiceFee ;
            $paymentResult= Payment::create([
                    'event_id'          =>$input['event_id'],
                    'transaction_no'    =>$tresponse->getTransId(),
                    'total_amount_paid' =>$input['amount'],
                    'event_amount'      =>$input['event_amount'],
                    'admin_service_fee' =>$adminServiceFee,
                    'director_amount'   =>$directorAmount,
                ]);
            foreach ($input['teamId'] as $key => $value)
            {
                    $data = array(
                        'user_id'        => $input['coach_id'],
                        'event_id'       => $input['event_id'],
                        'team_id'        => $input['teamId'][$key],
                        'age_group_id'   => $input['age_group'][$key],
                        'payment_status' => 1,
                        'payments_id'    => $paymentResult->id,
                    );
                    EventRegisterTeam::create($data);
            }
        } catch(Exception $e) {
            dd($e->getMessage());
        }
        return true;

    }

    /**
     * Add Team To The Event Without Payment
     *
     * @param array $input
     * @return response
     */
    public function storeTeamIntoEvent($input)
    {
        try{
            foreach ($input['teamId'] as $key => $value) {
                $team = array(
                    'user_id'        => $input['coach_id'],
                    'event_id'       => $input['event_id'],
                    'team_id'        => $input['teamId'][$key],
                    'age_group_id'   => $input['age_group'][$key],
                    'payment_status' => 0,
                    'payments_id'    => 0,
                );
                $checkTeamExist = EventRegisterTeam::where(['team_id' => $input['teamId'][$key]])->first();
                    if($checkTeamExist === null) {
                        EventRegisterTeam::create($team);
                         $msg2 = 2;
                         $this->parent->transPassMsg($msg2);
                    }else {
                        $error4 = 4;
                        $this->parent->transFailMsg($error4); //err 4
                    }
            }
        } catch (Exception $e){
            dd($e->getMessage());
        }
        return true;
    }




}