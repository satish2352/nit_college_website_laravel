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
        margin-top: 45px;
        padding: 20px;
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
        color: #00ae97; !important;
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
        <h2><strong></strong></h2>
        <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
    </div>
    
    <div class="panel_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-primary product-type">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="color:#00ae97"><b>Vision</b></h3>
                                {{-- <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span> --}}
                            </div>
                            <div class="panel-body">
                            <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
            
                            <p align="Justify">Dedicated to promote the quality technical education through advanced teaching and learning process , high quality research and extension to serve the human society for sustainable development by developing community , the ability and passion to work wisely, creatively and effectively , for the betterment of Humankind
     </p>
                   
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    
    
    <div class="panel_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-primary product-type">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="color:#00ae97"><b>Mission</b></h3>
                                {{-- <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span> --}}
                            </div>
                            <div class="panel-body">
                            <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
            
                            <p align="Justify">To give the quality technical education for empowerment of the common masses.</p>
                   
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    </div>
    </div>
    
    <div class="container-fluid" style=" background:#fff;" >
    <!-- padding-top:40px; padding-bottom:40px -->
    <div class="container"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <h2 style="color:blue"></h2>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <p></p>
                
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <h2 style="color:blue"></h2>
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