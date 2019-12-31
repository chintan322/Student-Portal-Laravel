<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\RedirectResponse;

class loginController extends BaseController
{
    public function login(Request $req)
    {
    	$username = $req->input('username');
    	$password = $req->input('password');

    	$checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();

    	if(count($checkLogin) > 0)
    	{
    		return redirect()->route('updateme')->with('username',$username)->with('password');
   		}
   		else
   		{
   			return redirect()->back();
   			
   		}
    }
}
