<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Student;
use Validator;
use Illuminate\Support\Facades\Input;

class StudentLoginController extends Controller
{

    public function showStudentLoginForm(){
        return view('frontend.student.login');
    }

    public function studentLogin(Request $request)
    {
        $credentials = $request->only('mobile', 'password');

       
        if (Auth::guard('student')->attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
            
            return redirect()->intended('/student/dashboard');
        }
    }
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
}