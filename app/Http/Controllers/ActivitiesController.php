<?php

namespace App\Http\Controllers;


use App\Http\Requests\ActivityRequest;
use App\userActivity;





/**
 * Class ActivitiesController
 * @package App\Http\Controllers
 */
class ActivitiesController extends Controller
{



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Create(){

        return view('pages.Create');



    }

    public function Show($id){

        $activity = userActivity::findorfail($id);

        return view('pages.Activity',compact('activity'));
    }

    /**
     * @param CreateActivityRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function Store(ActivityRequest $request){

        userActivity::create($request->all());

        return redirect ('feed');
    }



    public function Edit($id ){

        $activity = userActivity::findorfail($id);

        return view('pages.edit',compact('activity'));
    }


    public function Update($id, ActivityRequest $request){

        $activity = userActivity::findorfail($id);
        $activity->update($request->all());

        return redirect('feed');

    }

    public function Destroy($id){

        $activity = userActivity::findorfail($id);
        $activity->delete();

        return redirect('feed');
    }

}
