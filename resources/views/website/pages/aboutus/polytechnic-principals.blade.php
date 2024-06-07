@extends('website.layout.master')
@section('content')
<style>
    
    .panel_content
    {
        background-color: #eceff7;
    }
    .clickable{
        cursor: pointer;
    }
    .panel
    {
        background-color: #fff !important;
        border: 1px solid transparent;
        border-radius: 0;
        /*-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
        /*box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
    }
    .product-type
    {
        margin-top: 45px;
    }
    .product-size
    {
        margin-top: 25px;
    }
    .product-use
    {
        margin-top: 25px;
        margin-bottom: 25px;
    }
    .panel-heading span {
        margin-top: -20px;
        font-size: 15px;
    }
    .panel-primary>.panel-heading {
        color: #000;
        background-color: #fff;
        border-bottom: 1px solid #eeeeee;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .panel-title
    {
        font-size: 22px;
        font-weight:400;
        color:#00ae97;
        /* background-color:#c70039; */
    }
    
    .panel_product_type
    {
        
        margin-top: 20px;
    }
    .panel_product_type
    {
        line-height: 26px;
    }
    .panel_product_type
    {
        font-size: 18px;
        font-weight: 400;
        color: black;
    }
    /* .president-msg{
        box-shadow: 0 0 15px #8D9AA8;
        border-radius: 10px;
    }
    .president-msg p::first-letter{
        color: #c70039;
        font-size: xx-large;
    } */
    
    /* Styles for the president-msg section */
.president-msg {
    margin-top: 5rem; /* Adjust as needed */
    margin-bottom: 5rem; /* Adjust as needed */
}

/* Styles for the president image and text */
.president-msg .col {
    text-align: center;
}

/* .president-msg img {
    height: 400px;
} */
.president-msg img {
    height: 250px;
}
.president-msg h5 {
    color: #00ae97;
    margin-top: 2rem;
    font-weight: bold;
}

.president-msg p {
    font-size: 1.25rem; /* Adjust as needed */
    text-align: justify;
}

/* Animation styles */
[data-aos="fade-left"] {
    /* Add your fade-left animation styles */
}

[data-aos="fade-right"] {
    /* Add your fade-right animation styles */
}

.row1{   
   margin-right: 0px;
  margin-left: 0px;
  width:1100px
}

