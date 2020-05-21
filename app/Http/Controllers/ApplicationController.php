<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use DB;
class ApplicationController extends Controller
{
    public function applicants()
    {
        $applicants = DB::table('registrations')
        ->select('registrations.*', 'payments.buyer_email')
        ->leftjoin('payments','registrations.email', '=', 'payments.buyer_email')
        ->get();
        return view('backend.applicants.index', compact('applicants'));
    }

    public function show($aId)
    {
        try {
            $id = decrypt($aId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $single_applicant = Registration::where('id', $id)->first();
        return view('backend.applicants.show', compact('single_applicant'));
    }
}
