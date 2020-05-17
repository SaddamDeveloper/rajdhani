@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            {{ Form::open(array('route' => 'student.registration.store', 'method' => 'post', 'class' => 'student')) }}
            <h3 class="title-default-left title-bar-high">Student Registration</h3>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter name">
                    @if($errors->has('name'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="class">Select Class</label>
                    <select name="class" id="class" class="form-control">
                        <option value="" selected disabled>--SELECT YOUR CLASS--</option>
                        <option value="I" {{old('class') == 'I'?'selected':''}}>I</option>
                        <option value="II" {{old('class') == 'II'?'selected':''}}>II</option>
                        <option value="III" {{old('class') == 'III'?'selected':''}}>III</option>
                        <option value="IV" {{old('class') == 'IV'?'selected':''}}>IV</option>
                        <option value="V" {{old('class') == 'V'?'selected':''}}>V</option>
                        <option value="VI" {{old('class') == 'VI'?'selected':''}}>VI</option>
                        <option value="VII" {{old('class') == 'VII'?'selected':''}}>VII</option>
                        <option value="VIII" {{old('class') == 'VIII'?'selected':''}}>VIII</option>
                        <option value="IX" {{old('class') == 'IX'?'selected':''}}>IX</option>
                        <option value="X" {{old('class') == 'X'?'selected':''}}>X</option>
                        <option value="XI" {{old('class') == 'XI'?'selected':''}}>XI</option>
                        <option value="XII" {{old('class') == 'XII'?'selected':''}}>XII</option>
                    </select>
                    @if($errors->has('class'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('class') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="session">Select Session</label>
                    <select name="session" id="session" class="form-control">
                        <option value="" selected disabled>--SELECT SESSION--</option>
                        <option value="2018" {{old('session') == '2018'?'selected':''}}>2018</option>
                        <option value="2019" {{old('session') == '2019'?'selected':''}}>2019</option>
                        <option value="2020" {{old('session') == '2020'?'selected':''}}>2020</option>
                    </select>
                    @if($errors->has('session'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('session') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="phone2">Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter phone">
                    @if($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if($errors->has('password'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="text-center" style="padding-top: 10px; margin-bottom: 0;">Already registered ? <a href="{{route('frontend.student_login')}}">Click here</a></p>
            </form>
        </div>
    </div>
</div>
@stop
