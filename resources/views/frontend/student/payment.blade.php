@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{-- <div class="col-md-6">
                <br>
                <input type="text" name="status" id="" placeholder="Enter the transaction ID to check" class="form-control">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Check</button>
            </div> --}}
            <div class="pay-now-box text-center" style="padding: 180px 0;">
                @if(Auth::guard('student')->user()->class == 'XI' || Auth::guard('student')->user()->class == 'XII')
                    <a href="{{route('frontend.student_admission_11_to_12')}}" class="btn btn-success">PAY</a>
                @else
                    <a href="{{route('frontend.student_admission_1_to_10')}}" class="btn btn-success">PAY</a>
                @endif
                </div>
        </div>
    </div>
</div>
@endsection