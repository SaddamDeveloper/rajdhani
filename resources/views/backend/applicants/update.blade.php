@extends('admin_template')

	@section('content_header')

      <h1>
       Update Applicant Details
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
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" value="{{$single_applicant->name}}">
                </div>
                <div class="col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$single_applicant->email}}">
                </div>
                <div class="col-md-4">
                    <label for="class">Select Class</label>
                            <select name="class" id="class" class="form-control">
                                <option value="" selected disabled>--SELECT CLASS--</option>
                                <option value="I" {{$single_applicant->class == 'I'?'selected':''}}>I</option>
                                <option value="II" {{$single_applicant->class == 'II'?'selected':''}}>II</option>
                                <option value="III" {{$single_applicant->class == 'III'?'selected':''}}>III</option>
                                <option value="IV" {{$single_applicant->class == 'IV'?'selected':''}}>IV</option>
                                <option value="V" {{$single_applicant->class == 'V'?'selected':''}}>V</option>
                                <option value="VI" {{$single_applicant->class == 'VI'?'selected':''}}>VI</option>
                                <option value="VII" {{$single_applicant->class == 'VII'?'selected':''}}>VII</option>
                                <option value="VIII" {{$single_applicant->class == 'VIII'?'selected':''}}>VIII</option>
                                <option value="IX" {{$single_applicant->class == 'IX'?'selected':''}}>IX</option>
                                <option value="X" {{$single_applicant->class == 'X'?'selected':''}}>X</option>
                                <option value="XI" {{$single_applicant->class == 'XI'?'selected':''}}>XI</option>
                                <option value="XII" {{$single_applicant->class == 'XII'?'selected':''}}>XII</option>
                            </select>
                            @if($errors->has('class'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('class') }}</strong>
                            </span>
                            @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="session">For the Session</label>
                    <select name="session" id="session" class="form-control">
                        <option value="" selected disabled>--SELECT SESSION--</option>
                        <option value="2018" {{$single_applicant->session == '2018'?'selected':''}}>2018</option>
                        <option value="2019" {{$single_applicant->session == '2019'?'selected':''}}>2019</option>
                        <option value="2020" {{$single_applicant->session == '2020'?'selected':''}}>2020</option>
                    </select>
                    @if($errors->has('session'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('session') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="admission_no">Admission No.</label>
                    <input type="text" class="form-control" id="admission_no" name="admission_no" value="{{ $single_applicant->admission_no }}">
                    @if($errors->has('admission_no'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('admission_no') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="registration_no">Registration No.</label>
                    <input type="text" class="form-control" id="registration_no" name="registration_no" value="{{ $single_applicant->registration_no }}">
                    @if($errors->has('registration_no'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('registration_no') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" value="{{$single_applicant->dob}}" name="dob">
                    @if($errors->has('dob'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="place">Place of Birth (Village/Town)</label>
                    <input type="text" class="form-control" id="place" name="place" value="{{ $single_applicant->place }}">
                    @if($errors->has('place'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('place') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="fn">Father's Name</label>
                    <input type="text" class="form-control" id="fn" name="fn" value="{{ $single_applicant->fn }}">
                    @if($errors->has('fn'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('fn') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="mn">Mother's Name</label>
                    <input type="text" class="form-control" id="mn" name="mn" value="{{ $single_applicant->mn }}">
                    @if($errors->has('mn'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mn') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="mt">Mother Tongue</label>
                    <input type="text" class="form-control" id="mt" name="mt" value="{{ $single_applicant->mt }}">
                    @if($errors->has('mt'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mt') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="religion">Religion</label>
                    <input type="text" class="form-control" id="religion" name="religion" value="{{ $single_applicant->religion }}">
                    @if($errors->has('religion'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('religion') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="community">Community</label>
                    <input type="text" class="form-control" id="community" name="community" value="{{ $single_applicant->community }}">
                    @if($errors->has('community'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('community') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="cast-comm-group-tribe">Cast/Comm/Group/Tribe <small>(Upload a copy of certificate)</label>
                    <select name="cast" class="form-control" id="cast-comm-group-tribe">
                        <option value="" selected disabled>--SELECT CASTE/COMM/GROUP/TRIBE--</option>
                        <option value="General" {{$single_applicant->cast == 'General'?'selected':''}}>General</option>
                        <option value="EWS" {{$single_applicant->cast == 'EWS'?'selected':''}}>EWS</option>
                        <option value="OBC" {{$single_applicant->cast == 'OBC'?'selected':''}}>OBC</option>
                        <option value="MOBC" {{$single_applicant->cast == 'MOBC'?'selected':''}}>MOBC</option>
                        <option value="SC" {{$single_applicant->cast == 'SC'?'selected':''}}>SC</option>
                        <option value="ST(P)" {{$single_applicant->cast == 'ST(P)'?'selected':''}}>ST(P)</option>
                        <option value="ST(H)" {{$single_applicant->cast == 'ST(H)'?'selected':''}}>ST(H)</option>
                    </select>
                    @if($errors->has('cast'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('cast') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="pa">Permanent Address:</label>
                    <textarea class="form-control" id="pa" name="pa" cols="50" rows="3">{{ $single_applicant->pa }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="tel">Telephone No. with STD code</label>
                    <input type="text" class="form-control" id="tel" name="tel" value="{{ $single_applicant->tel }}">
                    @if($errors->has('tel'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('tel') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="la">Local Address:</label>
                    <textarea name="la" class="form-control" id="la" cols="50" rows="3">{{$single_applicant->la}}</textarea>
                    @if($errors->has('la'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('la') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="local-tel">Telephone No.</label>
                    <input type="text" class="form-control" id="local-tel" name="local-tel" value="{{$single_applicant->local_tel}}" placeholder="Enter telephone no.">
                    @if($errors->has('local-tel'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('local-tel') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="pgname">Parent's Name</label>
                    <input type="text" class="form-control" id="pgname" name="pgname" value="{{ $single_applicant->pgname }}">
                    @if($errors->has('pgname'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('pgname') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="pgaddress">Parent's Address</label>
                    <textarea class="form-control" id="pgaddress" names="pgaddress" cols="50" rows="3">{{$single_applicant->pgaddress}}</textarea>
                </div>
                <div class="col-md-4">
                    <label for="occupation">Parent's Occupation</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $single_applicant->occupation }}">
                    @if($errors->has('occupation'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('occupation') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="income">Annual Income</label>
                    <input type="text" class="form-control" id="income" name="income" value="{{$single_applicant->income}}">
                    @if($errors->has('income'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('income') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="pgaddress">Parent's Address</label>
                    <textarea class="form-control" id="pgaddress" names="pgaddress" cols="50" rows="3">{{$single_applicant->pgaddress}}</textarea>
                </div>
                <div class="col-md-4">
                    <label for="occupation">Parent's Occupation</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $single_applicant->occupation }}">
                    @if($errors->has('occupation'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('occupation') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
         </div>

 </div>
@stop
