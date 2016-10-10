<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\userActivity;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    //


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index()
    {

        $currentWeeklyMiles = 0;
        $currentWeeklyMinutes = 0;

        $userActivities = userActivity::all();
        foreach ($userActivities as $userActivity) {

             $currentWeeklyMiles += $userActivity->distance;
             $currentWeeklyMinutes += $userActivity->time;

        }
        $init = ($currentWeeklyMinutes * 60) ;
        $hours = floor($init / 3600);
        $minutes = floor(($init / 60) % 60);
        $seconds = $init % 60;


        $totalTime = ($hours.':'.$minutes) ;

        return view('pages.myProfile',compact('userActivities','currentWeeklyMiles','totalTime','profileGoal'));
    }


}