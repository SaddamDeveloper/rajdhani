<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registration;
use Auth;
use App\Student;
use App\OptionalSubjects;
use App\Language;
use App\UploadedDocument;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use DB;
use App\MarksObtained;
use App\Payment;
class StudentDashboardController extends Controller
{
    public function index()
    {
        $registration = Registration::where('user_id', Auth::guard('student')->user()->id)->first();
        $student = Student::where('id', Auth::guard('student')->user()->id)->first();
        $payment = Payment::where('buyer_email', $student->email)->first();

        return view('frontend.student.studentdashboard', compact('registration', 'payment'));
    }

    public function showAdmissionForm()
    {
        $student = Student::where('id', Auth::guard('student')->user()->id)->first();
        return view('frontend.student.admission', compact('student'));
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'session'           => 'required',
            'registration_no'   => 'required',
            'name'              => 'required',
            'class'              => 'required',
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
            'ds2'               => 'required'
        ]);
            $registration = new Registration;
            $registration->user_id              = Auth::guard('student')->user()->id;
            $registration->session              = $request->input('session');
            $registration->admission_no         = $request->input('admission_no');
            $registration->registration_no      = $request->input('registration_no');
            $registration->name                 = $request->input('name');
            $registration->dob                  = $request->input('dob');
            $registration->place                = $request->input('place');
            $registration->fn                   = $request->input('fn');
            $registration->mn                   = $request->input('mn');
            $registration->mt                   = $request->input('mt');
            $registration->religion             = $request->input('religion');
            $registration->community            = $request->input('community');
            $registration->cast                 = $request->input('cast');
            $registration->pa                   = $request->input('pa');
            $registration->la                   = $request->input('la');
            $registration->la                   = $request->input('la');
            $registration->tel                  = $request->input('tel');
            $registration->local_tel            = $request->input('local-tel');
            $registration->mobile               = $request->input('mobile');
            $registration->email                = $request->input('email');
            $registration->pgname               = $request->input('pgname');
            $registration->pgaddress            = $request->input('pgaddress');
            $registration->occupation           = $request->input('occupation');
            $registration->income               = $request->input('income');
            $registration->phone3               = $request->input('phone3');
            $registration->mobileno             = $request->input('mobileno');
            $registration->last_school_name     = $request->input('last-school-name');
            $registration->last_school_place    = $request->input('last-school-place');
            $registration->last_school_state    = $request->input('last-school-state');
            $registration->last_school_country  = $request->input('last-school-country');
            $registration->exam                 = $request->input('exam');
            $registration->month_year           = $request->input('month-year');
            $registration->rollno               = $request->input('rollno');
            $registration->medium               = $request->input('medium');
            $registration->co_act               = $request->input('co-act');
            $registration->place1               = $request->input('placed1');
            $registration->date1                = $request->input('dated1');
            $registration->signature1           = $request->input('ds1');
            $registration->place2               = $request->input('placed2');
            $registration->date2                = $request->input('dated2');
            $registration->signature2           = $request->input('ds2');
            
            $subject = $request->input('subject');
            $max_mark = $request->input('max_mark');
            $marks_obtained = $request->input('marks_obtained');

            $ins_marks_obtained = new MarksObtained;
            $ins_marks_obtained->user_id = Auth::guard('student')->user()->id;
            $ins_marks_obtained->subjects = $subject;
            $ins_marks_obtained->max_marks = $max_mark;
            $ins_marks_obtained->marks_obtained = $marks_obtained;

            $ins_marks_obtained->save();

            $opt_subjects = $request->input('opt_subject');
            if(!empty($opt_subjects)){
                foreach ($opt_subjects as $opt_subject) {
                    $ins_opt_sub = new OptionalSubjects;
                    $ins_opt_sub->user_id = Auth::guard('student')->user()->id;
                    $ins_opt_sub->subject_name = $opt_subject;
                    $ins_opt_sub->save();
                }
            }
            $languages = $request->input('language');
            if(!empty($languages)){
                foreach ($languages as $ln) {
                    $ins_language = new Language;
                    $ins_language->user_id = Auth::guard('student')->user()->id;
                    $ins_language->language = $ln;
                    $ins_language->save();
                }
            }
            $files = $request->uploaded_file;
            $doc_name = $request->document_name;
            if($request->hasFile('uploaded_file')){
                $images=array();
                $documents = array();
                if($request->file('uploaded_file')){
                    foreach($files as $file){
                        $destination = base_path().'/public/Allphotos/photos/';
                        $image_extension = $file->getClientOriginalExtension();
                        $image_name = md5(date('now').time()).(1).".".$image_extension;
                        $original_path = $destination;
                        $file->move($original_path,$image_name);
                        $images[]=$image_name;
                    }
                    for ($i = 0; $i < count($files); $i++) {
                        $documents[] = [
                            'user_id' => Auth::guard('student')->user()->id,
                            'document' => $images[$i],
                            'document_name' => $doc_name[$i],
                            'created_at'    => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                        ];
                    }
                    $ins_uploaded_docs = DB::table('reg_uploaded_document')
                    ->insert($documents);
                }

            }
            $insReg = $registration->save();
            
            if($insReg){
                return redirect('/dashboard');
            }
    }

    public function showPaymentForm()
    {
        $registration = Registration::where('user_id', Auth::guard('student')->user()->id)->first();
        return view('frontend.contents.payment', compact('registration'));
    }
}
