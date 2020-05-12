@extends('admin_template')
@section('content_header')

      <h1>
      News Editor
        <small>NEWS Enrty</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

   @stop

@section('content')



 <div class="row">
       <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-save"></span> News Entry Lists
                    <div class="pull-right action-buttons">

                    </div>
                </div>
                <div class="panel-body">
                 @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <div class="flash-message">
                      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                      @endforeach
                    </div>
                  <h2> Insert  Product</h2>

                      {!! Form::model($new,['method'=>'PATCH','files' => true, 'action'=>['NewsController@update',  $new->id]]) !!}

                     <div class="row">
                      <div id="cat_from">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('heading', null, array('placeholder' => 'News Heading','class' => 'form-control', 'id' => 'name')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::date('date', null, array('class' => 'form-control', 'id' => 'date')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {!! Form::textarea('details', null, array('placeholder' => 'Detailed News','class' => 'form-control','style'=>'height:100px', 'id' => 'desc')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Upload  PDF:</strong>

                         {!! Form::file('photo', null, array('class' => 'form-control', 'id' => 'photo' ,  'required')) !!}
                    </div>
                </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="form_sub">
                                <button type="submit" class="btn btn-primary btn-xs">Update News</button>
                        </div>

                      </div>



                   </div>

                    {!! Form::close() !!}

                </div>
                <div class="panel-footer">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>





    </div>

@stop
