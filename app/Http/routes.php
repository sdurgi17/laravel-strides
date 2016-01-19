<?php

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
use App\Note;
use App\User;
use Illuminate\Http\Request;


Route::get('/login', function () {
	return view('login');
});

Route::get('/welcome', function () {

	return view('welcome'); 		 
});

Route::get('/users', 'UserController@showUsers');
Route::post('/login', 'UserController@login');
Route::get('/signup', 'UserController@getSignupView');
Route::post('/create', 'Auth\AuthController@create');
// Route::post('/create', function() {
// 	var_dump($_POST);
// });


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
