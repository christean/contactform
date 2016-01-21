<?php

use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::post('contact', function() {
	$data=Input::all();
	$rules=array(
        'firstName' => 'required',
        'lastName' => 'required',
        'dob' => 'required|date',
        'phone' => 'required|phone:US'
	);

	$validator = Validator::make($data, $rules);

	if($validator->fails()) {
		return Redirect::to('contact')->withErrors($validator)->withInput();
	}
	return 'It works!!';
});
