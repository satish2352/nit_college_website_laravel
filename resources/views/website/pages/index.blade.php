@extends('website.layout.master')
@section('content')
<div class="container-fluid padding-LR-0" id="iwtBanner">
    <div class="row">
        <div class="col-md-4">
          
          <div class=" right-col-fix" id="iwtRightPannel">  
            <div class="list-group">
	   	
	   	<div class="list-group-item"><b>NIT POLYTECHNIC, NASHIK</b></div>
	   	<a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्या</a>
	   	
        <a href="pages/polytechnic-about-governingbody-IOD.php" class="list-group-item active-rp-link">GOVERNING BODY</a>
        <a href="pages/polytechnic-about-mandatary-IOD.php" class="list-group-item ">MANDATARY DISCLOSURE</a>
	   	<a href="pages/polytechnic-about-aicte-IOD.php" class="list-group-item ">AICTE EOA</a>
	  	<a href="pages/polytechnic-about-affiliation-IOD.php" class="list-group-item ">MSBTE AFFILIATION</a>
	  	<a href="pages/polytechnic-about-certificates-IOD.php" class="list-group-item ">AFFILIATION CERTIFICATES</a>
	  	<a href="pages/polytechnic-about-servicerules-IOD.php" class="list-group-item ">SERVICE RULES</a>
	  	<a href="pages/polytechnic-about-t&pcell-IOD.php" class="list-group-item ">TRAINING AND PLACEMENT</a>
	  	<a href="pages/polytechnic-about-antiragging-IOD.php" class="list-group-item ">ANTIRAGGING COMMITTEE</a>
	  	<a href="pages/polytechnic-about-internalcomplaint-IOD.php" class="list-group-item ">INTERNAL COMPLAINT COMMITTEE</a>
	  	<a href="pages/polytechnic-about-redressal-IOD.php" class="list-group-item ">GRIEVANCE REDRESSAL COMMITTEE</a>
	  	<a href="pages/polytechnic-about-scst-IOD.php" class="list-group-item ">SC/ST CELL</a>
	  	<a href="pages/polytechnic-about-calendar-IOD.php" class="list-group-item ">ACADEMIC CALENDAR</a>
	  	<a href="pages/polytechnic-about-regulatingauthority-IOD.php" class="list-group-item ">FEES REGULATING AUTHORITY</a>
	  	<a href="pages/polytechnic-about-terms-IOD.php" class="list-group-item ">TERMS AND CONDITIONS</a>
	  	<a href="pages/polytechnic-about-downloads-IOD.php" class="list-group-item ">STUDENT DOWNLOADS</a>
	  	<a href="pages/polytechnic-about-downloadsstaff-IOD.php" class="list-group-item ">STAFF DOWNLOADS</a>
	  	<a href="pages/polytechnic-about-scholarship-IOD.php" class="list-group-item ">STUDENT SCHOLARSHIP</a>
	  	<a href="pages/polytechnic-about-events-IOD.php" class="list-group-item ">EVENTS</a>
	  	<a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" class="list-group-item ">SBI COLLECT</a>
	  	<a href="pages/polytechnic-about-media-IOD.php" class="list-group-item ">MEDIA NEWS</a>
	  	<a href="pages/polytechnic-about-faq-IOD.php" class="list-group-item ">FAQ</a>
	  	
	  	  <div class="list-group-item"></div>
	 </div>
	 </div>
        </div>

        <div class="col-md-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                @if(isset($data_output) && !empty($data_output))

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($activeSliders as $index => $slider)
                            <li data-target="#myCarousel" data-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
            
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($activeSliders as $index => $slider)
                            <div class="item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('public/assets/images/slider_img/' . $slider['fld_slider_image']) }}" width="100%" alt="{{ $slider['fld_slider_title'] }}">
                                <div class="carousel-caption">
                                    <h3>{{ $slider['fld_slider_title'] }}</h3>
                                    <p>{{ $slider['fld_slider_subtitle'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
            
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                @else
                    <!-- No data found message -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>No data found</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Other content -->
            
        </div>

<br>
	<div class="alert alert-danger alert-dismissible" role="alert" style="background-color:pink;margin-left:10px;">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa fa-warning"></i><center><h4><b><span style="border:4px solid #612625;color:White;background-color:#612625">Latest News</span></b></h4></center></strong><p style="font-family: Times New Roman; font-size: 12pt;"><a href="pages/final web quotation advertisement .pdf" ><strong style="color:black">Procurement under AICTE Grant in Aid- SPDP-Skill and Personality Development Programme Centre for
SC/ST Students 1-7107561391-2020-21.</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="background-color:blue;color:white;border:2px solid blue">Download</span></a></p>
</div>

<hr style="border: 1px solid black">

<div style="margin-left:10px;">
<h2> <span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: brown;"><center><span style="border:4px solid #612625;color:White;background-color:#612625">VISION</span></center></span></strong></span></h2>
<p align="justify"><span style="font-family: georgia,palatino;"><strong><span style="font-size: small; color: black;margin-left:5px;">Dedicated to promote the quality technical education through advanced teaching and learning process , high quality research and extension to serve the human society for sustainable development by developing community , the ability and passion to work wisely, creatively and effectively , for the betterment of Humankind</span></strong></span></p>
</div>	

<hr style="border: 1px solid black">


<div style="margin-left:1px;background-color:pink" >
<h2> <span style="font-family: georgia,palatino;"><strong><span style="font-size: large;margin-left:1px; color: brown"><center><span style="border:4px solid #612625;color:White;background-color:#612625">MISSION</span></center></span></strong></span></h2>
<p align="justify"><span style="font-family: georgia,palatino;"><strong><span style="font-size:small; color: black;margin-left:5px;">To give the quality technical education for empowerment of the common masses.</span></strong></span></p>
</div>	
<hr style="border: 1px solid black">


<div style="margin-left:1px;">
<h2><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: brown"><center><span style="border:4px solid #612625;color:White;background-color:#612625">About Nashik Institute of Technology (NIT)</span></center></span></strong></span></h2>
<p align="justify"><span style="font-family: georgia,palatino;"><strong><span style="font-size: small; color: black;margin-left:5px;">Nashik Institute of Technology (NIT), Nashik. A versatile personality of the Nashik District. Having a vast experience in various fields including Education, Construction, Industrial, Banking & Social Etc.</span></strong></span></p>

</div>
<hr style="border: 1px solid black">
</div>
</div>

<!--=============== iwtNewsArea ===============
<div class="container-fluid" id="iwtNewsArea" >
	<div class="fl news-img"><img src="visitors/hm/design/images/alarm-icon.png"  border="0"></div>

	<div class="fl news-text">
	<marquee scrollamount="3" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 4, 0);"  scrolldelay="5" direction="left" behaviour="scroll" >
<p>                  ----Faculty Of Polytechnic, Akole 422 601----
   
	</marquee>
</div>

</div> 
-->

<!--=============== iwtContentArea ===============-->
<div class="container-fluid" id="iwtContentArea" style=" background:#fff; padding-top:40px; padding-bottom:40px" >

<div class="container department-box-title">
<!--<h1>Polytechnic <strong>Departments</strong></h1>--->
<!--<span class="line"></span>-->
</div>


<style>
    #myCarouselIcon #myCarouselIcon > .carousel-control.left {
        background-image: none !important;
    }
    #myCarouselIcon #myCarouselIcon > .carousel-control.right {
        background-image: none !important;
    }
    #myCarouselIcon .department-box {
