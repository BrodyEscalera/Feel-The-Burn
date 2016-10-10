<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get(/**
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
    '/', function(){



        return view('app');


});

Route::get('profile', 'ProfileController@Index');

Route::get('login', 'AuthController@login');


Route::get('feed', 'FeedController@Feed');

Route::get('goals', 'PagesController@Goals');

Route::get('more', 'PagesController@More');
Route::get('myPost', 'PagesController@myPost');

//Route::get('activities/create', 'ActivitiesController@Create');
//Route::get('activities/{id}', 'ActivitiesController@Show');
//Route::post('myPost','ActivitiesController@Store');
//Route::get('activities/{id}/edit', 'ActivitiesController@Edit');


Route::resource('activities','ActivitiesController');
route::get('activities/{id}/delete','ActivitiesController@Destroy');


