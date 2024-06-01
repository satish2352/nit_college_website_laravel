@extends('website.layout.master')
@section('content')
<style>
    body {
      font-family: Arial;
      margin: 0;
    }
    
    * {
      box-sizing: border-box;
    }
    
    img {
      vertical-align: middle;
    }
    
    /* Position the image container (needed to position the left and right arrows) */
    .container {
      position: relative;
    }
    
    /* Hide the images by default */
    .mySlides {
      display: none;
    }
    
    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
      cursor: pointer;
    }
    
    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }
    
    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* Container for image text */
    .caption-container {
      text-align: center;
      background-color: #222;
      padding: 2px 16px;
      color: white;
    }
    
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Six columns side by side */
    .column {
      float: left;
      width: 16.66%;
      margin-left: 20px;
    }
    
    /* Add a transparency effect for thumnbail images */
    .demo {
      opacity: 0.6;
    }
    
    .active,
    .demo:hover {
      opacity: 1;
    }
    </style>
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        <h4 style="color:green"><strong>Civil Department Achievements And Awards</strong></h4>
        <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                
                <div class="row">
                    @if (isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @else
                    @if (!$data_output)
                        <div class="alert alert-info">
                            Data not found
                        </div>
                    @else
                        @if ($data_output->is_active == 0)
                            <div class="alert alert-info">
                                Data not found
                            </div>
                        @else
                        <div class="item">
                       
                            <div class="carousel-caption">
                                <img src="../images/awards/<?php echo $data_output['fld_gallery_photo'];?>" class="img-responsive" ><br> 

                                <td><center>{{ $data_output->imageTitle }}</center></td>
                            </div>
                        </div>
                        @endif
                    @endif
                @endif



                 
    
                
                
                
    
    
    
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a8.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a8.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a9.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a9.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a10.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a10.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
    
    
    
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a11.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a11.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a12.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a12.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a13.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a13.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a14.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a14.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a15.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a15.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a16.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a16.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a17.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a17.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a18.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a18.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a19.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a19.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a20.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a20.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a22.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a22.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a23.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a23.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a24.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a24.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a25.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a25.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a26.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a26.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
                <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
                <!--       data-image="../up-images/a27.jpg"-->
                <!--       data-target="#image-gallery">-->
                <!--        <img class="img-thumbnail"-->
                <!--             src="../up-images/a27.jpg"-->
                <!--             alt="Another alt text">-->
                <!--    </a>-->
                <!--</div>-->
                
                
            </div>
            
                <div>
                    <h3></h3>
                </div>
                <div>                   
                    <p><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">
    
                      <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0043.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->
    
    <!--                  <div class="container">-->
    <!--  <div class="mySlides">-->
    <!--    <div class="numbertext">1 / 3</div>-->
    <!--    <img src="../images/gallery/5ea826f5be32a01.jpg" style="width:70%">-->
    <!--  </div>-->
    
    <!--  <div class="mySlides">-->
    <!--    <div class="numbertext">2 / 3</div>-->
    <!--    <img src="../images/gallery/5ea828e3e1c3c12.jpg" style="width:70%">-->
    <!--  </div>-->
    
    <!--  <div class="mySlides">-->
    <!--    <div class="numbertext">3 / 3</div>-->
    <!--    <img src="../images/gallery/5ea828a8a3876025.jpg" style="width:70%">-->
    <!--  </div>-->
        
    
    <!--  <a class="prev" onclick="plusSlides(-1)">❮</a>-->
    <!--  <a class="next" onclick="plusSlides(1)">❯</a>-->
    
     
    
    <!--  <div class="row">-->
    <!--    <div class="column">-->
    <!--      <img class="demo cursor" src="../images/gallery/5ea826f5be32a01.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">-->
    <!--    </div>-->
    <!--    <div class="column">-->
    <!--      <img class="demo cursor" src="../images/gallery/5ea828e3e1c3c12.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">-->
    <!--    </div>-->
    <!--    <div class="column">-->
    <!--      <img class="demo cursor" src="../images/gallery/5ea828a8a3876025.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">-->
    <!--    </div>-->
        
    <!--  </div>-->
    <!--</div>-->
    
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
    
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
                       <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0170.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->
    
                       
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
     <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0195.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->
    
     
    
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
      <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0331.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->
    
      
    
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--<p><span style="background-color: #ffffff; font-size: medium; color: #ff6600; font-family: georgia,palatino;">2. Shri H.H.J.B. Polytechnic&nbsp; (Shift ) &nbsp; &nbsp; &nbsp;&nbsp; Institute Code &nbsp; &nbsp; 1104</span><strong><span style="background-color: #ffffff; font-size: large; color: #ff6600; font-family: georgia,palatino;"> &nbsp;</span></strong></p>-->            </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    
                </div>
                <div class="table-responsive">                   
                    
    
                    
                    
    <p><strong>&nbsp;</strong></p>
    <p>&nbsp;</p>            </div>
            </div>        
    </div><!-- /.row --></div>
    <div class="col-md-1 hidden-sm">&nbsp;</div>
    <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
    <!-- <div
    style="margin-top: -40px;
    margin-bottom: 12px;
    text-align: center;
    border-radius: 0px 0px 10px 10px;
    background-color: #FE9B42;
    color: rgb(255, 255, 255);">
    <i>Last updated on : 01-08-2016 12:32 PM</i>
    </div> -->
        <!--Right col-->
        <div class="col-sm-12 right-col-fix">
        <div>
              <div class="list-group">
          <div class="list-group-item">Civil Engineering</div>
                          <a href="polytechnic-civil-engineering-profile.php" class="list-group-item active-rp-link">PROFILE</a>
                  <a href="polytechnic-civil-engineering-vision-mission.php" class="list-group-item active-rp-link">MISSION & VISSION</a>
                  <a href="polytechnic-civil-engineering-pos_and_cos.php" class="list-group-item ">CURRICULUM</a>
                          <a href="polytechnic-civil-engineering-laboratories.php" class="list-group-item ">LABORATORIES</a>
                          
                          <a href="polytechnic-civil-engineering-faculty.php" class="list-group-item ">FACULTY</a>
                          <a href="polytechnic-civil-engineering-syllabus.php" class="list-group-item ">SYLLABUS</a>
                          <a href="polytechnic-civil-engineering-timetable.php" class="list-group-item ">TIME TABLE</a>
                          <a href="polytechnic-civil-engineering-academin_activity.php" class="list-group-item ">MENTOR</a>
                          <a href="polytechnic-civil-engineering-gallery.php" class="list-group-item ">ACHIEVEMENTS AND AWARDS</a>
                          <a href="polytechnic-civil-engineering-events.php" class="list-group-item ">ACTIVITIES AND EVENTS</a>
                          <a href="polytechnic-civil-engineering-cesa.php" class="list-group-item ">STUDENTS ASSOCIATION</a>
                          <a href="polytechnic-civil-engineering-plan.php" class="list-group-item ">PLAN</a>
                <div class="list-group-item"></div>
         </div>
         
              </div>
        </div>
    </div></div>
    </div>
    </div>
    @endsection