/*        margin-right: 10px !important;*/
        padding: 0px !important;
    }
    #myCarouselIcon .department-box a{
        outline: none !important;
        border: transparent;
    }
    .well {
        min-height: 20px;
        padding: 0px !important;
        margin-bottom: 20px;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 5px;
        -webkit-box-shadow: inset 0 1px 1px #FFF;
        box-shadow: inset 0 1px 1px #FFF;
    }
    .thumbnail {border: 1px solid transparent;}
    


.carousel-control.left {
  	left: 0;
        background: none !important;
}

.carousel-control.right {
  	right: 0;
  	background: none !important;
}
.controlsBlock .carousel-control:focus, .controlsBlock .carousel-control:hover {
    color: #000;
}

.controlsBlock.carousel-control .glyphicon-chevron-left, .controlsBlock.carousel-control .glyphicon-chevron-right, .controlsBlock .carousel-control .icon-next, .controlsBlock .carousel-control .icon-prev {
    width: 30px;
    height: 30px;
    margin-top: 0px;
    font-size: 30px;
}

.controlsBlock .carousel-indicators li {
  	width: 10px;
  	height: 10px;
  	margin: 0;
        background-color:#000;         
}
.controlsBlock .carousel-indicators .active {
  	width: 10px;
  	height: 10px;
  	margin: 0;
        background-color:#00AE97;         
}
#myCarouselIcon > .carousel-control {
  	position: absolute;
  	top: 25.5px;
  	bottom: 0;
  	left: 0;
  	background: transparent;
  	font-size: 5px;
  	background: none !important;
  	color: #000 !important;
  	text-align: center;
}

#myCarouselIcon > .controlsBlock {
   	position: relative;
   	bottom: 0;
   	left: 0;
   	top: 10px;
   	display: block;
   	width: 177px;
   	margin: 0 auto;
   	z-index: 1;
   	height: 24px;
   	text-align: center;
}

#myCarouselIcon > .controls {
   	position: relative;
   	display: block;
}

