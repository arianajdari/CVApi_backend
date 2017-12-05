<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	public function register(Request $request)
	{
		$this->validate($request, [
			'name' => 'min:3|required',
			'surname' => 'min:3|required',
			'email' => 'required|min:3|unique:users',
			'password' => 'min:3|required'
		]);


		if($request['password'] === $request['repeat-password']) {
			$user = new User();
			$user->name = $request['name'];
			$user->surname = $request['surname'];
			$user->email = $request['email'];
			$user->password = bcrypt($request['password']);

			$user->save();

			Auth::login($user);

			return redirect()->route('dashboard');

		} else {
			return redirect()->route('login', ['password_not_matching' => 'Entered Passwords Do Not Match!']);
		}
	}

	public function signin(Request $request)
	{
		if(Auth::attempt(['email' => $request['s_email'], 'password' => $request['s_password']])) {
			return redirect()->route('dashboard');
		} else {
			return redirect()->back();
		}
	}

	public function logout()
	{
		Auth::logout();
		return redirect()->route('login');
	}
    
}
