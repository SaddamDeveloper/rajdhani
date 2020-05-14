@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            {{ Form::open(array('url' => 'student/login', 'method' => 'post', 'class' => 'student')) }}
            <h3 class="title-default-left title-bar-high">Student Login</h3>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" name="mobile"  placeholder="Enter phone">
                    @if($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @if($errors->has('password'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group form-check">
                    <a href="#"><label class="form-check-label" for="exampleCheck1">Forgot Password?</label></a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="text-center" style="padding-top: 10px; margin-bottom: 0;">Not registered ? <a href="{{route('frontend.student_register')}}">Click here</a></p>
            </form>
        </div>
    </div>
</div>
@stop
