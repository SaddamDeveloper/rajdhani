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
        <div class="panel-body">
            <div class="flash-message">
<h2>Edit Blog</h2>

{{ Form::open(['method' => 'post','route'=>'blog.blog_update', 'enctype'=>'multipart/form-data']) }}
    <input type="hidden" value="{{$blog->id}}" name="blog_id">
    <div class="row">
    <div id="cat_from">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input placeholder="Enter title" class="form-control" id="name" name="title" value="{{ $blog->title }}" type="text">
            @if($errors->has('title'))
            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea placeholder="Enter Description" class="form-control" style="height:100px" name="description" cols="50" rows="10">{{$blog->description}}</textarea>
            @if($errors->has('description'))
            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Upload  Image:</strong>
    <span>
        <img src="{{asset('blog/thumb/'.$blog->image)}}" alt="no-image" width="100px">
    </span>    
    <input name="image" type="file" class="form-control">
    @if($errors->has('image'))
    <span class="invalid-feedback" role="alert" style="color:red">
        <strong>{{ $errors->first('image') }}</strong>
    </span>
    @endif
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="form_sub">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </div>

    </div>

</form>

</div>

 </div>
@stop
