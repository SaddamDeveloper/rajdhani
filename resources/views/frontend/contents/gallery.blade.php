

@extends('master')
@section('content')<!-- Inner Page Banner Area Start Here -->

           <!-- Mobile Menu Area End -->

           <!-- Mobile Menu Area End -->
<div class="inner-page-banner-area">
           <div class="container">
               <div class="pagination-area" align="middle">
                   <h1>Gallery</h1>
                   <!-- <ul>
                       <li><a href="#">Home</a> -</li>
                       <li>Gallery</li>
                   </ul> -->
               </div>
           </div>
       </div>
       <!-- Inner Page Banner Area End Here -->
       <!-- Gallery Area 2 Start Here -->
       <div class="gallery-area2">
           <div class="container" id="inner-isotope">

           <div class="row featuredContainer gallery-wrapper" align="middle">
            @foreach($galleries as $i=> $gallery)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
                <div class="featured-box">
                     <div class="featured-img-holder hvr-bounce-to-right">
                         <img src="../{{$gallery->photo}}" class="img-responsive" alt="featured" style=" height: 200px;width: 262px;">
                         <a href="../{{$gallery->photo}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                     </div>
                     <div class="featured-content-holder">
                         <h3><a href="#">{{$gallery->name}}</a></h3>
                         <!-- <p>Rmply dummy printing ypesetting industry it’s free demo.</p> -->
                     </div>
                 </div>
                 </div>
                 @endforeach
               </div>
             </div>
           </div>
                 
















<!-- 
               <div class="row featuredContainer gallery-wrapper">
                 @foreach($galleries as $i=> $gallery)
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam">
                       <div class="gallery-box">
                           <img src="../{{$gallery->photo}}" class="img-responsive" alt="gallery">
                           <div class="gallery-content">
                               <a href="../{{$gallery->photo}}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                       </div>
                   </div>
                   @endforeach

               </div> -->
           </div>
       </div>
       @endsection
