<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use DB;
use Dompdf\Dompdf;
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

    public function edit($aId)
    {
        try {
            $id = decrypt($aId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $single_applicant = Registration::where('id', $id)->first();
        return view('backend.applicants.update', compact('single_applicant'));
    }

    public function exportPdf($id)
    {
        $single_applicant = Registration::findOrFail($id);
        $pdf = \PDF::loadView('backend.applicants.show', compact('single_applicant'));
        $pdf->save(public_path().'\storage'.'_filename.pdf');
        return $pdf->download(' .pdf');
    }
}
