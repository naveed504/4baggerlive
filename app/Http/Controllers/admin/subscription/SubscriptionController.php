<?php

namespace App\Http\Controllers\admin\subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event\Event;
use App\Models\subscription\SubscriptionPlan;
use App\Models\subscription\UserSubscription;
use App\Http\Requests\admin\SubcriptionRequest;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Event::all();
        $plans = SubscriptionPlan::all();
        return view('admin.pages.subscription.index', compact(['teams' , 'plans']));
    }

    public function store(SubcriptionRequest $request){
        SubscriptionPlan::create([
            'plan_name'=>'Monthly',
            'plan_amount'=>$request->package_price,
            'plan_type'=>$request->package_type,
            'plan_des'=>json_encode($request->package_description),
        ]);
        return redirect()->route('subscription.index');
    }

    public function show($id)
    {
        $data  = SubscriptionPlan::where('id' , $id)->first();
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
