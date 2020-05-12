@extends('admin_template')
@section('content_header')

      <h1>
        NEWS Details
        <small>News Enrty & View</small>
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

                       {!! Form::open(array('action' => 'NewsController@store','method'=>'POST','files' => true )) !!}

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


        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>News Lists
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
                  <th>Name</th>
                  <th>Decription</th>
                  <th>Date</th>
                  <th>photo</th>



                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     @foreach ($news as $i => $news)
                      <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $news->heading }}</td>
                          <td>{{ $news->details }}</td>
                          <td>{{ $news-> date}}</td>

                          <td>
                            <a href=" ../{{$news->photo}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
															</a>
                           </td>




                             <td>
                              {!! Form::open(['method' => 'DELETE','route' => ['news.destroy', $news->id],'style'=>'display:inline']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                              {!! Form::close() !!}

                              <a href="/admin/news/{{$news->id}}/edit"
                             class="btn btn-xs btn-success">Edit</a>
                              <!-- <a href="/admin/news/{{$news->id}}/edit"
                             class="btn btn-xs btn-success">Edit</a> -->
                               </td>
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
                <div class="panel-footer">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>


    </div>

@stop
