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
                                       <li>
                                           <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-download"></i>Admission Here</a>
                                           <div class="login-form" id="login-form" style="display: none;">

                                               <div><a href="{{url('/payment')}}">Download Application Form (Class: I-X)</a><br><a href="{{url('/payment')}}"><img border="0" src="img/gallery/1.jpg" width="0" height="0">Download Application Form (Class: XI-XII)</a></div>
                                                <div class=" title-default-left-bold" align="left">Admission Here</div>
                                               {!! Form::open(array('action' => 'AdmissionController@admission','method'=>'POST','files' => true )) !!}

                                                   <label>Student Name  *</label>
                                                   <input type="text" placeholder="Name" class="form-control" name="name" id="form-name"  required>
                                                   <label>Class  *
                                                   <select  name="class">
                                                     <option value="I">I</option>
                                                     <option value="II">II</option>
                                                     <option value="III">III</option>
                                                     <option value="IV">IV</option>
                                                     <option value="V">V</option>
                                                     <option value="VI">VI</option>
                                                     <option value="VII">VII</option>
                                                     <option value="VIII">VIII</option>
                                                     <option value="IX">IX</option>
                                                     <option value="X">X</option>
                                                     <option value="XI">XI</option>
                                                     <option value="XII">XII</option>
                                                   </select></label>

                                                   <!-- <input type="text" placeholder="Name" class="form-control" name="class"  required> -->

                                                   <label>Guardian Name  *</label>
                                                   <input type="text" placeholder="Guardian Name" class="form-control" name="g_name"  required>

                                                   <label>Contact Number  *</label>
                                                   <input type="text" placeholder="phone" class="form-control" name="phone"   required>

                                                   <label>Email id  *</label>
                                                   <input type="text" placeholder="Email  id" class="form-control" name="email"   required>

                                                   <label>Location *</label>
                                                   <input type="text" placeholder="Location" class="form-control" name="location"   required>
                                                   <strong>Upload  PDF Form:</strong>

                                                    {!! Form::file('photo', null, array('class' => 'form-control', 'id' => 'photo' ,  'required')) !!}


                                                   <button class="default-big-btn" type="submit" value="Submit">Submit </button>

                                               </form>
                                            </div>
                                           <!-- </div> -->
                                       </li>
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
                                   <a href="{{url('/')}}"><img  id="logoidk" src="img/logo.png" alt="logo"></a>
                               </div>
                           </div>
                           <div class="col-lg-7 col-md-7 col-sm-7">
                               <nav id="desktop-nav">
                                   <ul>
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
