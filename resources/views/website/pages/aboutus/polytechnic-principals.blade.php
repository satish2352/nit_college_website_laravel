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
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 0;
        /*-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
        /*box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
    }
    .product-type
    {
        margin-top: 5px;
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

    
    /* Styling for panel content */
.panel_content {
    /* margin: 20px; */
}

/* Centering the panel title */
.panel-title {
    margin-top: 0;
}

/* Styling for principal's message */
.panel-primary {
    border-color: #337ab7;
}

.panel-heading {
    background-color: #337ab7;
    color: white;
}

.panel-body {
    padding: 20px;
}

/* Styling for principal's name */
.panel-body h5 {
    margin-top: 20px;
}

/* Media query for responsiveness */
@media only screen and (max-width: 768px) {
    .panel-body {
        font-size: 14px;
    }
}

    </style>
    <script>
           $(document).on('click', '.panel-heading span.clickable', function(e){
                var $this = $(this);
                if(!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass('glyphicon glyphicon-plus-sign');
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass('glyphicon glyphicon-minus-sign');
                }
            })
    </script>
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        <center><h2 style="color:green"><strong>Principal Desk </strong></h2></center>
        <!-- <br> -->
        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">
        <!--<h2 style="color:blue"><strong>Mr. Suresh .A. Patil B.Sc (Hons), L.L.B. <br>President, Nasik Institute of Technology </strong></h2>-->
    </div>
    
    <div class="panel_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-primary product-type">
                            <div class="panel-heading">
                                <center><h3 class="panel-title" style="color:blue"><b>Principal Message</b></h3></center>
                                <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                            </div>
                            <div class="panel-body">
                            <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
            
                            <p align="Justify"> Dear Students,<br>
                            I welcome you to NIT'S Late Annasaheb Patil Polytechnic, Nashik.<br>
                            Education ought to teach us not only how to make a living but also how to live, hence everyone in our NIT'S Campus is trying to bring to full blossoming the potential in every student. It is very important to learn to develop ourselves by imbibing certain qualities in our life. They are, a steady mind that can function without wavering in any situation, a healthy body filled with a passion for life, a flexible intellect that allows space for new thoughts and ideas and a clear aim which gives a proper direction. Always be joyful and do all your work with zeal and sincerity. If you love what you are doing, you will be successful in life.
                            <br>At the Nashik Institute of technology, everyone is committed to provide good technical education along with imbibing social values. 
                            <br>So be the part of NIT Family.<br>
                            &nbsp;&nbsp;<h5 style="color:blue"><strong>Prof. Manoj N.Burad,M.E.(VLSI)<br>Principal, Nasik Institute of Technology </strong></h5>
                            </p>
                   
                            
                            </div>
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