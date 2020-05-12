@extends('admin_template')
@section('content_header')

      <h1>
        Product Details
        <small>Event Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

   @stop

@section('content')



 <div class="row">
       <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-save"></span>Enter Events
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
                  <h2> Insert update</h2>

                       {!! Form::model($event,['method'=>'PATCH','files' => true, 'action'=>['EventController@update',  $event->id]]) !!}

                     <div class="row">
                      <div id="cat_from">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Heading:</strong>
                                {!! Form::text('event_heading', null, array('placeholder' => 'Meeting Heading','class' => 'form-control', 'id' => 'name')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> Event Day:</strong>
                                {!! Form::number('event_date', null, array('placeholder' => 'Enter Date','class' => 'form-control', 'id' => 'name')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Month:</strong>
                                {!! Form::text('event_month', null, array('placeholder' => 'Enter Event Month','class' => 'form-control', 'id' => 'desc')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Year:</strong>
                                {!! Form::number('event_year', null, array('placeholder' => 'Enter Event Month','class' => 'form-control', 'id' => 'desc')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Time:</strong>
                                {!! Form::text('event_time', null, array('placeholder' => 'Enter Event Time','class' => 'form-control','id' => 'desc')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Location:</strong>
                                {!! Form::text('event_location', null, array('placeholder' => 'Enter Event Location','class' => 'form-control', 'id' => 'desc')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Description:</strong>
                                {!! Form::textarea('event_description', null, array('placeholder' => 'Enter Event details','class' => 'form-control','style'=>'height:80px;',  'id' => 'desc')) !!}
                            </div>
                        </div>


                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="form_sub">
                             <button type="submit" class="btn btn-primary btn-xs">Update Event</button>
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


        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>Event Detail Lists
                    <div class="pull-right action-buttons">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-cog" style="margin-right: 0px;"></span>
                            </button>
                            <ul class="dropdown-menu slidedown">
                                <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
                                <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-trash"></span>Delete</a></li>
                                <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-flag"></span>Flag</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                     <table class="table table-striped table-bordered table-responsive" cellspacing="0" id="example">
                <thead>
                <tr>
                  <th>slno</th>
                  <th> Heading</th>
                  <th> Day</th>
                  <th> Month </th>
                  <th> Year </th>
                  <th> Description  </th>
                  <th> Time  </th>
                  <th> Location  </th>




                </tr>
                </thead>
                <tbody>
                     @foreach ($events as $i => $event)
                      <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $event->event_heading }}</td>
                          <td>{{ $event->event_date }}</td>
                          <td>{{ $event->event_month }}</td>
                          <td>{{ $event->event_year }}</td>
                          <td>{{ $event->event_description }}</td>
                          <td>{{ $event->event_time }}</td>
                          <td>{{ $event->event_location }}</td>






                      </tr>
                      @endforeach
                </tbody>
                <tfoot>
                <tr>

                </tr>
                </tfoot>
              </table>
                </div>
                <div class="panel-footer">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>


    </div>
@stop
