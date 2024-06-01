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
                      $query="select s.*,dp.* from tbl_activity s,activities dp where s.activity_id=dp.activity_id  and s.fld_delete='0' and dp.activities='Curricular Activities' order by s.fld_activity_id desc";
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
                    <h2 style="color:blue">Curricular Activities</h2>
                    <h4 style="color:blue">Industrial visits :</h4>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <p>Every year Our College organizes various industrial visits for the students to observe practical experience in industry. In this year also we organized various industry visits.</p>
                <p><b style="color:blue">Bhikusa Paper Mill </b> :- All the branches viz, Mechanical, Electrical, Civil, Civil S/W were taken to Bhikusa Paper Mill for getting observational experience of various stages of production of papers. This industry visit helped to the students to developed observation skill, technical knowledge and they could understand the milling procedure. </p>
                <p><b style="color:blue">BSNL</b> :- This visit was organized for Electrical and computer branches. Students got the knowledge of operating system and functioning of various equipments. </p>
                <p><b style="color:blue">Petrol Pump</b> :- This visit was organized for Electrical and computer branches. Students got the knowledge of operating system and functioning of various equipments. </p>
                <p><b style="color:blue">Atlas Copco</b> :- All the students of Mechanical branch were taken to visit Atlas cofco for their educational benefits. In this visit they could get the direct experience of the industry working. In that they were introduced and given information of manufacturing process, manpower utilization, Order confirmation, Heat treatment, quality control, on line inspection and dispatch. They were also given the information of different departments in the industry. </p>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <h2 style="color:blue">EXPERT LECTURES</h2>
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <p>In the every year our institute organizes expert lectures on various subjects for the students educational benefit. In this year also we have organized different lectures.</p>
                <p><b style="color:blue">CAD-CAM </b> :- For all the students of the college, Expert lecture was arranged on CAD-CAM. In this lecture the students were introduced to cad cam technology and the new techniques of cad cam in civil field. They were also introduced to new inventions in construction field.  </p>
                <p><b style="color:blue">3D Animation</b> :- The session on 3D animation was held for all the branches of the institute. The students were informed about the new techniques in the field, the uses of 3D animation in the television sector, advisement and cartoons.</p>
                <p><b style="color:blue">Lecture on spoken English</b> :- The seminar was arranged by the institute for the benefit. The students were introduced with the practical interactive skill, the need of English in day to day life, Demonstration of sentence structure, pronounciation, and practical use of English. (Zodiac interactive course).</p>
                
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