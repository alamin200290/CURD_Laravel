<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	public function index(){
		return view('login.index');
	}

	public function valid(Request $req){
		
		//$req->session()->put('username', 'xyz');
		//$req->session()->put('password', '123423ggg');
		//$req->session()->get('username');
		//$req->session()->forget('username');
		//$req->session()->flush();
		//$data = $req->session()->all();
		//$req->session()->has('username')
		//$req->session()->flash('msg', 'invalid request');
		//$req->session()->keep('msg');
		//$req->session()->reflash();
		//$req->session()->pull('username');

		//$results = User::all();

		/*$result	= User::where('username', $req->uname)
				 ->where('password', $req->password)
				 ->get();*/

		//$results = DB::table('users')->get();
		$result	= DB::table('users')->where('username', $req->uname)
				 ->where('password', $req->password)
				 ->get();


		if(count($result) > 0){
			$req->session()->put('username', $req->uname);
			$req->session()->put('type', $result[0]->type);
			return redirect()->route('home.index');
		}else{
			$req->session()->flash('msg', "invalid username or password!");
			
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}

}
