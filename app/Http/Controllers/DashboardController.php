<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Documentation;
use App\App as UserApp;

class DashboardController extends Controller
{
    public function getDashboard()
    {
    	return view('dashboard');
    }

    public function getDocumentation($id)
    {
    	$data = Documentation::where('id', $id)->get();
    	return view('documentation')->with(['data' => $data]);
    }

    public function fetchText(Request $request)
    {
		$data = Documentation::where('name', $request['text'])->get();    	
    	return response()->json(['data' => $data[0]->id]);
    }

    public function createApp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5'
        ]);

        $name = $request['name'];
        $public_key = 'pub-' . base64_encode(openssl_random_pseudo_bytes(30));
        $secret_key = 'sec-' . base64_encode(openssl_random_pseudo_bytes(25));
        $password = base64_encode(openssl_random_pseudo_bytes(20));

        $user_app = new UserApp;

        $user_app->name = $name;
        $user_app->user_id = Auth::user()->id;
        $user_app->public_key = $public_key;
        $user_app->secret_key = $secret_key;
        $user_app->password = $password;

        $user_app->save();

        return redirect()->back();
    }
}
