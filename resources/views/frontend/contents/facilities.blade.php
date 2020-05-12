@extends('master')
@section('content')
<!-- Inner Page Banner Area Start Here -->

<style>
/* body {font-family: Arial, Helvetica, sans-serif;} */

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

           <!-- Mobile Menu Area End -->

           <!-- Mobile Menu Area End -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="pagination-area">
                    <h1 style="text-align: center;">Our Facilities</h1>
                    <!-- <ul>
                        <li><a href="{{url('/')}}">Home</a> -</li>
                        <li>Our Facilities</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- About Page 3 Area Start Here -->
        <div class="about-page3-area">
            <div class="container">
                <div class="row about-page3-inner">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-box">
                            <h2 class="title-bar-medium-left "><a href="#">MERIT AND HONOURS</a></h2>
                            <img src="img/merit.jpg" alt="" style="height: 232px;width: 360px;">
                            <hr style="border-top: 2px solid #ec6c05;">
                            <p>Merit & honours Certificate is awarded to the student excelling in any subject in their board examination as judges by the board of the Managing Committee of the institute.</p>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-box">
                            <h2 class="title-bar-medium-left "><a href="#">GAMES AND SPORTS</a></h2>
                            <img src="img/sports3.jpg" alt="" style="height: 232px;width: 360px;">
      <hr style="border-top: 2px solid #ec6c05;">
                            <p>Games and sports form an integral part of the school curriculum. Considerable attention is paid to the physical development of the students. The school provide facilities for all major games and Sports: Cricket, Badminton, Volleyball, Basketball, Football, Kabaddi, Taekwondo, NCC, Scout & Guide, Swimming etc.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-box">
                            <h2 class="title-bar-medium-left "><a href="#">TRANSPORT</a></h2>
                            <img src="img/transport.jpg" alt="" style="height: 232px;width: 360px;">
      <hr style="border-top: 2px solid #ec6c05;">
                            <p>Regular day Boarding Buses ply to collect &drop children from areas in
                              Greater Guwahati Upto Jagiroad. Bus Charges are
                              levied as per expences incurred from time to time.
                            </p>

                        </div>
                    </div>





                </div>
                <hr>
                <div class="row about-page3-inner">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="about-box">
                          <h2 class="title-bar-medium-left "><a href="#">SCOUT AND GUIDE</a></h2>
                          <img src="img/scoutnguide.jpg" alt="" style="height: 232px;width: 360px;">
      <hr style="border-top: 2px solid #ec6c05;">
                          <p>GIRL's guide and Boy's Scouting are other activities which inculcate the sense of discipline and make the students physical fit, strong and mentally alert. 
                             .</p>
                      </div>
                  </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-box">
                            <h2 class="title-bar-medium-left "><a href="#">LIBRARY & READING ROOM</a></h2>
                            <img src="img/library.png" alt="" style="height: 232px;width: 360px;">
      <hr style="border-top: 2px solid #ec6c05;">
                            <p>The school has a well maintained Library cum reading Room.
                              The Library has a very good collection of carefully
                               selected books suited to the need of the children of different classes.
                               .</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-box">
                            <h2 class="title-bar-medium-left "><a href="#">CULTURAL PROGRAMES</a></h2>
                            <img src="img/culture.jpg" alt="" style="height: 232px;width: 360px;">
      <hr style="border-top: 2px solid #ec6c05;">
                            <p>Besides imparting education of the highest quality, the school provides training in a wide range of cultural competitions are organised for the benefit of the student.</p>

                        </div>

                    </div>
                  </div>
                    <hr>


                <div class="row about-page3-inner">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="about-box">
                          <h2 class="title-bar-medium-left "><a href="#">CO-CURRICULAR ACTIVITIES</a></h2>
                          <img src="img/co.jpg" alt="" style="height: auto;width: 489px;"">
                         <hr style="border-top: 2px solid #ec6c05;">
                          <p >Co-curricular activities are the integrel part of the schooling.The school provides
                            ampt opportunities to engage the students in a wide verity of activities,
                             such as creativee writing public speaking, art and craft,
                            dramatics gardening, art, music, dance(<b>Bharat Natyam, Kothok, Satriya</b>)</p>
                      </div>
                  </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-box">
                            <h2 class="title-bar-medium-left "><a href="#">FOOD & NUTRITION </a></h2>
                            <img src="img/Hostel-Food.jpg" alt="" style="height: 363px;width: 489px;">
      <hr style="border-top: 2px solid #ec6c05;">
                            <p>Food is prepared according to principles of nutrition as per long experience of running boarding schools. Criterion for good food is low sickness rate, general fitness and high standard of health. the diet is aimed the producing right mortal ability for academics, study and thinking process to avoid by pear activity and excitement and controlling severe addiction to particular hash or type of food.</p>
                              <p><b>N.B.</b> All dues should be paid within 10th of every month. After 10th every month Rs. 50/-(fifty) will be imposed as late fine Hostel charges may be revised time to time, if necessary.</p>
                        </div>
                    </div>



                </div>


            </div>
        </div>
        <!-- About Page 3 Area End Here -->
        <!-- Why Choose Area Start Here -->
        <div class="about2-area">
          <div class="container">
              <h1 class="about-title"> Rajdhani Public School Provides</h1>
              <!-- <p class="about-sub-title" style="font-size: 30px;">Affiliated to CBSE, Delhi</p>
              <p class="about-sub-title">Class: Nursery to XII</p>
              <p class="about-sub-title">(Science , Arts & Commerce)</p> -->
          </div>
          <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Laboratory & Computers</a></h3>
                            <!-- <p>Dorem Ipsum has been the industry's standard dummy text ever since the en an unknown printer galley dear.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Skilled Teachers</a></h3>
                            <!-- <p>Dorem Ipsum has been the industry's standard dummy text ever since the en an unknown printer galley dear.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Book Library & Store</a></h3>
                            <!-- <p>Dorem Ipsum has been the industry's standard dummy text ever since the en an unknown printer galley dear.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Area End Here -->
        <!-- Lecturers Area Start Here -->

        <!-- Lecturers Area End Here -->
        <!-- Lecturers Area End Here -->
        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

@stop
