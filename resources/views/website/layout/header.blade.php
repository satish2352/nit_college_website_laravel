<!DOCTYPE php>
<?php //include 'config.php'; ?>
<php lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>LATE ANNASAHEB PATIL POLYTECHNIC</title>

<style>
    .heading1{font-size:20px;line-height:20px;font-family:'Lato', sans-serif;text-transform:uppercase;color:#1b2834;font-weight:900;}
</style>

<script>
    var viewMode = getCookie("view-mode");
if(viewMode == "desktop"){
    viewport.setAttribute('content', 'width=1024');
}else if (viewMode == "mobile"){
    viewport.setAttribute('content', 'width=device-width,initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86,user-scalable=no');
}
</script>

<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="icon" href="{{ asset('public/assets/visitors/layout_1/design/images/logo.gif.jpg')}}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('public/assets/visitors/includes/bootstrap-3.3.5/css/bootstrap.min.css')}}">
<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('public/assets/visitors/includes/bootstrap-3.3.5/js/bootstrap.min.js')}}"></script>
<link href="{{ asset('public/assets/visitors/hm/design/style.css')}}" rel="stylesheet">
<script src="cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
    offset: 150,
    duration: 1500,
});
</script> --}}
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
<script src="js/php5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->  
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
</head><body>
<script>
                        $(document).ready(function() {
 
                        // For the Second level Dropdown menu, highlight the parent	
                        $( ".dropdown-menu" )
                        .mouseenter(function() {
                                $(this).parent("li").addClass("active");
                        });
						$( ".dropdown-menu" )
                        .mouseleave(function() {
                                $(this).parent("li").removeClass("active");
                        });

                        });
						$(document).on("show",".accordion", function (e) {
							 //$(".accordion-heading i").toggleClass(" ");
							 $(e.target).prev(".accordion-heading").addClass("accordion-opened");
						});
						
						$(document).on("hide",".accordion", function (e) {
							$(this).find(".accordion-heading").not($(e.target)).removeClass("accordion-opened");
							//$(".accordion-heading i").toggleClass("fa-chevron-right fa-chevron-down");
						});
			</script><div class="container-fluid" id="iwtHeaderTopNav">
<div class="container">
<div class="col-sm-5"><a href="{{ route('/') }}">Institute Address : Cannol Road,Behind Hydro-division(MERI),Nashik</a></div>
<div class="col-sm-7 text-right">
    Email: <a href="mailto:info@nitnasik.com">info@nitnasik.com</a> |
    Contact Number:
    <a href="tel:9595952100">9595952100</a>&nbsp;
    <a href="tel:9822208687">9822208687</a>&nbsp;
    <a href="tel:9552551056">9552551056</a>&nbsp;
    <a href="tel:9552551064">9552551064</a>
</div>
</div>
</div><div class="container-fluid" id="iwtHeader">
<div class="container">

<div class="logo-left" style="margin-left:0px;margin-top:10px;"><img src="{{ asset('public/assets/Akole_Poly/logo.gif.jpg') }}" class="img-responsive" alt="Logo" >
<div style="margin-left:950px;margin-top:-100px;"><img src="{{ asset('public/assets/Akole_Poly/TWOWIN2p_400x400.jpg') }}" alt="Avatar" style="width:100px;border-radius:50%;"><p style="font-size:12px;color:red;"><b>Shri.&nbsp;Suresh&nbsp;Patil</b></p></div>
</div>
<div class="logo-center">
    <center><h3 Style="color:blue" class="heading1">NASHIK INSTITUTE OF TECHNOLOGY</h3></center>
<center ><h2 Style="color:blue" class="heading1">LATE ANNASAHEB PATIL POLYTECHNIC</h2></center>

<center><p>
<marquee><b style="color:blue"><a href="https://nitnasik.com/pages/enquiry.php" style="color:red">Click Here For Admission Enquiry 2020-21</a>&nbsp;&nbsp;&nbsp;<a href="https://nitnasik.com/specialchance.pdf" style="color:green">Click Here MSBTE Sepcial Chance For Summer Exam 2020</a></b>&nbsp;&nbsp;<b style="color:blue">Approved By</b> :
<b>Govt. of Maharashtra & All India Council of Technical Education (AICTE)</b>&nbsp;&nbsp;&nbsp;<b style="color:blue">Affiliated To</b> : <b>Maharashtra State Board Of Technical Education (MSBTE), Mumbai</b></marquee> <br>

</p>
</center>

</div>
<!--<div class="logo-right"><img src="visitors/layout_1/design/images/poojya-kakaji.png" alt="poojya-kakaji"></div>-->

