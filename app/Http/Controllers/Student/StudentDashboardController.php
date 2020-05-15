<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentDashboardController extends Controller
{
    public function index()
    {
        return view('frontend.student.studentdashboard');
    }

    public function showAdmissionForm10()
    {
        return view('frontend.student.admission1to10');
    }

    public function store(Request $request){
        $this->validate($request, [
            'session'           => 'required',
            'registration_no'   => 'required',
            'name'              => 'required',
            'dob'               => 'required',
            'place'             => 'required',
            'fn'                => 'required',
            'mn'                => 'required',
            'mt'                => 'required',
            'religion'          => 'required',
            'community'         => 'required',
            'cast'              => 'required',
            'pa'                => 'required',
            'la'                => 'required',
            'mobile'            => 'required|numeric|min:10',
            'email'             => 'required|email',
            'pgname'            => 'required',
            'occupation'        => 'required',
            'income'            => 'required|numeric',
            'mobileno'          => 'required|numeric|min:10',
            'last-school-name'  => 'required',
            'last-school-place' => 'required',
            'last-school-state' => 'required',
            'last-school-country' => 'required',
            'exam'              => 'required',
            'month-year'        => 'required',
            'rollno'            => 'required',
            'medium'            => 'required',
            'placed1'           => 'required',
            'dated1'            => 'required',
            'ds1'               => 'required',
            'placed2'           => 'required',
            'dated2'            => 'required',
            'ds2'               => 'required',
        ]);

        
    }
}
