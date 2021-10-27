<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedular\RoundRobin;

class SchedulerController extends Controller
{
    protected $roundRobin;

    // public function __construct(RoundRobin $roundRobin)
    // {
    //     $this->roundRobin = $roundRobin;
    //     # code...
    // }
    //
    public function index(User $user)
    {

        $arr = [1,2,3,4,5,6,7,8,9,10,11];
        $pieces = array_chunk($arr, ceil(count($arr) / 2));
        $a = array();
        foreach($pieces as $key => $var){
            $test = new RoundRobin($var);
            $rr = $test->buildWithoutLeg()->setDates('2021-08-12', '2021-08-19')->schedule();
            array_push($a,$rr);
        }
        dd($a);
    }
}