</div><!--/container-->
</div><!--/container-fluid /iwtHeader-->
<div class="container-fluid" id="iwtHeaderNav">
<div class="container padding-LR-0">
<nav id="main-menu" class="navbar navbar-default ">
<div class="navbar-header" >
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div class="collapse navbar-collapse" style="height:20px;">
<ul class="nav navbar-nav" style="width:100%k; display:block; ">
  <li><a href="{{ route('/') }}" ><b>Home Page</b></a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>About Us</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li class=""><a href="{{ route('polytechnic-president') }}">President&#039;s Desk</a></li>
<li class=""><a href="{{ route('polytechnic-principals') }}">Principal&#039;s Desk</a></li>
<li class=""><a href="{{ route('mission-and-vision') }}">Mission &amp; Vision</a></li>
<li class=""><a href="{{ route('about-governingbody') }}">Governing Body</a></li>
<li class=""><a href="{{ route('about-futureplans') }}">Future Plans</a></li>


<!--<li class=""><a href="pages/polytechnic-co-ordinators-message.php">Co-ordinators Message</a></li>--->

<!--<li class=""><a href="pages/admin-staff.php">Our Admin Staff</a></li>-->
</ul>
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Activities</b><span class="caret"></span></a>
<ul class="dropdown-menu">
    {{-- @foreach ($menu as $menuItem)
    <li class="">
        <a href="{{ route('polytechnic-co-curricular', ['id' => $menuItem['id']]) }}">{{ $menuItem['activities'] }}</a>
    </li>
@endforeach --}}
    
@foreach ($menu as $menuItem)
    <li class="">
        <a href="{{ route('polytechnic-co-curricular', ['id' => $menuItem['id']]) }}">{{ $menuItem['activities'] }}</a>
    </li>
@endforeach

{{-- <li class=""><a href="{{ route('polytechnic-co-curricular') }}">Co-Curricular&nbsp;Activities</a></li>
<li class=""><a href="{{ route('polytechnic-cultural-desk') }}">Cultural&nbsp;Activities</a></li>
<li class=""><a href="{{ route('polytechnic-curricular') }}">Curricular&nbsp;Activities</a></li>
<li class=""><a href="{{ route('polytechnic-extra-curricular') }}">Extra Curricular&nbsp;Activities</a></li> --}}

</ul>
</li>
<!--<li class="dropdown">-->
<!--<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Admission</b><span class="caret"></span></a>-->
<!--<ul class="dropdown-menu">-->
<!--<li class=""><a href="pages/polytechnic-first-year-polytechnic-admission.php">First Year Polytechnic</a></li>-->
<!--<li class=""><a href="pages/polytechnic-second-year-polytechnic-admission.php">Direct Second Year Polytechnic</a></li>-->
<!--<li class=""><a href="pages/polytechnic-fee-structure.php">Fee Structure</a></li>-->
<!--<li class=""><a href="pages/polytechnic-admission-enquiry-form.php">Admission Enquiry Form</a></li>-->
<!--<li class=""><a href="pages/polytechnic-rules-regulation-admission.php">Rules &amp; Regulations</a></li>-->
<!--</ul>-->
<!--</li>-->
<!--<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">T &amp;P Cell<span class="caret"></span></a>
<ul class="dropdown-menu">
<li class=""><a href="#">About T &amp;P Cell</a></li>
<li class=""><a href="#">Our Recrutors</a></li>
<li class=""><a href="#">Industrial Visits and Training</a></li>
<li class=""><a href="#">Palcement Record</a></li>
<li class=""><a href="#">Gallery</a></li>
</ul>
</li>-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Department</b><span class="caret"></span></a>
<ul class="dropdown-menu">

    @foreach ($menuDepartment as $menuItemDepartment)

    <?php

    ?>
    <li class="">
        <a href="{{ route('department-profile', ['id' => $menuItemDepartment['id']]) }}">{{ $menuItemDepartment['Department'] }}</a>
    </li>
@endforeach

    {{-- <li><a href="pages/polytechnic-applied-science-profile.php">Humanities & Science</a></li> --}}

{{-- <li><a href="pages/polytechnic-applied-science-profile.php">Humanities & Science</a></li>
<li><a href="pages/polytechnic-electrical-profile.php">Electrical Engineering</a></li>
<li><a href="pages/polytechnic-automobile-profile.php">Automobile Engineering</a></li>
<li class="dropdown-submenu"><a href="pages/polytechnic-civil-engineering-profile.php">Civil Engineering</a></li>
<!--<li class="dropdown-submenu"><a href="pages/polytechnic-civil-engineering-sandwich.php">Civil Engineering Sandwich</a></li>-->
<li class="dropdown-submenu"><a href="pages/polytechnic-computer-engineering-profile.php">Computer Engineering</a><li>
<li class="dropdown-submenu"><a href="pages/polytechnic-e-tc-engineering-profile.php">E&amp;TC Engineering</a></li>
<li class="dropdown-submenu"><a href="pages/polytechnic-mechanical-engineering-profile.php">Mechanical Engineering</a></li> --}}
<!--<li class=""><a href="pages/polytechnic-mechanical-engineering-workshop.php">Workshop</a></li>-->
</ul>
</li>

