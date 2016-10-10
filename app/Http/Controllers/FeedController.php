<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\userActivity;

/**
 * Class FeedController
 * @package App\Http\Controllers
 */
class FeedController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    Public function Feed(){
        $userActivities = userActivity::latest()->get();

        return view('pages.Feed', compact('userActivities'));


    }



}
