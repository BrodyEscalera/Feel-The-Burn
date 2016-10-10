<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    //
    public function login(){
       Return \socialite::with('github')->redirect();
    }


}
