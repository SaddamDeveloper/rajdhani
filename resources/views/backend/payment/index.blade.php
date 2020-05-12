@extends('admin_template')

  @section('content_header')

      <h1>
       Payment details
        <small>Payment</small>
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
                    <span class="glyphicon glyphicon-list"></span>Payment Lists

                </div>
            <div class="panel-body table-responsive">
                             <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="example">
                <thead>               
                <tr>
                  <th>slno</th>
                  
                  <th>Buyer</th>
                  <th>Phone</th>
                  <th>email</th>  
                  <th width="10%" >Amount</th>              
                  <th>Instrument</th>
                  <th>Status</th>
                  <th>Payment Id</th>
                  <th>Complete At</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach ($payments as $i => $payment)
                    <tr>
                            <td>{{ ++$i }}</td>
                            
                            
                            <td>{{ $payment->buyer_name }}</td>
                            <td>{{ $payment->buyer_phone }}</td>
                            <td>{{ $payment->buyer_email }}</td>
                            <td>₹ {{ $payment->amount }} </td>
                            <td>{{ $payment->instrument_type }} </td>
                            <td>{{ $payment->status }} </td>
                            <td>{{ $payment->payment_id }} </td>
                            <td>{{ $payment->payment_at }} </td>
                           
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
