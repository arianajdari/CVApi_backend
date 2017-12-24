<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
			$user->role = 1;

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

			$isRemember = $request->remember == 'on' ? true : false;
			if($isRemember) {
				$user = User::where('email', $request['s_email'])
					->update([
						'rememberMe' => 1
					]);
			}
			return redirect()->route('dashboard');
		} else {
			return redirect()->back();
		}
	}

	public function logout()
	{
		User::where('id', Auth::user()->id)->update(['rememberMe' => 0]);

		Auth::logout();
		return redirect()->route('login');
	}
    
}
