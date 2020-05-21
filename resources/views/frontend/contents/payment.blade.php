    @extends('master')


@section('content')

       <div class="breadcumbs-area breadcumbs-bg-1 bc-area-padding">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h2>Payment</h2>
                                <span><a href="index.html">home</a> / Payment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcumbs Area -->
        
        <!-- Start Services Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                
                                <h3 class="title">Application Form fees</h3>
                                <span class="price-value"><span class="currency"></span>Rs.500</span>
                            </div>
                  <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-8"><em>Application Form Fees</em></h4></td>
                            
                            <td class="col-md-2 text-center">Rs. 500</td>
                            <td class="col-md-2 text-center">Rs. 500</td>
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
                                <strong>Rs. 500</strong>
                            </p>
                            <p>
                                <strong>Rs. 0</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                          
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>Rs. 500</strong></h4></td>
                        </tr>
                        <form method="post" action="{{url('/pay')}}">
                        {{ csrf_field() }}
                        @if(isset($registration) && !empty($registration))
                        <tr>
                            <td>
                                <input type="hidden" value="{{$registration->name}}" name="name" class="txt">
                            </td>
                            <td>
                                <input type="hidden" value="{{$registration->mobile}}" name="phone" class="txt">
                            </td>
                            <td>
                                <input type="hidden" value="{{$registration->email}}" name="email" class="txt">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> <input class="btn btn-primary pull-right" type="submit" value="Pay" style="background-color: #008000b0;    color: #fff;"></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                            
                        </div>

                               
                    </div>

                  
                </div>
                <div class="space-tb-30"></div>
   
                
            </div>
        </div>

@stop