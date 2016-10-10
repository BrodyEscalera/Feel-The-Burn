<?php

namespace App\Http\Controllers;




use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Feed(){


        return view('pages.feed' );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Goals(){

        return view('pages.goals');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function More(){

        return view('pages.more');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Profile(){

        return view('pages.myProfile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myPost(){

        return view('pages.myPost');
    }

}
