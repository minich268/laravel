<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Actions\Calendar;

class PlanController extends Controller
{
    public function getAll ($url = null){
        $date_time_from_num = 10;
        $date_time_to_num = 19;
        $calendar_obj = new Calendar();
        $hours = [];
        $plan = Plan::where('id', 1)->first();
        $real_days = explode(",", $plan -> mon_tue_wed_thu_fri_san_sun);
        $calendar = $calendar_obj->show($real_days, $hours);
        $date_time_from = '10:00';
        $date_time_to = '19:00';
        if($date_time_from){
            $date_time_from_arr = explode(':', $date_time_from);
            $date_time_from_num =  (int)$date_time_from_arr[0];
        }
        if($date_time_to){
            $date_time_to_arr = explode(':', $date_time_to);
            $date_time_to_num = (int)$date_time_to_arr[0];
        }

        $hours_range = range($date_time_from_num, $date_time_to_num);

        return view ('plan', compact('calendar', 'hours_range'));
    }
   
}

