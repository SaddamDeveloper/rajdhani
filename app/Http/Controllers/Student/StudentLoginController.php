<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Student;
use Validator;
use Illuminate\Support\Facades\Input;
use Hash;
class StudentLoginController extends Controller
{

    public function showStudentLoginForm(){
        return view('frontend.student.login');
    
    }
    public function showStudentRegistrationForm()
    {
        return view('frontend.student.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'class'     => 'required',
            'mobile'    => 'required|numeric|min:10',
            'session'   => 'required',
            'password'  => 'required'
        ]);
        $mobile_check = Student::where('mobile', $request->input('mobile'))
            ->where('session', $request->input('session'))
            ->count();
        if($mobile_check){
            return back()->with('error', 'Student already exists!!! Try to login');
        }

        $student = new Student;
        $student->name = $request->input('name');
        $student->class = $request->input('class');
        $student->mobile = $request->input('mobile');
        $student->session = $request->input('session');
        $student->password = Hash::make($request->input('password'));

        $ins_student = $student->save();
        if($ins_student){
            return redirect()->route('student.login')->with('message', 'Registerd Successfully!');
        }
    }

    public function studentLogin(Request $request)
    {
        $this->validate($request, [
            'mobile'    => 'required',
            'password'  => 'required',
            'session'   => 'required'
        ]);
        $credentials = $request->only('mobile', 'password', 'session');
       
        if (Auth::guard('student')->attempt(['mobile' => $request->mobile, 'password' => $request->password, 'session' => $request->session])) {
            
            return redirect()->intended('/student/dashboard');
        }else{
            return back()->with('error', "Phone No or Password is incorrect!");
        }
    }
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
}