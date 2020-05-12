<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ChangePasswordController extends Controller
{
    public function index()
    {
    	return view('backend.password.index');
    }

    public function changepassword(Request $request)
    {
    	
    	$user = User::where('email', $request->email)->first();
    	$new_password = \Hash::make($request->new_password);

    	$user->update(['password' => $new_password]);
 \Session::flash('alert-success','Password change successfully');
    	return redirect()->back();
    	
    }
}
