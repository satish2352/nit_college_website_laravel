@extends('website.layout.master')
@section('content')
<style>
label{
    color: #454545;
  }
</style>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<center><h4 style="color:green"><strong>Contact Us</strong></h4></center>
	<div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.php" alt="" class="img-responsive"></div>
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="post" enctype="multipart/form-data" action="{{ route('add-contact-us') }}">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="row">
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="fld_contact_name" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Subject</label>
                            <input type="text" class="form-control" id="name" name="fld_contact_subject" placeholder="Enter Subject" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="fld_contact_email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Mobile Number</label>
                            <input type="text" class="form-control" id="name" name="fld_contact_number"  placeholder="Enter Mobile Number" required="required" />
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label for="subject">-->
                        <!--        Subject</label>-->
                        <!--    <select id="subject" name="subject" class="form-control" required="required">-->
                        <!--        <option value="na" selected="">Choose One:</option>-->
                        <!--        <option value="service">General Customer Service</option>-->
                        <!--        <option value="suggestions">Suggestions</option>-->
                        <!--        <option value="product">Product Support</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea  id="message" name="fld_contact_message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
                
         

            </div>
        </div>
          
            
        <div class="col-md-4">
            
            <form>
            <legend><span class="glyphicon glyphicon-globe">&nbsp;</span>Our Office</legend>
            <address>
                <strong style="color:green">{{ $contactusdata[0]['contact_us_name']}} </strong>
            </address>
             <address>
                <span class="glyphicon glyphicon-home" style="color: #454545;"></span>&nbsp;<strong><strong style="color:green">Address</strong> <strong style="color: #454545;">:</strong>&nbsp; <span style="color: #454545;">{{ $contactusdata[0]['contact_us_address'] }}</span></strong><br>
            </address>
            <address>
                <span class="glyphicon glyphicon-phone" style="color: #454545;"></span>&nbsp;<strong><strong style="color:green">Tel.</strong> <strong style="color: #454545;">:</strong>&nbsp; <span style="color: #454545;">{{ $contactusdata[0]['contact_us_telephone'] }}</span></strong><br>
            </address>
            <address>
                <span class="glyphicon glyphicon-phone" style="color: #454545;"></span>&nbsp;<strong><strong style="color:green">Mobile.</strong> <strong style="color: #454545;">:</strong>&nbsp; <span style="color: #454545;">{{ $contactusdata[0]['contact_us_mobile'] }}</span></strong><br>
            </address>
            <address>
            <span class="glyphicon glyphicon-globe" style="color: #454545;"></span>&nbsp;<strong style="color:green"> Website :</strong>&nbsp; <span style="color: #454545;">{{ $contactusdata[0]['contact_us_website'] }}</span><br>
            </address>
            <address>
                <span class="glyphicon glyphicon-envelope" style="color: #454545;"></span>&nbsp;<strong style="color:green">Email :</strong>&nbsp;<a href="mailto:#"><span style="color: #454545;">{{ $contactusdata[0]['contact_us_email'] }}</span></a>
                
            </address>
            </form>
        </div>
    </div>
</div>
<div class="container"> 
<div class="row" style="padding:0px">
<div class="col-md-6 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2 style="color:blue"></h2>
            </div>
            <div>                   
                <h2 align="justify" style="color:blue"><strong></strong></h2>
<p align="justify"><strong></strong>        </div>
        </div>        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h4 style="color:blue"></h4>
            </div>
            <div>                   
                <p></p>
<p></p>            </div>
        </div>        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <a href="https://maps.google.co.in/maps?hl=en&tab=wl"><img src="{{ env('FILE_VIEW') }}/up-images/map.jpg" /></a>            </div>
            <div>                   
                <p><a href="#">
</a></p>            </div>
        </div>        
</div><!-- /.row --></div>

<div class="col-md-6 hidden-sm right-col-fix" id="iwtRightPannel">
<!-- <div
style="margin-top: -40px;
margin-bottom: 12px;
text-align: center;
border-radius: 0px 0px 10px 10px;
background-color: #FE9B42;
color: rgb(255, 255, 255);">
<i>Last updated on : 21-02-2019 02:58 PM</i>
</div> -->
	<!--Right col-->
	<div class="col-sm-12 right-col-fix">
	<div>
		 <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.0638281501474!2d73.99574231490831!3d19.538873086824065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd08e91e9ae14b%3A0x6adebfd3ec4e5242!2sAkole+Polytechnic+College!5e0!3m2!1sen!2sin!4v1550744371658" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
	 	
	 	</div>
	</div>
</div></div>
</div>
</div>
    @endsection