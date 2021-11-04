<?php

namespace App\Http\Controllers\admin\subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event\Event;
use App\Models\subscription\SubscriptionPlan;
use App\Models\subscription\UserSubscription;
use App\Http\Requests\admin\SubcriptionRequest;
use App\Models\subscription\SubscriptionPaymentPlan;


class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planResult= SubscriptionPlan::all();
        $plans = $planResult->map(function($plan){
            $plan->countusers= SubscriptionPaymentPlan::where('subscription_plans_id', '=', $plan->id)->count('user_id');
            return $plan;
        });
        return view('admin.pages.subscription.index', compact('plans'));
       
    }

    public function create()
    {
        return view('admin.pages.subscription.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan_type'  => 'required',
            'package_price' => 'required',
        ]);   
        $countresults = SubscriptionPlan::pluck('id')->count();  
        if($countresults > 2) {
            parent::dangerMessage("Cannot Create More Then Three Subscription Plans");
            return redirect()->back();
        }      
      
        SubscriptionPlan::create([
            'plan_name'=>'Monthly',
            'plan_amount'=>$request->package_price,
            'plan_type'=>$request->plan_type,
            'plan_des'=>json_encode($request->package_description),
        ]);
        return redirect()->route('subscription.index');
    }

    public function edit($id) {
        $data = SubscriptionPlan::find($id);
        return view('admin.pages.subscription.edit',compact('data'));
    }

    public function show(Request $request)
    {       
        $data  = SubscriptionPlan::where('id' , $request->planid)->first();      
        return response()->json([
            'html' => view('shared.subscription.update_form', compact('data'))->render()
            ,200, ['Content-Type' => 'application/json']
        ]);
    }

    public function update(SubcriptionRequest $request , $id){
       
        SubscriptionPlan::where('id', $id)
          ->update([
            'plan_amount' => $request->package_price,
            'plan_type' => $request->package_type,
            'plan_des' => json_encode($request->package_description),
            ]);
        return redirect()->route('subscription.index');
    }

   


}
