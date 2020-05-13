@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="student">
            <h3 class="title-default-left title-bar-high">Student Registration</h3>
            <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="class">Select Class</label>
                    <select name="class" id="class" class="form-control">
                        <option value="" selected disabled>--SELECT YOUR CLASS--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone2">Mobile Number</label>
                    <input type="number" class="form-control" id="phone2" placeholder="Enter phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="text-center" style="padding-top: 10px; margin-bottom: 0;">Already registered ? <a href="{{route('frontend.student_login')}}">Click here</a></p>
            </form>
        </div>
    </div>
</div>
@stop
