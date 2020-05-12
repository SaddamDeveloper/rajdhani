@extends('admin_template')
@section('content_header')

      <h1>
        Change Password
            <small>Change Password
            </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

   @stop

@section('content')



 <div class="row">
       <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-save"></span> Change Password
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
             

                       {!! Form::open(array('action' => 'Auth\ChangePasswordController@changepassword','method'=>'POST' )) !!}

                     <div class="row">
                      <div id="cat_from">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email Address:</strong>
                                {!! Form::text('email', Auth::user()->email , array('placeholder' => 'Username','class' => 'form-control', 'id' => 'email', 'readonly' => true)) !!}
                            </div>
                        </div>
                    

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>New Password:</strong>
                             
                                  <input type="password" name="new_password", class="form-control" id="new_password", placeholder="New Password">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Confirm New Password:</strong>
                              
                                  <input type="password" name="confirm", class="form-control" id="confirm", placeholder="Confirm New Password">
                            </div>
                            <div class="form-group">
                              <span class="error" style="color:red"></span><br />
                            </div>
                        </div>
                        

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="form_sub">
                                <button type="submit" class="btn btn-primary btn-xs">Submit</button>
                        </div>
                         <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="form_sub_edit" hidden>
                                <button type="button" class="btn btn-warning btn-xs update">Update</button>
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

