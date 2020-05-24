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
        $output = '
                <table class="table table-striped table-bordered table-responsive" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <td>'.$single_applicant->name.'</td>
                    <th>Father\'s Name</th>
                    <td>'.$single_applicant->fn.'</td>
                </tr>
                <tr>
                    <th>Mother\'s Name</th>
                    <td>'.$single_applicant->mn.'</td>
                    <th>DOB</th>
                    <td>'.$single_applicant->dob.'</td>
                </tr>
            
                <tr>
                    <th>Registration No</th>
                    <td>'.$single_applicant->registration_no.'</td>
                    <th>Mother Tongue</th>
                    <td>'.$single_applicant->mt.'</td>
                </tr>
                <tr>
                    <th>Religion</th>
                    <td>'.$single_applicant->religion.'</td>
                    <th>Community</th>
                    <td>'.$single_applicant->community.'</td>
                </tr>
                <tr>
                    <th>Cast</th>
                    <td>'.$single_applicant->cast.'</td>
                    <th>Permanent Address</th>
                    <td>'.$single_applicant->pa.'</td>
                </tr>
                <tr>
                    <th>Local Address</th>
                    <td>'.$single_applicant->la.'</td>
                    <th>Telephone</th>
                    <td>'.$single_applicant->tel.'</td>
                </tr>
                <tr>
                    <th>Local Telephone</th>
                    <td>'.$single_applicant->local_tel.'</td>
                    <th>Mobile No</th>
                    <td>'.$single_applicant->mobile.'</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>'.$single_applicant->email.'</td>
                    <th>Guardian Name</th>
                    <td>'.$single_applicant->pgname.'</td>
                </tr>
                <tr>
                    <th>Guardian Address</th>
                    <td>'.$single_applicant->pgaddress.'</td>
                    <th>Occupation</th>
                    <td>'.$single_applicant->occupation.'</td>
                </tr>
                <tr>
                    <th>Income</th>
                    <td>'.$single_applicant->income.'</td>
                    <th>Guardian Phone</th>
                    <td>'.$single_applicant->mobileno.'</td>
                </tr>
                <tr>
                    <th>Last School Attended</th>
                    <td>'.$single_applicant->last_school_place.'</td>
                    <th>Last School State</th>
                    <td>'.$single_applicant->last_school_state.'</td>
                </tr>
                <tr>
                    <th>Last School Country</th>
                    <td>'.$single_applicant->last_school_country.'</td>
                    <th>Last Exam</th>
                    <td>'.$single_applicant->exam.'</td>
                </tr>
                <tr>
                    <th>Month/ Year</th>
                    <td>'.$single_applicant->month_year.'</td>
                    <th>Roll No</th>
                    <td>'.$single_applicant->rollno.'</td>
                </tr>
                <tr>
                    <th>Medium</th>
                    <td>'.$single_applicant->medium.'</td>
                    <th>Co Curriculum Activity</th>
                    <td>'.$single_applicant->co_act.'</td>
                </tr>
                <tr>
                    <th>Place</th>
                    <td>'.$single_applicant->plcae1.'</td>
                    <th>Date</th>
                    <td>'.$single_applicant->date1.'</td>
                </tr>
                <tr>
                <th>Language</th>
                <td>
        ';
        foreach ($single_applicant->languages as $ln) {
            $output .= ' <input type="checkbox" value="'.$ln->id.'" checked disabled>
            <label for="'.$ln->language.'">'.$ln->language.'</label><br>';
        }
        $output .='</td>
            </tr>
            <tr>
                <th>Marks</th>
                    <td>
        ';
        foreach ($single_applicant->marksObtained as $mo) {
            $mo->subjects. " | " .$mo->max_marks. " | " . $mo->marks_obtained;
        }
        $output .=' </td>
        </tr>
    </table>';
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($output);
        return $pdf->stream($single_applicant->id . ".pdf");
    }
}