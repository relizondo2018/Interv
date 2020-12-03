<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Response;

class Login2Controller extends Controller
{
	public function index(){
		return view('login2.index');
	}

	public function login(Request $request){
		if (Auth::attempt(['email' => $request->exampleInputEmail1, 'password' => $request->exampleInputPassword1])) {
    	return $this->JsonSuccess("Success");
		}
		return $this->JsonError("Error");
	}

	public function home(){
		return view('home2');
	}

	public static function JsonSuccess($data)
	{
		return Response::json(['status' => 'success', 'data' => $data]);
	}

	public static function JsonError($data)
	{
		return Response::json(['status' => 'error', 'data' => $data]);
	}

}
