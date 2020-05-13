@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="student">
            <h3 class="title-default-left title-bar-high">Student Login</h3>
                <div class="form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="number" class="form-control" id="phone"  placeholder="Enter phone">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
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
