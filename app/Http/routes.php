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

Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {

    return view('welcome');
    // return "hiiiii";
});

Route::get('/users', function () {
	$users = User::orderBy('created_at', 'asc')->get();

    return view('users', ['users' => $users]);

});



Route::post('/login', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'email' => 'required|max:5',
        'password' => 'required|max:5'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    return redirect('/welcome');

    // Create The Task...
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