.controlsBlock .carousel-control .glyphicon-chevron-left,
  	.controlsBlock .carousel-control .glyphicon-chevron-right,
  	.controlsBlock .carousel-control .icon-prev,
  	.controlsBlock .carousel-control .icon-next {
    		
    		font-size: 15px;
  	}


@media screen and (min-width: 768px) {
	
  	.carousel-caption {
    		right: 20%;
    		left: 20%;
    		padding-bottom: 30px;
  	}

  	.carousel-indicators {
    		bottom: .0;
  	}
}
    
</style>               
<div class="container padding-LR-0" style="margin-bottom:35px;"> 
    <div class="row">
        <div class="col-lg-12">
            <div class="well"> 
                <div id="myCarouselIcon" class="carousel slide">

                        <!--ol class="carousel-indicators">
                        <li data-target="#myCarouselIcon" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouselIcon" data-slide-to="1"></li>
                        <--li data-target="#myCarouselIcon" data-slide-to="2"></li->
                    </ol-->
                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="item active">
                            <div class="container-fluid">
                              
                              <!--<div class="col-md-3 col-xs-3 department-box"><a href="pages/polytechnic-applied-science-profile.php" class="thumbnail"><span class="dept-icon" style="background-image:url(visitors/hm/design/images/department-icon-1.png); "></span>
                                <h3>Applied Science</h3></a></div>

                              <div class="col-md-3 col-xs-3 department-box"><a href="pages/polytechnic-civil-engineering-profile.php" class="thumbnail"><span class="dept-icon" style="background-image:url(visitors/hm/design/images/department-icon-2.png); "></span>
                                <h3>Civil Engineering</h3></a></div>
                              <div class="col-md-3 col-xs-3 department-box"><a href="pages/polytechnic-computer-engineering-profile.php" class="thumbnail"><span class="dept-icon" style="background-image:url(visitors/hm/design/images/department-icon-3.png); "></span>
                                <h3>Computer Engineering</h3></a></div>
                              <div class="col-md-3 col-xs-3 department-box"><a href="pages/polytechnic-e-tc-engineering-profile.php" class="thumbnail"><span class="dept-icon" style="background-image:url(visitors/hm/design/images/department-icon-4.png); "></span>
                                <h3>Electronics & Telecommunication</h3></a></div>
                            </div><!--/row-fluid-->
                    </div><!--/item-->

                    <div class="item">
                        <div class="container-fluid">
                            <!--<div class="col-md-3 col-xs-3 department-box"><a href="pages/polytechnic-mechanical-engineering-profile.php" class="thumbnail"><span class="dept-icon" style="background-image:url(visitors/hm/design/images/department-icon-5.png);"></span>
                                <h3>Mechanical Engineering</h3></a></div>
                            <div class="col-md-3 col-xs-3 department-box"><a href="pages/polytechnic-mechanical-engineering-workshop.php" class="thumbnail"><span class="dept-icon" style="background-image:url(visitors/hm/design/images/department-icon-6.png); "></span>
                                <h3>Workshop</h3></a></div>
                            
                        </div><!--/row-fluid-->
                    </div><!--/item-->

                </div><!--/carousel-inner-->
                <div class="controlsBlock">
                <div class="controls">
                <a class="left carousel-control" href="#myCarouselIcon" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                 <a class="right carousel-control" href="#myCarouselIcon" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                <!--<a class="left carousel-control" href="#slideshow" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                 <a class="right carousel-control" href="#slideshow" data-slide="next"><i class="fa fa-chevron-right"></i></a>-->
                <div class="carousel-indicators">
                <li data-target="#myCarouselIcon" data-slide-to="0" class="active"></li>
                <li data-target="#myCarouselIcon" data-slide-to="1"></li>
                <!--li data-target="#myCarouselIcon" data-slide-to="2"></li-->
                </div>
                </div>
                </div>
                <!-- Left and right controls ->
                    <a class="left carousel-control" href="#myCarouselIcon" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarouselIcon" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                <!-- Left and right controls End -->
                
                <!--a class="left carousel-control" href="#myCarouselIcon" data-slide="prev">?</a>
                <a class="right carousel-control" href="#myCarouselIcon" data-slide="next">?</a-->
                </div><!--/myCarousel-->

            </div><!--/well-->   
        </div>
    </div>
</div>
<br>
<!--<marquee><a href="pages/ADVERTISEMENT .pdf" ><strong>AICTE Grant in Aid- SPDP-Skill and Personality Development Programme</strong></a></marquee>-->
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 15px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
<div class="row">
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
	<!--Right col-->
	<div class="col-sm-12 right-col-fix">
	<div>
		 
	  	</div>
	</div>
</div>


<div class="col-md-9 hidden-sm right-col-fix" id="iwtRightPannel" >
	
	
	</div>
	
	
	</div>
	

<script>
$(document).ready(function() {
    $('#myCarouselIcon').carousel({
	    interval: 5000
	})
});
</script>

<br>
@endsection
