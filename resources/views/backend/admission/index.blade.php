@extends('admin_template')

	@section('content_header')

      <h1>
       Admission details
        <small>Applicants</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

   @stop

@section('content')


                <div class="col-md-12">
           <div class="panel panel-primary">

            <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>Admission Lists

                </div>

                <div class="panel-body table-responsive">
                     <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="example">
                <thead>
                <tr>
                  <th>slno</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Guardian Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Location</th>
                  <th>Appliation Form</th>
									<td>Action</td>




                </tr>
                </thead>
                <tbody>
                  @foreach ($admissions as $i => $admission)
                    <tr>
                            <td>{{ ++$i }}</td>
                            <td><b style="font-size:16px;color:blue">{{ $admission->name }}</b></td>
                            <td><b style="color:red;">({{ $admission->class }}<b>)</td>
                            <td>{{ $admission->g_name }}</td>
                            <td>{{ $admission->email }}</td>
                            <td>{{ $admission->phone }}</td>
                            <td>{{ $admission->location }}</td>
														<td>
															<a href=" ../{{$admission->photo}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
															</a>
													<td>
															{!! Form::open(['method' => 'DELETE','route' => ['admission.destroy',
															$admission->id],'style'=>'display:inline']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
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
