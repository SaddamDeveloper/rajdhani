@extends('admin_template')

	@section('content_header')
    <button class="btn btn-danger pull-right" onclick="javascript:window.close()"><i class="fa fa-close"></i></button>
      <h1>
       {{$blog->title}}
       <small>{{$blog->user_id}}</small>
      </h1>

   @stop

@section('content')
<div class="col-md-12">
  <div class="panel panel-primary">

   <div class="panel-heading">
           <span class="glyphicon glyphicon-list"></span> {{$blog->title}}
       </div>
        
       <div class="panel-body table-responsive">
         <span>
           <img src="{{asset('blog/'.$blog->image)}}" alt="" width="150px">
         </span>
        <p>{{$blog->description}}</p>
       </div>
  </div>
</div>
@stop
