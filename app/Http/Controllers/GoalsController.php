<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class GoalsController extends Controller
{
    //


    public function index(){
        $User =  User::findorfail(1);
        $myGoal = $User->weeklyGoal;

        return view('pages.Goals',compact('myGoal','User'));
    }


    public function Update($id, Request $request){


        $User = User::findorfail($id);
        $User->update($request->all());


        return redirect('goals');

    }
    public function Edit(){



}

    public function store(){



    }

    public function show(){



    }
}
