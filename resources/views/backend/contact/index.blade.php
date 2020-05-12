@extends('admin_template')

	@section('content_header')

      <h1>
       Contact details
        <small>Contacts</small>
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
                    <span class="glyphicon glyphicon-list"></span>Contact Lists

                </div>

                <div class="panel-body table-responsive">
                     <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="example">
                <thead>
                <tr>
                  <th>slno</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Subject</th>
                  <th>Message</th>
									<th>Action</th>




                </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $i => $contact)
                    <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
														<td>{!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}
														{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
														{!! Form::close() !!}</td>


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
