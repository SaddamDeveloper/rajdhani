@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pay-now-box text-center" style="padding: 180px 0;">
                @if(Auth::guard('student')->user()->class == 'XI' || Auth::guard('student')->user()->class == 'XII')
                    <a href="class1112" class="btn btn-success">FILL UP THE FORM</a>
                @else
                    <a href="class110" class="btn btn-success">FILL UP THE FORM</a>
                @endif
                </div>
        </div>
    </div>
</div>
@endsection