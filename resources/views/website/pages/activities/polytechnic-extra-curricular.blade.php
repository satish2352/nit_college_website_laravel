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
                      $query="select s.*,dp.* from tbl_activity s,activities dp where s.activity_id=dp.activity_id  and s.fld_delete='0' and dp.activities='Extra Curricular Activities' order by s.fld_activity_id desc";
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
                    <h4 style="color:blue"><strong>Extra-Curricular Activities</strong></h4>
                    <p>
    As every year the extra curricular activities are organized, this year also we had organized many activities such as sports, education tour. </p>
                    <h4 style="color:blue"><strong>Sports and cultural activity :</strong></h4>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <p>
    
        1.Festival of knowledge and culture that falls generally in February-March each year.<br>
        2.It links together different knowledge networks and reinforces the significance of Innovation<br>
        3.It includes agencies of panel discussions, lectures, workshops, exhibitions and exciting
        competitive events.<br>
        4.It serves as a meeting place for creative minds to discuss their ideas and allow for testing of
        their ideas in the face of intense competition, rigorous evaluations and a touch of the carnival.<br>
        5.Resources for other indoor games like carroms, chess are also available.<br>
        6.The college teams of Football, Basketball, Volleyball and Cricket participate in various local and national level tournaments.<br>
        7.The sports committee also invites colleges and clubs across Maharashtra state.<br>
        8.The cultural events can be broadly classified into competitions, festivals, workshops and Celebrity shows.<br>
        9.The committee aims to bring out talent in the student community in all the possible forms
        Music, dance, theatre, literary skills, sketching or other fine art styles are forms of students talent.
    
    </p>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <h4 style="color:blue"><strong>Transport facility</strong></h4>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
               <p>
    
        1.The College has adequate buses which are made available to the students and the faculty members for commuting from various points in the Nashik city .<br>
        2.Institute provides transport facility to our students through a fleet of buses, covering almost all major landmarks in Nashik .<br>
        3.No profit No loss basis.<br>
        4.Bus root covers CIDCO, Satpur, Nashik Road, Mumbai Naka, Indiranagar, Vijay Nagar, Patahrdi Phata almost all major routes in Nashik city.
    
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