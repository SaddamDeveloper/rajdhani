@extends('admin_template')

	@section('content_header')

      <h1>
       Blog Details
        <small>Blog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('blog.create')}}" class="btn btn-primary" >Add Blog</a>
        @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
   @stop

@section('content')
      

<div class="col-md-12">
    <div class="panel panel-primary">

     <div class="panel-heading">
             <span class="glyphicon glyphicon-list"></span>Blog Lists

         </div>

         <div class="panel-body table-responsive">
              <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="example">
         <thead>
         <tr>
           <th>slno</th>
           <th>Title</th>
           <th>Description</th>
           <th>Image</th>
           <th>Writen By</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
           @foreach ($blogs as $blog)
             <tr>
                     <td>{{ $blog->id }}</td>
                     <td>{!! Str::words($blog->title, 6, ' ...') !!}</td>
                     <td>{!! Str::words($blog->description, 10, ' ...') !!}</td>
                     <td>{{ $blog->image }}</td>
                     <td>{{ $blog->user_id }}</td>
                     <td> 
                       @if($blog->status == 1)
                        <a href="{{route('admin.blog_status', ['id' => encrypt($blog->id), 'status' => encrypt(2)])}}" class='btn btn-danger btn-sm'>Unpublish</a>
                        @elseif($blog->status == 2)
                          <a href="{{route('admin.blog_status', ['id' => encrypt($blog->id), 'status' => encrypt(1)])}}" class='btn btn-success btn-sm'>Publish</a>
                          @endif
                          <a href='{{route('blog.show', ['blog' => encrypt($blog->id)])}}' class='btn btn-info' target="_blank">View</a>
                          <a href='{{route('blog.edit', ['blog' => encrypt($blog->id)])}}' class='btn btn-warning' target="_blank">Edit</a> 
                        </td>
             </tr>
             @endforeach
         </tbody>
         <tfoot>
         <tr>

         </tr>
         </tfoot>
       </table>
         </div>

 </div>
@stop
