@extends('master')
@section('content')
<!-- Mobile Menu Area End -->
<div class="inner-page-banner-area">
            <div class="container">
                <div class="pagination-area">
                    <h1 style="text-align: center;">Contact Us </h1>
                    <!-- <ul>
                        <li><a href="{{url('/')}}">Home</a> -</li>
                        <li>Contact</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page 1 Area Start Here -->
        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-info1">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>(+91) 94351-12572<br>(+91) 99576-15240</p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>Nazirakhat-Sonapur-Guwahati,<br
                                    kamrup, Assam</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p>nathamritchandra1960@gmail.com</p>
                                </li>
                                <li>
                                    <h3>Follow Us</h3>
                                    <ul class="contact-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                        <div class="flash-message">
		                          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
		                          @if(Session::has('alert-' . $msg))
		                          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
		                          @endif
		                          @endforeach
		                    </div>
	                        <div class="contact-form1">

	                          <fieldset>
	                            {!! Form::open(array('action' => 'ContactController@contact','method'=>'POST','class'=>'form-horizontal','id'=>'contact-form')) !!}

	                                                              <div class="contact-form2">
	                                                                  <form id="contact-form">
	                                                                      <fieldset>
	                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                                                              <div class="form-group">
	                                                                                  <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
	                                                                                  <div class="help-block with-errors"></div>
	                                                                              </div>
	                                                                          </div>
	                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                                                              <div class="form-group">
	                                                                                  <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
	                                                                                  <div class="help-block with-errors"></div>
	                                                                              </div>
	                                                                          </div>
	                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                                                              <div class="form-group">
	                                                                                  <input type="number" placeholder="phone" class="form-control" name="phone" data-error="" required>
	                                                                                  <div class="help-block with-errors"></div>
	                                                                              </div>
	                                                                          </div>
	                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                                                              <div class="form-group">
	                                                                                  <input type="subject" placeholder="subject" class="form-control" name="subject"  data-error="" required>
	                                                                                  <div class="help-block with-errors"></div>
	                                                                              </div>
	                                                                          </div>
	                                                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                                                              <div class="form-group">
	                                                                                  <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
	                                                                                  <div class="help-block with-errors"></div>
	                                                                              </div>
	                                                                          </div>
	                                                                          <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
	                                                                              <div class="form-group margin-bottom-none">
	                                                                                  <button type="submit" value="submit" class="default-big-btn" style="margin-bottom: 20px;">Send Message</button>
	                                                                              </div>
	                                                                          </div>
	                                                                          <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
	                                                                              <div class='form-response'></div>
	                                                                          </div>

	                                                                  </form>
							</fieldset>
	                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row" style="margin-bottom: 30px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.30471192695!2d91.93013231502833!3d26.12160598347473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59a19e75cecd%3A0x8798e2be60d37894!2sRajdhani+Public+School!5e0!3m2!1sen!2sin!4v1528802268020" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
        <!-- Contact Us Page 1 Area End Here -->







@stop