<li><a class="" href="pages/polytechnic-mechanical-engineering-achievement.php"><b>Achievements</b></a></li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Facilities</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li class=""><a href="{{ route('polytechnic-campus') }}">College&nbsp;Campus</a></li>
<li class=""><a href="{{ route('polytechnic-hostel') }}">Hostel&nbsp;Mess</a></li>
<li class=""><a href="{{ route('polytechnic-library') }}">Library</a></li>
<li class=""><a href="{{ route('polytechnic-transportation') }}">Transportation</a></li>
<li class=""><a href="{{ route('polytechnic-other') }}">Other Facilities</a></li>

</ul>
</li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Academics</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<!--<li class=""><a href="#">Syllabus</a></li>-->
<li class=""><a href="{{ route('polytechnic-rules') }}">Admission Rules And Process</a></li>
<!--<li class=""><a href="#">Academic Calender</a></li>-->
<!--<li class=""><a href="pages/polytechnic-transportation.php">Transportation</a></li>-->
<!--<li class=""><a href="pages/polytechnic-other.php">Other Facilities</a></li>-->

</ul>
</li>


<!--<li><a class="" href="pages/polytechnic-mechanical-engineering-library.php"><b>Library</b></a></li>-->
<!--<li class="dropdown">-->
<!--<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>T &amp; P CELL</b><span class="caret"></span></a>-->
<!--<ul class="dropdown-menu">-->
<!--<li class=""><a href="pages/polytechnic-t&p-about.php">ABOUT</a></li>-->
<!--<li class=""><a href="pages/polytechnic-our-recrutors.php">OUR RECRUTORS</a></li>-->
<!--<li class=""><a href="pages/polytechnic-I&t.php">INDUSTRIAL VISIT &AMP;TRAINING  </a></li>-->
<!--<li class=""><a href="pages/polytechnic-placement-record.php">PLACEMENT RECORD</a></li>-->
<!--<li class=""><a href="pages/polytechnic-t&pcell-gallery.php">GALLERY</a></li>-->
<!--</ul>-->
<!--</li>-->
<li><a class="" href="{{ route('contact-us') }}"><b>Contact Us</b></a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Alumni</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="{{ route('aluminiregister') }}">Alumni Registration</a></li>aluminiregister

</ul>
</li>
<!--<li><a class="" href="pages/polytechnic-alumni.php"><b>Alumni</b></a></li>-->
<!--<li><a class="" href="#"><b>News</b></a></li>-->
<li><a class="" href="{{ route('polytechnic-gallery') }}"><b>Gallery</b></a></li>
<!--<li><a class="" href="#"><b>College Event</b></a></li>-->

<!--<li><a class="" href="pages/test.php"><b>Students</b></a></li>-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><b>Quick Links</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li class=""><a href="https://msbte.org.in/">msbte.org</a></li>
<li class=""><a href="https://www.aicte-india.org/">aicte-india.org</a></li>
<li class=""><a href="http://www.dtemaharashtra.gov.in/index.html">dtemaharashtra.gov.in</a></li>
<li class=""><a href="https://scholarships.gov.in/">scholarships.gov.in</a></li>
</ul>
</li>



</ul>
</div>
</nav><!--/nav-->
</div><!--/container-->
</div><!--/container-fluid /iwtHeaderNav--><!--======================= iwtBanner =======================-->
	<div class="container-fluid" id="iwtNewsArea">
	<div class="fl news-img"><img src="{{ asset('public/assets/visitors/hm/design/images/alarm-icon.png') }}"  border="0" height="40px"></div>

	<div class="fl news-text">
	
	 <?php 
                    //    $count=0; 
                    //   $query="select * from tbl_marquee where fld_delete='0' order by fld_marquee_id desc LIMIT 1";
                    //   $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                                    
                    //   while($fetch=mysqli_fetch_array($row)) {

                    //   extract($fetch);
                                
                ?>
	
	<marquee scrollamount="3" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 4, 0);"  height="20" scrolldelay="5" direction="left" behaviour="scroll" >
<p style="margin-top: -1%;"><?php //echo $fetch['marquee_text']; ?></a></i></u>
	</marquee>
	
	
	 <?php //} ?>
</div>

</div>