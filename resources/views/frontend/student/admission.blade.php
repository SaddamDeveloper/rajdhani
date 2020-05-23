@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'post','route'=>'student.form.store', 'enctype'=>'multipart/form-data']) }}
               <div class="student admission">
                @if (Session::has('message'))
                <div class="alert alert-success" >{{ Session::get('message') }}</div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                <h3 class="title-default-left title-bar-high">Application for Admission to the class {{$student->class == 'XI' || $student->class == 'XII' ? 'XI and XII' : 'I - X' }}</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="session">For the Session</label>
                                <select name="session" id="session" class="form-control">
                                    <option value="" selected disabled>--SELECT SESSION--</option>
                                    <option value="2018" {{$student->session == '2018'?'selected':''}}>2018</option>
                                    <option value="2019" {{$student->session == '2019'?'selected':''}}>2019</option>
                                    <option value="2020" {{$student->session == '2020'?'selected':''}}>2020</option>
                                </select>
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
                                <label for="name">Name of the Candidate in full</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Enter name">
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
                                <input type="date" class="form-control" id="dob" value="{{old('dob')}}" name="dob">
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
                        <div class="col-md-4">
                            <label for="class">Select Class</label>
                            <select name="class" id="class" class="form-control">
                                <option value="" selected disabled>--SELECT YOUR CLASS--</option>
                                <option value="I" {{$student->class == 'I'?'selected':''}}>I</option>
                                <option value="II" {{$student->class == 'II'?'selected':''}}>II</option>
                                <option value="III" {{$student->class == 'III'?'selected':''}}>III</option>
                                <option value="IV" {{$student->class == 'IV'?'selected':''}}>IV</option>
                                <option value="V" {{$student->class == 'V'?'selected':''}}>V</option>
                                <option value="VI" {{$student->class == 'VI'?'selected':''}}>VI</option>
                                <option value="VII" {{$student->class == 'VII'?'selected':''}}>VII</option>
                                <option value="VIII" {{$student->class == 'VIII'?'selected':''}}>VIII</option>
                                <option value="IX" {{$student->class == 'IX'?'selected':''}}>IX</option>
                                <option value="X" {{$student->class == 'X'?'selected':''}}>X</option>
                                <option value="XI" {{$student->class == 'XI'?'selected':''}}>XI</option>
                                <option value="XII" {{$student->class == 'XII'?'selected':''}}>XII</option>
                            </select>
                            @if($errors->has('class'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('class') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-4 mobile-mt-2">
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
                        <div class="col-md-4">
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
                                <input type="text" class="form-control" id="mt" name="mt" value="{{ old('mt') }}" placeholder="Enter mother tongue">
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
                                <label for="cast-comm-group-tribe">Cast/Comm/Group/Tribe <small>(Upload a copy of certificate)</label>
                                <select name="cast" class="form-control" id="cast-comm-group-tribe">
                                    <option value="" selected disabled>--SELECT CASTE/COMM/GROUP/TRIBE--</option>
                                    <option value="General" {{old('cast') == 'General'?'selected':''}}>General</option>
                                    <option value="EWS" {{old('cast') == 'EWS'?'selected':''}}>EWS</option>
                                    <option value="OBC" {{old('cast') == 'OBC'?'selected':''}}>OBC</option>
                                    <option value="MOBC" {{old('cast') == 'MOBC'?'selected':''}}>MOBC</option>
                                    <option value="SC" {{old('cast') == 'SC'?'selected':''}}>SC</option>
                                    <option value="ST(P)" {{old('cast') == 'ST(P)'?'selected':''}}>ST(P)</option>
                                    <option value="ST(H)" {{old('cast') == 'ST(H)'?'selected':''}}>ST(H)</option>
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
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $student->mobile }}" placeholder="Enter mobile no.">
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
                                        <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}" placeholder="Enter e-mail">
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
                                <label for="month-year">Month & Year of Passing</label>
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
                                    <td><textarea name="subject" class="form-control">{{old('subject')}}</textarea></td>
                                    <td><input type="text" name="max_mark" value="{{old('max_mark')}}" class="form-control" /></td>
                                    <td><input type="text" name="marks_obtained" value="{{old('marks_obtained')}}" class="form-control" /></td>
                                </tr>
                            </tbody>
                            {{--
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                </tr>
                                
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                    <td><input type="text" name="row[]" value="{{old('row')}}" class="form-control" /></td>
                                </tr>
                            </tbody>  --}}
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Name of the optional subjects for Class {{$student->class == 'XI' || $student->class == 'XII' ? 'XI / XII' : 'IX / X' }} <small>(Any Six)</small> :</h4>
                        </div>
                        @if($student->class == 'XI' || $student->class == 'XII')
                        <div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="ec" value="English Core">
                                    <label for="ec">English Core</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="physics" value="Physics">
                                    <label for="physics">Physics</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="chem" value="Chemistry">
                                    <label for="chem">Chemistry</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="math" value="Mathematics">
                                    <label for="math">Mathematics</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="biology" value="Biology">
                                    <label for="biology">Biology</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="account" value="Accountancy">
                                    <label for="account">Accountancy</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="businesss" value="Business Studies">
                                    <label for="businesss">Business Studies</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="socio" name="Sociology">
                                    <label for="socio">Sociology</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="polsc" value="Pol. Science">
                                    <label for="polsc">Pol. Science</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="eco" value="Economics">
                                    <label for="eco">Economics</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="geo" value="Geography">
                                    <label for="geo">Geography</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="psycho" value="Psychology">
                                    <label for="psycho">Psychology</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="pee" value="Physical Education">
                                    <label for="pee">Physical Education</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="history" value="History">
                                    <label for="history">History</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="Computerc" value="Computer Science">
                                    <label for="Computerc">Computer Science</label>
                                </div>
                            </div>
                        </div>
                        @else
                        <div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" name="opt_subject[]" id="ec" value="English Communicative">
                                    <label for="ec">English Communicative</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" id="maths" name="opt_subject[]" value="Mathematics">
                                    <label for="Mathematics">Mathematics</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" id="ss" name="opt_subject[]" value="Social Science">
                                    <label for="Social">Social Science</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" id="tech" name="opt_subject[]" value="Science & Technology">
                                    <label for="tech">Science & Technology</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" id="hindi" name="opt_subject[]" value="Hindi / Assamese">
                                    <label for="hindi">Hindi / Assamese</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <input type="checkbox" id="comp" name="opt_subject[]" value="Computer / P.Ed.">
                                    <label for="Computer">Computer / P.Ed.</label>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="col-md-8">
                            <h4>Language opted in the school (Please check the appropriate box):</h4>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="lenglish" name="language[]" value="English">
                                <label for="lenglish">English</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="checkbox" id="lhindi" name="language[]" value="Hindi">
                                <label for="lhindi">Hindi</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>Co-Curricular activities <small>(Games/Athletics/Debating/Essay Writing/Drawing/Quiz/Music/Computer/Dance) (Upload a copy of certificate)</small>:</h4>
                        </div>
                        <div class="col-md-12">
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
                        @if($student->class == 'XI' || $student->class == 'XII')
                        <div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="checkbox" id="mcc" name="documents[]" value="Marks Card">
                                    <label for="mcc">Marks Card</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="checkbox" id="tcc" name="documents[]" value="Transfer Certificate">
                                    <label for="tcc">Transfer Certificate</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="checkbox" id="bcc" name="documents[]" value="Migration Certificate in Original (for other Board)">
                                    <label for="bcc">Migration Certificate in Original <small>(for other Board)</small></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="checkbox" id="bccc" name="documents[]" value="Registration Card of Class IX">
                                    <label for="bccc">Registration Card of Class IX</label>
                                </div>
                            </div>
                        </div>
                        @else
                        <div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" id="mcc" name="documents[]" value="Marks Card">
                                    <label for="mcc">Marks Card</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" id="tcc" name="documents[]" value="Transfer Certificate">
                                    <label for="tcc">Transfer Certificate</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" id="bcc" name="documents[]" value="Birth Certificate">
                                    <label for="bcc">Birth Certificate</label>
                                </div>
                            </div>
                        </div>
                        @endif
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
                                <input type="text" id="placed1" class="form-control" name="placed1" value="{{ old('placed1') }}" placeholder="Enter place">
                                @if($errors->has('placed1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('placed1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dated1">Date</label>
                                <input type="date" id="dated1" name="dated1" value="{{ old('dated1') }}" class="form-control">
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
                                <input type="text" id="ds1" name="ds1" placeholder="Enter Signature" value="{{old('ds1')}}" class="form-control">
                                @if($errors->has('ds1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('ds1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        <p>1. I agree to the admission of my son/daughter ward in to the class <u>{{$student->class=='XI' || $student->class == 'XII' ? '11' : '10' }}</u> and i shall be reponsible for his/her conduct and good behaviour during the period of his/her academic career here.</p>
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
                                    <input type="date" id="dated2" name="dated2" value="{{old('dated2')}}" class="form-control">
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
                                    <input type="text" id="ds2" name="ds2" placeholder="Enter Signature" value="{{old('ds2')}}" class="form-control">
                                    @if($errors->has('ds2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('ds2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                   </div>
                    <div class="student admission">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Upload necessary Documents <small>(Compulsory: candidate photo and signature)</small> :</h4>
                            </div>
                            <div id="file_options">
                                <div class="file-group">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">File Input</label>
                                            <input type="file" id="file" name="uploaded_file[]" class="form-control">
                                            @if($errors->has('uploaded_file'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('uploaded_file') }}</strong>
                                            </span>
                                            @endif
                                            <input type="hidden" value="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="documentname">Document Name</label>
                                            <input type="text" id="document_name" class="form-control" name="document_name[]" placeholder="Enter document name">
                                            @if($errors->has('document_name'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('document_name') }}</strong>
                                            </span>
                                            @endif
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
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" style="margin-bottom:10px" id="student-submit-btn">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        var data = '<div class="file-group"><div class="col-md-6"><div class="form-group"> <label for="">File Input</label> <input type="file" id="" class="form-control" placeholder="Signature of parent\'s/guardian"></div></div><div class="col-md-6"><div class="form-group"> <label for="">Document Name</label> <input type="text" id="" class="form-control" placeholder="Enter document name"></div></div></div>';
        $('#file_more, #remove_file').click(function(e) {
            e.preventDefault();
        });
        $('#file_more').click(function() {
            $('#file_options').append(data);
        });
        $('#remove_file').click(function() {
            var length = $('#file_options').children().length;
            if (length > 1) {
                $('#file_options .file-group:last-child').remove();
            }
        });
    })
</script>
@endpush