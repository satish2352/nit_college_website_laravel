@extends('website.layout.master')
@section('content')
<style>
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.containerid {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/*
inspired from https://codepen.io/Rowno/pen/Afykb 
*/
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

/*
WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
now override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}

/* just for demo purpose */
    html,
    body,
    .carousel,
    .carousel-inner,
    .carousel-inner .item {
      height: 90%;
      
    }

    .item:nth-child(1) {
      background: blue;
    }

    .item:nth-child(2) {
      background: red;
    }

    .item:nth-child(3) {
      background: orange;
    }
    
        .margin-top-50 {
	margin-top: 50px;}
    /*Filter START*/
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
/*Filter END*/

.table-widthB{
    width: 48%;
    }
    
.table-widthA{
    width: 49.8%;
    }
    
.bg{
    background-color: white;
    }  
      
.tablescroll {
    overflow-y: auto;
	overflow-x: hidden;
	height: 189px;
	margin-right: 1px;
}
.marginTop30{
    margin-top:30px;
}

.radio,
.checkbox {
  margin-top: 0px;
  margin-bottom: 0px;
  }
  
  .checkbox,.radio{
  margin-top:0px;
  margin-bottom:0px
  }
  
.radio-margin{
    margin-left: -13px;
	margin-top: 7px;
}
.radio-margin{
    margin-left: -13px;
    margin-top: 7px;
}
.EU_DataTable td, th {
  padding: 6px;
  border: 1px solid #ccc;
  text-align: left;
  height: 50px;
}
th {
  background: #e5e5e5;
  color: #454545;
  font-weight: bold;
  height: 40px;
}
/*Radio and Checkbox START*/
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
/*Radio and Checkbox END*/
</style>
<script>
    $('#carouselHacked').carousel();
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<center><h2 style="color:green"><strong>Alumni Register Here..</strong></h2></center>
	<div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.php" alt="" class="img-responsive"></div>
</div>

</div>
</div>


<div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container"> 

<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
              <img src="{{ Config::get('DocumentConstant.ALUMINI_VIEW') }}a3.jpg" alt="" class="img-responsive">
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                   <img src="{{ Config::get('DocumentConstant.ALUMINI_VIEW') }}a5.jpg" alt="" class="img-responsive">
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                   <img src="{{ Config::get('DocumentConstant.ALUMINI_VIEW') }}a3.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<br>



<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <!--<h2 style="color:blue"></h2>-->
                <div class="containerid">
  <form method="post" enctype="multipart/form-data" action="{{ route('add-aluminiregister') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    <label for="fname">Name Of Student</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">
    
    <label for="lname">Email ID</label>
    <input type="text" id="lname" name="email" placeholder="Your Email Address..">
    
     <label for="lname">Enrollment Number</label>
    <input type="text" id="lname" name="enroll" placeholder="Your Enrollment Number..">
    
     <div class="creatediv1 marginTop30">
    			
				<div class="row margin-top-50">
					<div class="col-md-12">
						<div class="panel panel-primary filterable">
							<div class="panel-heading">
								<!--<h3 class="panel-title">Cost Centers<span style="color: white; font-weight: bold;"> *</span></h3>-->
								<div class="pull-right">
									<!--<button type="button" class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>-->
								</div>
							</div>
							<table class="span12">
								<table>
									<tr class="filters">
									<th style="width: 4.1%; width:50px;">
										<div class="checkbox radio-margin">
											<label>
												<!--<input type="checkbox" value="">-->
												<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
											</label>
										</div>
									</th>
									<th style="width: 48%">
									    <center><label>Semister</label></center>
										<!--<input type="text" class="form-control" placeholder="Cost Center Name">-->
									</th>
									<th style="width: 48%">
									     <center><label>Result</label></center>
										<!--<input type="text" class="form-control" placeholder="Cost Center ID">-->
									</th>
									</tr>
								</table>
								<div class="bg tablescroll">
									<table class="table table-bordered table-striped">
										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</th>
											<td style="width: 49.8%">First Semister</th>
											<td style="width: 48%"><input type="text" class="form-control" name="firstsem" placeholder="Result"></th>
										</tr>
										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Second Semister</td>
											<td style="width: 48%"><input type="text" class="form-control" name="secondsem" placeholder="Result"></td>
										</tr>
										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Third Semister</td>
											<td style="width: 48%"><input type="text" class="form-control" name="thirdsem" placeholder="Result"></td>
										</tr>
										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Fourth Semister</td>
											<td style="width: 48%"><input type="text" class="form-control" name="fourthsem" placeholder="Result"></td>
										</tr>
										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Fifth Semister</td>
											<td style="width: 48%"><input type="text" class="form-control" name="fifthsem" placeholder="Result"></td>
										</tr>
										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Sixth Semister</td>
											<td style="width: 48%"><input type="text" class="form-control" name="sixthsem" placeholder="Result"></td>
										</tr>
									
									</table>
								</div>
							</table>
						</div>
					</div>
				</div>
    
</div>
    
    <label for="fname">Current Working Company</label>
    <input type="text" id="fname" name="company" placeholder="Your Current Working Company..">
    
    <label for="fname">Current Location</label>
    <input type="text" id="fname" name="location" placeholder="Your Current Location..">
    
      <label for="fname">Contact Number</label>
    <input type="text" id="fname" name="mobile" placeholder="Your Contact Number..">
    
     <label for="fname">Passout Year</label>
    <input type="text" id="fname" name="passout_year" placeholder="Your Passout Year..">
    
     <label for="fname">Department Name</label>
    <input type="text" id="fname" name="department" placeholder="Your Department Name..">
    
     <label for="fname">Message</label>
    <input type="text" id="fname" name="message" placeholder="Your Message..">
   
    
    
  
    
    <!--<label for="fname">Email ID</label>-->
    <!--<input type="text" id="fname" name="email" placeholder="Your Email Address..">-->
    
   

    
    
    <!--<label for="lname">Gender</label>-->
    <!--<input type="text" id="lname" name="lastname" placeholder="Your last name..">-->
    
    <!-- <label for="gender">Gender</label>-->
    <!--<select id="gender" name="gender">-->
    <!--  <option value="Male">Male</option>-->
    <!--  <option value="Female">Female</option>-->
      
    </select>
    
    <!--<label for="lname">Category</label>-->
    <!--<input type="text" id="lname" name="category" placeholder="Your Category..">-->

    <!--<label for="country">Country</label>-->
    <!--<select id="country" name="country">-->
    <!--  <option value="australia">Australia</option>-->
    <!--  <option value="canada">Canada</option>-->
    <!--  <option value="usa">USA</option>-->
    <!--</select>-->

    <!--<label for="subject">Subject</label>-->
    <!--<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>-->

   <center> <input type="submit" name="submit" class="btn btn-success" value="submit"></center>
  </form>
  
  
  
  <?php


//error_reporting(0);

    if(isset($_POST['submit']))
    {
        extract($_POST);

        $query="insert into tbl_alumini(name,email,mobile,passout_year,department,message,enroll,company,location,firstsem,secondsem,thirdsem,fourthsem,fifthsem,sixthsem) VALUES('$name','$email','$mobile','$passout_year','$department','$message','$enroll','$company','$location','$firstsem','$secondsem','$thirdsem','$fourthsem','$fifthsem','$sixthsem'); ";
     
         $add2=mysqli_query($connect,$query); 

                

        if($add2)
       {
         echo '<script type="text/javascript">';
         echo " alert('Alumni Register Successfully.');";
         echo 'window.location.href = "../pages/index.php";';
         echo '</script>';
        }
        else
       {
         echo '<script type="text/javascript">';
         echo " alert('Alumni Not Register.');";
         echo 'window.location.href = "../pages/index.php";';
         echo '<script>';
       }
    }
?>               

</div>

            </div>
            <div>                   
                            </div>
        </div>        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">

            
        </div>        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2></h2>
            </div>
            <div>                   
                            </div>
        </div>        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">
            <P><br>
</p>
        </div>        
</div><!-- /.row --></div>
<div class="col-md-1 hidden-sm">&nbsp;</div>
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
<!-- <div
style="margin-top: -40px;
margin-bottom: 12px;
text-align: center;
border-radius: 0px 0px 10px 10px;
background-color: #c70039;
color: rgb(255, 255, 255);">
<i>Last updated on : 01-08-2016 12:32 PM</i>
</div> -->
	<!--Right col-->
	<!--<div class="col-sm-12 right-col-fix">-->
	<!--<div>-->
	<!--	 <div class="list-group">-->
	<!--  <div class="list-group-item">About Us</div>-->
	<!--  	  	  	<a href="polytechnic-about-society-IOD.php" class="list-group-item active-rp-link">About Society</a>-->
	  	  	  	
	<!--  	  	  		<a href="polytechnic-about-institute-IOD.php" class="list-group-item active-rp-link">About Institute</a>-->
	  	  	  		
	<!--  	  	  		<a href="polytechnic-about-orgstructure-IOD.php" class="list-group-item active-rp-link">Organization Structure</a>-->
	<!--  	  	  		<a href="polytechnic-about-governingbody-IOD.php" class="list-group-item active-rp-link">Governing Body</a>-->
	<!--  	  	  		<a href="polytechnic-about-lmc-IOD.php" class="list-group-item active-rp-link">Local Management Committe </a>-->
	  	  	  			
	<!--  	  	  				<a href="polytechnic-about-chairmansecretory-IOD.php" class="list-group-item active-rp-link">Chairman And Scretory Desk </a>-->
	  	  	  			
	<!--  	  	  	<a href="polytechnic-mission-and-vision.php" class="list-group-item ">Mission &amp; Vision</a>-->
	  	  	  	
	<!--  	  	  	<a href="polytechnic-principals-desknew-IOD.php" class="list-group-item ">Principal&#039;s Desk</a>-->
	<!--  	  	  	<a href="admin-staff.php" class="list-group-item ">Our Admin Staff</a>-->
	  	  	  	
	<!--  	  <div class="list-group-item"></div>-->
	<!-- </div>-->
	<!--  	</div>-->
	<!--</div>-->
</div></div>
</div>
</div>
    @endsection