@extends('admin_template')

	@section('content_header')

      <h1>
       Applicants Details
      </h1>
      <br>
   @stop

@section('content')
      

<div class="col-md-12">
    <div class="panel panel-primary">

     <div class="panel-heading">
             <span class="glyphicon glyphicon-list"></span>{{$single_applicant->name}}
         </div>

         <div class="panel-body table-responsive">
            <table class="table table-striped table-bordered table-responsive" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <td>{{$single_applicant->name}}</td>
                    <th>Father's Name</th>
                    <td>{{$single_applicant->fn}}</td>
                </tr>
                <tr>
                    <th>Mother's Name</th>
                    <td>{{$single_applicant->mn}}</td>
                    <th>DOB</th>
                    <td>{{$single_applicant->dob}}</td>
                </tr>
              
                <tr>
                    <th>Registration No</th>
                    <td>{{$single_applicant->registration_no}}</td>
                    <th>Mother Tongue</th>
                    <td>{{$single_applicant->mt}}</td>
                </tr>
                <tr>
                    <th>Religion</th>
                    <td>{{$single_applicant->religion}}</td>
                    <th>Community</th>
                    <td>{{$single_applicant->community}}</td>
                </tr>
                <tr>
                    <th>Cast</th>
                    <td>{{$single_applicant->cast}}</td>
                    <th>Permanent Address</th>
                    <td>{{$single_applicant->pa}}</td>
                </tr>
                <tr>
                    <th>Local Address</th>
                    <td>{{$single_applicant->la}}</td>
                    <th>Telephone</th>
                    <td>{{$single_applicant->tel}}</td>
                </tr>
                <tr>
                    <th>Local Telephone</th>
                    <td>{{$single_applicant->local_tel}}</td>
                    <th>Mobile No</th>
                    <td>{{$single_applicant->mobile}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$single_applicant->email}}</td>
                    <th>Guardian Name</th>
                    <td>{{$single_applicant->pgname}}</td>
                </tr>
                <tr>
                    <th>Guardian Address</th>
                    <td>{{$single_applicant->pgaddress}}</td>
                    <th>Occupation</th>
                    <td>{{$single_applicant->occupation}}</td>
                </tr>
                <tr>
                    <th>Income</th>
                    <td>{{$single_applicant->income}}</td>
                    <th>Guardian Phone</th>
                    <td>{{$single_applicant->mobileno}}</td>
                </tr>
                <tr>
                    <th>Last School Attended</th>
                    <td>{{$single_applicant->last_school_place}}</td>
                    <th>Last School State</th>
                    <td>{{$single_applicant->last_school_state}}</td>
                </tr>
                <tr>
                    <th>Last School Country</th>
                    <td>{{$single_applicant->last_school_country}}</td>
                    <th>Last Exam</th>
                    <td>{{$single_applicant->exam}}</td>
                </tr>
                <tr>
                    <th>Month/ Year</th>
                    <td>{{$single_applicant->month_year}}</td>
                    <th>Roll No</th>
                    <td>{{$single_applicant->rollno}}</td>
                </tr>
                <tr>
                    <th>Medium</th>
                    <td>{{$single_applicant->medium}}</td>
                    <th>Co Curriculum Activity</th>
                    <td>{{$single_applicant->co_act}}</td>
                </tr>
                <tr>
                    <th>Place</th>
                    <td>{{$single_applicant->plcae1}}</td>
                    <th>Date</th>
                    <td>{{$single_applicant->date1}}</td>
                </tr>
                <tr>
                    <th>Language</th>
                    <td>
                        @foreach ($single_applicant->languages as $ln)
                            <input type="checkbox" value="{{$ln->id}}" checked disabled>
                            <label for="{{$ln->language}}">{{$ln->language}}</label><br>
                        @endforeach
                    </td>
                    <th>Marks</th>
                    <td>
                        @foreach ($single_applicant->marksObtained as $mo)
                            {{$mo->subjects}}
                            {{$mo->max_marks}}    
                            {{$mo->marks_obtained}}    
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Optional Subjects</th>
                    <td>
                        @foreach($single_applicant->optionalSubjects as $os)
                            <input type="checkbox" value="{{$os->id}}" checked disabled>
                            <label for="{{$os->subject_name}}">{{$os->subject_name}}</label><br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Uploaded Document</th>
                    <td>
                        @foreach($single_applicant->uploadedDocuments as $ud)
                            {{$ud->document_name}} =><img src="{{asset('Allphotos/photos/'.$ud->document)}}" alt="no-image" width="100px">
                        @endforeach
                    </td>
                </tr>
            </table>
         </div>

 </div>
@stop
