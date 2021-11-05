<?php

namespace App\Schedular;

use App\Models\Team\Team;


class RobinRound{

    public $timeSlot;
    public $venu;
    public $teams;
    protected $poolList;
    protected $schedule;
    protected $pool;
    public $days;
    public $poolMatches;

    public function __construct($teams,$venu,$timeSlot)
    {
        $this->teams = $teams;
        $this->venu = $venu;
        $this->timeSlot = $timeSlot;
    }

    public function teamsPool()
    {
        $this->poolList = array_chunk($this->teams, ceil(count($this->teams) / 2));
        return $this;
    }
    public function numberOfDays($start_date,$end_date)
    {
        $start_date = new \DateTime($start_date);
        $end_date = new \DateTime($end_date);
        $this->days  = $end_date->diff($start_date)->format("%a");
        return $this;
    }
    public function matchesByPoolList()
    {
        $a = [];

        foreach($this->poolList as $index => $pool){
            $index = 'pool-'.$index+1;
            foreach ($pool as $key => $team) {
                for ($i = $key + 1; $i < count($pool); $i++) {
                    $result[$index][] = [
                        'team' => Team::where('id',$team)->value('team_name'),
                        'opponent' => Team::where('id',$pool[$i])->value('team_name')
                    ];
                }
            }
        }
        $this->poolMatches= $result;
        return $this;
    }

    public function matchDays()
    {
        $arr = array_merge($this->poolMatches['pool-1'],$this->poolMatches['pool-2']);
        $nChunks = array_chunk($arr, ceil(count($arr) / $this->days));
        $a=[];
        foreach($nChunks as $key=>$val){
            $a["day-".$key+1] = $val;
        }

        $b=[];$d=[];
        $pool_a = $nChunks = ceil($this->days / 2);
        $pool_b = $this->days - $nChunks;
        while(($pool_a + $pool_b) > $this->days){
            $pool_b = $pool_b - 1;
        }
        $z=[];
        foreach($this->poolMatches as $key => $val){

            if($key === 'pool-2'){
                $nChunks = $pool_b;
                $c = $pool_b;
            }elseif($key === 'pool-1'){
                $nChunks = $pool_a;
                $c = $pool_a;
            }
            $val = array_map( function($val){
                if(count($this->venu) > 1){
                    $val['place'] = $this->venu[rand(0, count($this->venu)-1)];
                    $val['scheduled_time'] = $this->timeSlot[rand(0, count($this->timeSlot)-1)];
                }else{
                    $val['place'] = $this->venu[0];
                    $val['scheduled_time'] = $this->timeSlot[rand(0, count($this->timeSlot) -1)];
                }
                return $val;
            },$val);
            $arr = array_chunk($val,ceil(count($val)/$nChunks));
            $d[$key] = $arr;
        }
        $var =[];
        foreach($d as $key=> $pool){
            foreach($pool as $k=> $val){
                $c = $k+1;
                $var[$key]["day-{$c}"]=$val;
            }
        }
        $countP1 = count($var['pool-1']);
        foreach($var['pool-2'] as $key=> $mat){
            $var['pool-2']["day-{$countP1}"] = $mat;
            unset($var['pool-2'][$key]);
            $countP1++;
        }

        foreach($var['pool-1'] as $key => $v){
            foreach($v as $k => $r){
                if(isset($var['pool-2'][$key][$k]) && $var['pool-2'][$key][$k]['scheduled_time'] === $r['scheduled_time'] && $var['pool-2'][$key][$k]['place'] === $r['place']){
                    $var['pool-2'][$key][$k]['scheduled_time'] = $this->timeSlot[rand(0, count($this->timeSlot) -1)];
                    $var['pool-2'][$key][$k]['place'] = $this->venu[rand(0, count($this->venu)-1)];
                }

            }
        }
        return $var;
    }
}

