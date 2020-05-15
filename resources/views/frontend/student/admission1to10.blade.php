@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'post','route'=>'student.form.store']) }}
               <div class="student admission">
                <h3 class="title-default-left title-bar-high">Application for Admission to the class 10</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="session">For the Session</label>
                                <input type="text" class="form-control" id="session" name="session" value="{{ old('session') }}" placeholder="Enter session">
                                @if($errors->has('session'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('session') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="admission_no">Admission No.</label>
                                <input type="text" class="form-control" id="admission_no" name="admission_no" value="{{ old('admission_no') }}" placeholder="Enter admission no.">
                                @if($errors->has('admission_no'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('admission_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="registration_no">Registration No.</label>
                                <input type="text" class="form-control" id="registration_no" name="registration_no" value="{{ old('registration_no') }}" placeholder="Enter registration no.">
                                @if($errors->has('registration_no'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('registration_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name of the Candidate in full(CAPITAL)</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter name">
                                @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" value="{{old('old')}}" name="dob">
                                @if($errors->has('dob'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="place">Place of Birth (Village/Town)</label>
                                <input type="text" class="form-control" id="place" name="place" value="{{ old('place') }}" placeholder="Enter place of birth">
                                @if($errors->has('place'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('place') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fn">Father's Name</label>
                                <input type="text" class="form-control" id="fn" name="fn" value="{{ old('fn') }}" placeholder="Enter father's name">
                                @if($errors->has('fn'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('fn') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mn">Mother's Name</label>
                                <input type="text" class="form-control" id="mn" name="mn" value="{{ old('mn') }}" placeholder="Enter mother's name">
                                @if($errors->has('mn'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('mn') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mt">Mother Tongue</label>
                                <input type="text" class="form-control" id="mt" name="mt" value="{{ old('mt') }}" placeholder="Enter mother tounge">
                                @if($errors->has('mt'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('mt') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="religion">Religion</label>
                                <input type="text" class="form-control" id="religion" name="religion" value="{{ old('religion') }}" placeholder="Enter religion">
                                @if($errors->has('religion'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('religion') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="community">Community</label>
                                <input type="text" class="form-control" id="community" name="community" value="{{ old('community') }}" placeholder="Enter community">
                                @if($errors->has('community'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('community') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cast-comm-group-tribe">Cast</label>
                                <select name="cast" class="form-control" id="cast-comm-group-tribe">
                                    <option value="" selected disabled>--SELECT CASTE/COMM/GROUP/TRIBE--</option>
                                    <option value="General">General</option>
                                    <option value="EWS">EWS</option>
                                    <option value="OBC">OBC</option>
                                    <option value="MOBC">MOBC</option>
                                    <option value="SC">SC</option>
                                    <option value="ST(P)">ST(P)</option>
                                    <option value="ST(H)">ST(H)</option>
                                </select>
                                @if($errors->has('cast'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('cast') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pa">Permanent Address:</label>
                                        <textarea class="form-control" id="pa" name="pa" cols="50" rows="3">{{old('pa')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tel">Telephone No. with STD code</label>
                                        <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel') }}" placeholder="Enter telephone no.">
                                        @if($errors->has('tel'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="la">Local Address:</label>
                                        <textarea name="la" class="form-control" id="la" cols="50" rows="3">{{old('la')}}</textarea>
                                        @if($errors->has('la'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('la') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="local-tel">Telephone No.</label>
                                        <input type="text" class="form-control" id="local-tel" name="local-tel" value="{{old('local-tel')}}" placeholder="Enter telephone no.">
                                        @if($errors->has('local-tel'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('local-tel') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Mobile No.</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter mobile no.">
                                        @if($errors->has('mobile'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">e-mail</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter e-mail">
                                        @if($errors->has('email'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>Parents/Guardians:</h4>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pgname">Name</label>
                                <input type="text" class="form-control" id="pgname" name="pgname" value="{{ old('pgname') }}" placeholder="Enter parents/guardians name">
                                @if($errors->has('pgname'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('pgname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pgaddress">Address</label>
                                <textarea class="form-control" id="pgaddress" names="pgaddress" cols="50" rows="3">{{old('pgaddress')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" value="{{ old('occupation') }}" placeholder="Enter parents/guardians occupation">
                                @if($errors->has('occupation'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('occupation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="income">Annual Income</label>
                                <input type="text" class="form-control" id="income" name="income" value="{{old('income')}}" placeholder="Enter parents/guardians income">
                                @if($errors->has('income'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('income') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone3">Phone No.</label>
                                <input type="text" class="form-control" id="phone3" name="phone3" value="{{ old('phone3') }}" placeholder="Enter parents/guardians phone">
                                @if($errors->has('phone3'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('phone3') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobileno">Mobile No.</label>
                                <input type="text" class="form-control" id="mobileno" name="mobileno" value="{{ old('mobileno') }}" placeholder="Enter parents/guardians mobile">
                                @if($errors->has('mobileno'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('mobileno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>Details of last School attended :</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last-school-name">Name</label>
                                <input type="text" class="form-control" id="last-school-name" name="last-school-name" value="{{old('last-school-name')}}" placeholder="Enter school name">
                                @if($errors->has('last-school-name'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('last-school-name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last-school-place">Place</label>
                                <input type="text" class="form-control" id="last-school-place" name="last-school-place" value="{{ old('last-school-place') }}" placeholder="Enter school place">
                                @if($errors->has('last-school-place'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('last-school-place') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last-school-state">State</label>
                                <input type="text" class="form-control" id="last-school-state" name="last-school-state" value="{{ old('last-school-state') }}" placeholder="Enter last school state">
                                @if($errors->has('last-school-state'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('last-school-state') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last-school-country">Country</label>
                                <input type="text" class="form-control" id="last-school-country" name="last-school-country" value="{{ old('last-school-country') }}" placeholder="Enter last school country">
                                @if($errors->has('last-school-country'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('last-school-country') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exam">Name of the Examination Passed</label>
                                <input type="text" class="form-control" id="exam" name="exam" value="{{ old('exam') }}" placeholder="Enter last examination passed">
                                @if($errors->has('exam'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('exam') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="month-year">Month & Year if Passing</label>
                                <input type="text" class="form-control" id="month-year" name="month-year" value="{{old('month-year')}}" placeholder="Enter passing year">
                                @if($errors->has('month-year'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('month-year') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rollno">Roll No. in the Examination</label>
                                <input type="text" class="form-control" id="rollno" name="rollno" value="{{ old('rollno') }}" placeholder="Enter roll no.">
                                @if($errors->has('rollno'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('rollno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="medium">Medium of Instruction</label>
                                <input type="text" class="form-control" id="medium" name="medium" value="{{ old('medium') }}" placeholder="Enter medium">
                                @if($errors->has('medium'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('medium') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>Marks Grade obtained in the last Board Examination :</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-highlight">
                            <thead>
                                <th>Sl. No.</th>
                                <th>Subjects</th>
                                <th>Max Marks</th>
                                <th>Marks/Grade Obtained</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" name="subject01" value="{{old('subject01')}}" class="form-control" /></td>
                                    <td><input type="text" name="max_mark_01" value="{{old('max_mark_01')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained_01" value="{{old('marks_obtained_01')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" name="subject02" value="{{old('subject02')}}" class="form-control" /></td>
                                    <td><input type="text" name="max_mark_02" value="{{old('max_mark_02')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained_02" value="{{old('marks_obtained_02')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" name="subject03" value="{{old('subject03')}}" class="form-control" /></td>
                                    <td><input type="text" name="max_mark_03" value="{{old('max_mark_03')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained_03" value="{{old('marks_obtained_03')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><input type="text" name="subject04" value="{{old('subject04')}}" class="form-control" /></td>
                                    <td><input type="text" name="max_mark_04" value="{{old('max_mark_04')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained_04" value="{{old('marks_obtained_04')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><input type="text" name="subject05" value="{{old('subject05')}}" class="form-control" /></td>
                                    <td><input type="text" name="max_mark_05" value="{{old('max_mark_05')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained_05" value="{{old('marks_obtained_05')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><input type="text" name="subject06" value="{{old('subject06')}}" class="form-control" /></td>
                                    <td><input type="text" name="max_mark_06" value="{{old('max_mark_06')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained_06" value="{{old('marks_obtained_06')}}" class="form-control" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Name of the optional subjects for Class IX / X <small>(Any Six)</small> :</h4>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <input type="checkbox" id="ec" name="ec" value="{{old('ec')}}">
                                <label for="ec">English Communicative</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <input type="checkbox" id="maths" name="maths" value="{{old('maths')}}">
                                <label for="Mathematics">Mathematics</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <input type="checkbox" id="ss" name="ss" value="{{old('ss')}}">
                                <label for="Social">Social Science</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <input type="checkbox" id="tech" name="tech" value="{{old('tech')}}">
                                <label for="tech">Science & Technology</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <input type="checkbox" id="hindi" name="hindi" value="{{old('hindi')}}">
                                <label for="hindi">Hindi / Assamese</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <input type="checkbox" id="comp" name="comp" value="{{old('comp')}}">
                                <label for="Computer">Computer / P.Ed.</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>Language opted in the school (Please check the appropriate box):</h4>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="lenglish" name="lenglish" value="{{old('lenglish')}}">
                                <label for="lenglish">English</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="lhindi" name="lhindi" value="{{old('lhindi')}}">
                                <label for="lhindi">Hindi</label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h4>Co-Curricular activities <small>(Games/Athletics/Debating/Essay Writing/Drawing/Quiz/Music/Computer/Dance)</small>:</h4>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" id="co-act" class="form-control" name="co-act" value="{{old('co-act')}}" placeholder="Enter co-curricular activities">
                                @if($errors->has('co-act'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('co-act') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>List of documents enclosed <small>(Attested X-Rox Copies)</small>:</h4>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="mcc" name="mcc" value="{{old('mcc')}}">
                                <label for="mcc">Marks Card</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="tcc" name="tcc" value="{{old('tcc')}}">
                                <label for="tcc">Transfer Certificate</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="bcc" name="bcc" value="{{old('bcc')}}">
                                <label for="bcc">Birth Certificate</label>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="student admission declarations">
                   <span class="d-block text-center"><h4>DECLARATIONS</h4></span>
                   <div class="row">
                    <div class="col-md-12">
                            <p>1. I Promise to abide by the rules of school and the management.</p>
                            <p>2. I declare that the particulars and documents furnished are correct and true.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="placed">Place</label>
                                <input type="text" id="placed" class="form-control" name="placed1" value="{{ old('place') }}" placeholder="Enter place">
                                @if($errors->has('placed1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('placed1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dated">Date</label>
                                <input type="date" id="dated" names="dated1" value="{{ old('dated') }}" class="form-control">
                                @if($errors->has('dated1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('dated1') }}</strong>
                                </span>
                                @endif
                            </div> 
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ds">Signature</label>
                                <input type="file" id="ds" name="ds1" class="form-control">
                                @if($errors->has('ds1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('ds1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <p>1. I agree to the admission of my son/daughter ward in to the class <u>10</u> and i shall be reposnible for his/her conduct and good behaviour during the period of his/her academic career here.</p>
                            <p>2. I agree to prescribed fees without assigning reason.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="placed">Place</label>
                                    <input type="text" id="placed" name="placed2" value="{{old('placed2')}}" class="form-control" placeholder="Enter place">
                                    @if($errors->has('placed2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('placed2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dated">Date</label>
                                    <input type="date" id="dated" name="dated2" value="{{old('dated2')}}" class="form-control">
                                    @if($errors->has('dated2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('dated2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ds">Signature</label>
                                    <input type="file" id="ds2" name="ds2" class="form-control">
                                    @if($errors->has('ds2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('ds2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                   </div>
                    {{-- <div class="student admission">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Upload necessary Documents:</h4>
                            </div>
                            <div id="file_options">
                                <div class="file-group">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">File Input</label>
                                            <input type="file" id="file" class="form-control">
                                            <input type="hidden" value="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="documentname">Document Name</label>
                                            <input type="text" id="documentname" class="form-control" placeholder="Enter document name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-wrapper">
                                    <a id="file_more" class="btn btn-success">Upload more</a>
                                    <a id="remove_file" class="btn btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary pull-right" style="margin-bottom:10px" id="student-submit-btn">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection
