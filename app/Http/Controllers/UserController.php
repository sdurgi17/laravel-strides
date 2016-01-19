<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator; 
use App\User;

class UserController extends Controller
{
	public function showUsers () {
		$users = User::orderBy('created_at', 'asc')->get();
		return view('users', ['users' => $users]);
	}

	public function login (Request $request) {
		$validator = Validator::make($request->all(), [
			'email' => 'required|max:10',
			'password' => 'required|max:10'
			]);

		if ($validator->fails()) {
			return redirect('/')
			->withInput()
			->withErrors($validator);
		}

		return redirect('/welcome');

	}

	public function getSignupView() {
		return view('signup');
	}

	public function createUser(Request $request) {
		$user = new User;

		$user->name = $request->name;
		$user->password = $request->password;
		$user->email = $request->email;

		$user->save();

		return view('welcome');
	}
}