/* @media (max-width: 991px) {
    .president-msg img {
        height: auto;
        max-width: 100%;
    }
}

@media (max-width: 767px) {
    .president-msg {
        margin-top: 3rem;
        margin-bottom: 3rem;
    }
    
    .president-msg h5 {
        font-size: 1.5rem;
    }
    
    .president-msg p {
        font-size: 1rem;
    }
} */

    
    </style>
 
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        {{-- <center><h2 style="color:green"><strong>Principal Desk </strong></h2></center> --}}
        <!-- <br> -->
        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">
        <!--<h2 style="color:blue"><strong>Mr. Suresh .A. Patil B.Sc (Hons), L.L.B. <br>President, Nasik Institute of Technology </strong></h2>-->
    </div>
    
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 card-shadow">
                    <center><h2 style="color:green"><strong>Principal Desk </strong></h2></center>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-primary product-type">
                            <div class="">
                              
                                <center><h3 class="panel-title"><b>Principal Message</b></h3></center>
            
                            </div>

                            <div class="col-12 col-lg-9 row mt-5 mb-5 president-msg">
                                <div class="row1">
                                  <div class="col-lg-5 col text-center m-5" data-aos="fade-left">
                                    <img src="{{ asset('public/assets/up-images/pricipal.png') }}" alt="" height="400">
                                           &nbsp;&nbsp;
                                          
                                         
                                          

                                           <h5 class="mt-2" style="color:#00ae97;"><strong>  Principal, <br>   Prof.Gopal Vadnere</strong></h5>  
                                  </div>
                                  <div class="col-lg-7 m-5">
                                    <h5 class="mt-2" style="color:#00ae97;"><strong> Dear Students,</strong></h5>     
                                    {{-- <p style="font-size: 15px"></p><br> --}}

                                   <p style="font-size: 15px;">I welcome you to NIT'S Late Annasaheb Patil Polytechnic, Nashik.<br> <br> Education ought to teach us not only how to make a living but also how to live, hence everyone in our NIT'S Campus is trying to bring to full blossoming the potential in every student. It is very important to learn to develop ourselves by imbibing certain qualities in our life. They are, a steady mind that can function without wavering in any situation, a healthy body filled with a passion for life, a flexible intellect that allows space for new thoughts and ideas and a clear aim which gives a proper direction. Always be joyful and do all your work with zeal and sincerity. If you love what you are doing, you will be successful in life.
                                    <br><br>At the Nashik Institute of technology, everyone is committed to provide good technical education along with imbibing social values. 
                                    <br>So be the part of NIT Family.<br>
                                </p>
                                    </p>
                                  </div>
                                </div>   
                               </div>










                            {{-- <div class="panel-body"> --}}
                            <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
            {{-- <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('public/assets/up-images/pricipal.png') }}" alt="" height="400">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p align="Justify"> Dear Students,<br>
                        I welcome you to NIT'S Late Annasaheb Patil Polytechnic, Nashik.<br>
                        Education ought to teach us not only how to make a living but also how to live, hence everyone in our NIT'S Campus is trying to bring to full blossoming the potential in every student. It is very important to learn to develop ourselves by imbibing certain qualities in our life. They are, a steady mind that can function without wavering in any situation, a healthy body filled with a passion for life, a flexible intellect that allows space for new thoughts and ideas and a clear aim which gives a proper direction. Always be joyful and do all your work with zeal and sincerity. If you love what you are doing, you will be successful in life.
                        <br>At the Nashik Institute of technology, everyone is committed to provide good technical education along with imbibing social values. 
                        <br>So be the part of NIT Family.<br>
                        &nbsp;&nbsp;<h5 style="color:blue"><strong>Prof. Manoj N.Burad,M.E.(VLSI)<br>Principal, Nasik Institute of Technology </strong></h5>
                        </p>
                </div>
            </div> --}}
                            
                   
                            
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff;" >
    <!-- padding-top:40px; padding-bottom:40px -->
    <div class="container"> 
    <div class="row" style="padding:0px">
        
        <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <h2></h2>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
    <!--           <p>Through my last 36 years of experience in various sectors like Industrial, Construction, Banking, Social etc. I strongly believe that there is still a long way to go to attain the increasing demand of technology Savvy minds by the industrial and for that the excellence in education and training is the need of hour. NIT- Nasik Institute of Technology is taking shape to bridge the gap between the future demand and supply technical human resource. Over the year it will grow in to a leading educational center in Maharashtra, widely recognized for its modern state of the art infrastructure, vibrant campus and academic excellence in the field of technical education. The courses designed are amongst the best in the industry and is believed to equip the with effective knowledge, Potentials, insights and expertise so that they can make a successful and bright career. Keeping in mind the requirement of building construction industry, we have designed Sandwich course in Civil Engineering to give in-depth knowledge of on site working.-->
    
    <!--We trust the fact that if youth is equipped with proper knowledge and skills, they can be the most powerful global asset .We are proud to say that we are creating Youth anium (Intellectual Youth Power).-->
    
    <!-- </p>-->
               
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <div class="pull-left"></div>
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
     
    <!--<div class="col-md-8 col-sm-12 text-justify" >-->
    <!--<div class="row outer-white">-->
           
          
    <!--       <div class="col-md-12 col-sm-12 text-justify" >-->
    <!--            <div class="col-md-4 col-sm-12 text-justify" >-->
    <!--              <p><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;"><div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="750" width="750"></div></p><br>-->
    <!--              <p  align="center"><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: blue;">-->
    
    <!--Mr. Suresh .A. Patil B.Sc (Hons), L.L.B. <br>President, Nasik Institute of Technology</p> -->
                  
    <!--            </div>-->
    <!--            <div class="col-md-8 col-sm-12 text-justify">-->
    <!--                 <p>Through my last 36 years of experience in various sectors like Industrial, Construction, Banking, Social etc. I strongly believe that there is still a long way to go to attain the increasing demand of technology Savvy minds by the industrial and for that the excellence in education and training is the need of hour. NIT- Nasik Institute of Technology is taking shape to bridge the gap between the future demand and supply technical human resource. Over the year it will grow in to a leading educational center in Maharashtra, widely recognized for its modern state of the art infrastructure, vibrant campus and academic excellence in the field of technical education. The courses designed are amongst the best in the industry and is believed to equip the with effective knowledge, Potentials, insights and expertise so that they can make a successful and bright career. Keeping in mind the requirement of building construction industry, we have designed Sandwich course in Civil Engineering to give in-depth knowledge of on site working.-->
    
    <!--We trust the fact that if youth is equipped with proper knowledge and skills, they can be the most powerful global asset .We are proud to say that we are creating Youth anium (Intellectual Youth Power).-->
    
    <!-- </p>-->
           
    <!--            </div>-->
    <!--       </div>-->
          
          
          
    <!--        <br>-->
            
       
                    
    <!--                <br><br>-->
                           
            
    <!--</div>-->
    
        
     <!-- /.row --></div>
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
        <!--<div class="col-sm-12 left-col-fix">-->
        <!--<div>-->
        <!--	 <div class="list-group">-->
        <!--  <div class="list-group-item">About Us</div>-->
                          <!--<a href="polytechnic-about-society-IOD.php" class="list-group-item active-rp-link">About Society</a>-->
                          
        <!--  	  	  		<a href="polytechnic-about-institute-IOD.php" class="list-group-item active-rp-link">About Institute</a>-->
                              
                              <!--<a href="polytechnic-about-orgstructure-IOD.php" class="list-group-item active-rp-link">Organization Structure</a>-->
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