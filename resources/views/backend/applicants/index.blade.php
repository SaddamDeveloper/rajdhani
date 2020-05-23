@extends('admin_template')

	@section('content_header')

      <h1>
       Applicants Details
      </h1>
      <br>
   @stop

@section('content')
      

<div class="col-md-12">
    <div class="panel panel-primary">

     <div class="panel-heading">
             <span class="glyphicon glyphicon-list"></span>Applicants Lists

         </div>

         <div class="panel-body table-responsive">
              <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="example">
         <thead>
         <tr>
           <th>slno</th>
           <th>Name</th>
           <th>Father's Name</th>
           <th>Mother's Name</th>
           <th>Class</th>
           <th>Session</th>
           <th>Regitration No</th>
           <th>DOB</th>
           <th>Religion</th>
           <th>Community</th>
           <th>Payment Status</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
           @php
           @endphp
           @foreach ($applicants as $applicant => $value)
             <tr>
                     <td>{{ $value->id }}</td>
                     <td>{{$value->name}}</td>
                     <td>{{$value->fn}}</td>
                     <td>{{ $value->mn }}</td>
                     <td>{{ $value->class }}</td>
                     <td>{{ $value->session }}</td>
                     <td>{{ $value->registration_no }}</td>
                     <td>{{ $value->dob }}</td>
                     <td>{{ $value->religion }}</td>
                     <td>{{ $value->community }}</td>
                     <td>
                       @if($value->buyer_email)
                        <label class="label label-success">PAID</label>
                        @else
                        <label class="label label-warning">NOT PAID</label>
                       @endif
                     </td>
                     <td> 
                          <a href='{{route('applicant.show', ['id' => encrypt($value->id)])}}' class='btn btn-info' target="_blank">View</a>
                          <a href='{{route('applicant.edit', ['id' => encrypt($value->id)])}}' class='btn btn-warning' target="_blank">Edit</a> 
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
