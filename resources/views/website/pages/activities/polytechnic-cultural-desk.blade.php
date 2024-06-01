@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        <h2><strong></strong></h2>
        <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                
                 <?php 
                      $count=0; 
                      $query="select s.*,dp.* from tbl_activity s,activities dp where s.activity_id=dp.activity_id  and s.fld_delete='0' and dp.activities='Cultural Activities' order by s.fld_activity_id desc";
                      $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                      
                      while($fetch=mysqli_fetch_array($row)) {
    
                      extract($fetch);
                     ?> 
                     
                     <div>
                    <h2 style="color:blue"><?php echo $fetch['activities'];?></h2>
                </div>
                
                <div>
                    <p><?php echo $fetch['activity_description'];?></p>
                </div>
                     
                     
                      <?php } ?>
                      
                      
                <div>
                    <h2 style="color:blue">Cultural Activities</h2>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <p>
    As a part of extra curricular activities, this year we had organized various cultural activities in the institute. It has helped to the students to present their cultural potentials.</p>
                <p><b style="color:blue">Annual Gathering</b> :- We celebrated annual social gathering with great enthusiasm in the form of SARGAM-2011. Annual social gathering contained singing, Dancing, instrument playing, Drama presentation, Mimicry and above all fishponds. We also arranged various food stalls including tea stall, ice-cream stall, and fast-food stall run by students.</p>
                <p><b style="color:blue">Various days and festivals</b> :- In the prevalent year we celebrated various days and festivals. It includes Engineers day, Teachers day, Independence Day, Republic day, Youth day, Maharashatra Din, Gandhi Jayanti, Tree plantation and festivals like Ganesh Chathurti. It helped the students to know about our national history and our traditions and customs.</p>
                
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