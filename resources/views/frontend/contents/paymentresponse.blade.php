    @extends('master')


@section('content')
     <div class="flash-message">
        
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
        @endif
      @endforeach
                   
    </div>
<div class="container">
     <span style="color: red">* Please note Payment id for further reference</span>

    <div class="row" id="DivIdToPrint">

        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7">
                    <address>
                        <strong>Recieve with Thanks From</strong>
                        <br>
                        {{$paid->buyer_name}}
                        <br>
                        {{$paid->buyer_email}}, 
                        <br>
                        <abbr title="Phone">P:</abbr> {{$paid->buyer_phone}}<br>
                        <abbr title="Payment Id">Payment Id:</abbr> {{$paid->payment_id}}
                    </address>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 text-right">
                    <p style="width: 100%">
                        <em>Date:{{$paid->payment_at}}</em>
                    </p>
                    <p>
                        <em>Receipt #: {{$paid->id}}R</em>
                    </p>
                </div>
            </div>
            <div class="row" >
                <div class="text-center">
                    <h1>Reciept</h1>
                </div>
                </span>
            <table class="table table-hover" style="margin-top: 130px;">
                    <thead>
                        <tr>
                            <th>Service</th>
                           
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-8"><em>One Time Admission Form Fees</em></h4></td>
                            
                            <td class="col-md-2 text-center">Rs. {{$paid->amount}}</td>
                            <td class="col-md-2 text-center">Rs. {{$paid->amount}}</td>
                        </tr>
                       
                            <td>   </td>
                           
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>Rs. {{$paid->amount}}</strong>
                            </p>
                            <p>
                                <strong>Rs. 0</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                          
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>Rs. {{$paid->amount}}</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
           
               </td>
            </div>
        </div>
    </div>
         <button type="button" class="btn btn-success btn-lg btn-block" onclick='printDiv();'>
                    Print   <span class="glyphicon glyphicon-chevron-right"></span>
                </button><a href="img/scan0002.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">
                    Download Application Form (Class: I-X)<span class="glyphicon glyphicon-chevron-right"></span>
                </button></a>
                <a href="img/scan0001.pdf" target="_blank">
                     <button type="button" class="btn btn-primary btn-lg btn-block">
                    Download Application Form  (Class: XI-XII)<span class="glyphicon glyphicon-chevron-right"></span>
                </button>
                </a>
 <a href="">Print</a>
 <script type="text/javascript">
     function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
 </script>
@stop