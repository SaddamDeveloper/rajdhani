@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form class="student">
            <h3 class="title-default-left title-bar-high">Student Login</h3>
                <div class="form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="number" class="form-control" id="phone"  placeholder="Enter phone">
                    <small id="" class="form-text text-muted">We'll never share your data with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <a href="#"><label class="form-check-label" for="exampleCheck1">Forgot Password?</label></a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <form class="student">
            <h3 class="title-default-left title-bar-high">Student Registration</h3>
                <div class="form-group">
                    <label for="phone2">Mobile Number</label>
                    <input type="number" class="form-control" id="phone2" placeholder="Enter phone">
                    <small id="" class="form-text text-muted">We'll never share your data with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check" style="visibility: hidden;">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@stop
