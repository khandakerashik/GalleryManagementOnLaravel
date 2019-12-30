<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\DB;
use App\User;

class LoginController extends Controller
{
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
		$user = User::where('username', $req->username)
					->where('password', $req->password)
					->first();
					
		if($user != null ){
	
			$req->session()->put('name', $req->input('username'));
			$req->session()->put('user', $user);
			//echo "login Done";
			
			return redirect()->route('landing_page.index');
			
		
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
		}
	}
}
