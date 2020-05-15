<!-- Header Area Start Here -->
       <header>
           <div id="header2" class="header2-area">
               <div class="header-top-area">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <div class="header-top-left">
                                   <ul>
                                       <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+91-94351-12572">+91-94351-12572 </a></li>
                                       <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">nathamritchandra1960@gmail.com</a></li>
                                   </ul>
                               </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <div class="header-top-right">
                                 <!-- <div class="panel-body"> -->

                                   <ul>
                                       <li> <a href="docs/tc.pdf" class="login-btn-area" download><i class="fa fa-download"></i>Click here to download TC Form</a></li>
                                       @if(!Auth::guard('student')->check())
                                       <li>
                                       <a class="login-btn-area" href="{{route('student.login')}}"><i class="fa fa-download"></i>Admission Here</a>
                                           <!-- </div> -->
                                       </li>
                                       @endif
                                       <!-- <li>
                                           <div class="apply-btn-area">
                                               <a href="#" class="apply-now-btn">Admission Here</a>
                                           </div>
                                       </li> -->
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="main-menu-area bg-textPrimary" id="sticker">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-lg-5 col-md-5 col-sm-5">
                               <div class="">
                                   <a href="{{url('/')}}"><img  id="logoidk" src="{{asset('img/logo.png')}}" alt="logo"></a>
                               </div>
                           </div>
                           <div class="col-lg-7 col-md-7 col-sm-7">
                               <nav id="desktop-nav">
                                   <ul>
                                    @if(Auth::guard('student')->check())
                                        <li>
                                            <a href="{{route('student.dashboard')}}" class="pull-right">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="" class="pull-right">{{Auth::guard('student')->user()->name}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('student.logout') }}" class="fa fa-sign-out pull-right" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                Logout
                                            </a>     
                                            <form id="frm-logout" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                   @else
                                       <li><a href="{{url('/')}}">Home</a></li>
                                       <li><a href="#">About Us</a>
                                           <ul>
                                               <li><a href="{{url('/about')}}">Principal's Message</a></li>
                                               <li><a href="{{url('/our_school')}}">Our School</a></li>
                                               <li><a href="{{url('/facilities')}}">Facilities</a></li>
                                               <!-- <li><a href="{{url('/more')}}">More</a></li> -->
                                           </ul>
                                       </li>
                                       <li><a href="#">Academics</a>
                                           <ul>
                                               <li><a href="{{url('/courses')}}">Courses</a></li>
                                               <li><a href="{{url('/exam')}}">Exams</a></li>
                                               <li><a href="{{url('/process')}}">Academic Process</a></li>
                                               <!-- <li><a href="{{url('/tour')}}">Educational Tours</a></li> -->
                                               <!-- <li><a href="{{url('/more')}}">More</a></li> -->
                                           </ul>
                                       </li>

                                       <li><a href="#">Admission</a>
                                           <ul>
                                               <li><a href="{{url('/ad_procedure')}}">Admission Procedure</a></li>
                                               <li><a href="{{url('/registration')}}">Registration Cum Admission</a></li>
                                               <!-- <li><a href="#">Admission Guideline</a></li> -->
                                               <!-- <li><a href="#">More</a></li> -->
                                           </ul>
                                       </li>

                                       </li>
                                       <li><a href="{{url('/blogs')}}">Blog</a>
                                       <li><a href="{{url('/gallery')}}">Gallery</a>

                                       </li>
                                       <li><a href="{{url('/contact')}}">Contact</a> </li>
                                       @endif
                                   </ul>
                               </nav>
                           </div>
                           <!-- <div class="col-lg-1 col-md-1 hidden-sm">
                               <div class="header-search">
                                   <form>
                                       <input type="text" class="search-form" placeholder="Search...." required="">
                                       <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                   </form>
                               </div>
                           </div> -->
                       </div>
                   </div>
               </div>
           </div>
           <!-- Mobile Menu Area Start -->
           <div class="mobile-menu-area">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="mobile-menu">
                                 <nav id="dropdown">

                                   <ul>
                                       <li><a href="{{url('/')}}">Home</a></li>
                                       <li><a href="#">About Us</a>
                                           <ul>
                                               <li><a href="{{url('/about')}}">Principal's Message</a></li>
                                               <li><a href="{{url('/our_school')}}">Our School</a></li>
                                               <li><a href="{{url('/facilities')}}">Facilities</a></li>
                                               <!-- <li><a href="#">More</a></li> -->
                                           </ul>
                                       </li>
                                       <li><a href="#">Academics</a>
                                           <ul>
                                               <li><a href="{{url('/courses')}}">Courses</a></li>
                                               <li><a href="{{url('/exam')}}">Exams</a></li>
                                               <li><a href="{{url('/process')}}">Academic Process</a></li>
                                               <!-- <li><a href="#">More</a></li> -->
                                           </ul>
                                       </li>
                                       <!-- <li><a href="#">Administration</a>
                                           <ul>
                                               <li><a href="#">Staff Members</a></li>
                                               <li><a href="#">Vacancy</a></li>
                                               <li><a href="#">More</a></li>
                                           </ul>
                                       </li> -->
                                       <li><a href="#">Admission</a>
                                           <ul>
                                               <li><a href="{{url('/ad_procedure')}}">Admission Procedure</a></li>
                                               <li><a href="{{url('/registration')}}">Registration Cum Admission</a></li>
                                               <!-- <li><a href="#">Admission Guideline</a></li> -->
                                               <!-- <li><a href="#">More</a></li> -->
                                           </ul>
                                       </li>
                                      <!--  <li><a href="#">Media</a>
                                           <ul>
                                               <li><a href="#">Print</a></li>
                                               <li><a href="#">Awards</a></li>
                                               <li><a href="#">Electronics</a></li>
                                               <li><a href="#">More</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="#">News</a> -->
                                           <!-- <ul>
                                               <li class="has-child-menu"><a href="#">News</a>
                                                   <ul class="thired-level">
                                                       <li><a href="news1.html">News 1</a></li>
                                                       <li><a href="news2.html">News 2</a></li>
                                                       <li><a href="#">News Details</a></li>
                                                   </ul>
                                               </li>
                                               <li class="has-child-menu"><a href="#">Event</a>
                                                   <ul class="thired-level">
                                                       <li><a href="event.html">Event</a></li>
                                                       <li><a href="#">Event Details</a></li>
                                                   </ul>
                                               </li>
                                           </ul> -->
                                       </li>
                                       <li><a href="{{url('/gallery')}}">Gallery</a>
                                           <!-- <ul>
                                               <li><a href="gallery1.html">Gallery 1</a></li>
                                               <li><a href="gallery2.html">Gallery 2</a></li>
                                           </ul> -->
                                       </li>
                                       <li><a href="{{url('/contact')}}">Contact</a>
                                           <!-- <ul>
                                               <li><a href="contact1.html">Contact 1</a></li>
                                               <li><a href="contact2.html">Contact 2</a></li>
                                           </ul> -->
                                       </li>
                                   </ul>
                               </nav>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Mobile Menu Area End -->
       </header>
       
       <!-- Header Area End Here -->
