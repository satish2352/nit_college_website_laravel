@extends('website.layout.master')
@section('content')
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<h4 style="color:green"><strong>Civil Department Students Association</strong></h2>
	<div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div>
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container"> 
<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2>Association of Civil Engineering Students - CESA :  </h2>
            </div>
            <div>                   
                            </div>
        </div>        
</div><!-- /.row --><div class="panel-group" id="accordion">
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        <h4 class="">
        Student Association is created by the students and for the students. For association various committees are formed and various activities are conducted such as competitions, seminars, workshops etc. 
        </h4>
        </div>
        
        <div id="collapse4" class="panel-collapse collapse in">
        <div class="panel-body">
			<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h3></h3>
            </div>
            <div>                   
                <p></p>
<ul class="arrow-blue">
<li></li>
<li></li>
<li></li>
<li></li>
</ul>            </div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <!--<img src="../up-images/engineering-mechanics-labimgFile56d40781da7f6.jpg" alt="Engineering Mechanics Laboratory" class="img-responsive" style="margin:0 auto">-->
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2></h2>
            </div>
            <div>                   
               
               <table class="table table-striped table-bordered"  id="customers">
						<thead>
							<tr>
								
								<th><center>Post Name</center></th>
								<th><center>Name</center></th>
								
								
							</tr>
						</thead>
						<tbody>
                        @if (isset($error))
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                                @else
                                @if (!$data_output)
                                    <div class="alert alert-info">
                                        Data not found
                                    </div>
                                @else
                                    @if ($data_output->is_active == 0)
                                        <div class="alert alert-info">
                                            Data not found
                                        </div>
                                    @else
                                      <tr>
                                        <td><center>{{ $data_output->Designation }}</center></td>
                                    <td><center>{{ $data_output->fld_bm_name }}</center></td>
                                   

                                          
                                      </tr> 
                            
                                        
                                    @endif
                                @endif
                            @endif
						</tbody>
						</table>



          </div>
        </div>        
</div><!-- /.row -->				            													
  <!--<div class="row outer-white">
        <div class="col-sm-12">
            
            
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        
        
        <div id="collapse5">
        <div class="">
			        
                    <div class="">
        <div class="">
            
            <div>                   
                <p></p>
     </div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <!--<img src="../up-images/mechanics-of-structures-labimgFile56d4079d1461d.jpg" alt="Mechanics of Structures Laboratory" class="img-responsive" style="margin:0 auto">------->
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2></h2>
            </div>
            <div>                   
                        </div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h3></h3>
            </div>
            <div class="table-responsive">                   
                <p><strong> </strong></p>            </div>
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        
        </div>
        
        <div id="" class=" ">
        <div class="">
			       <div class="">
        <div class="">
            
            <div>                   
                
</div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <!--<div class="col-sm-12">
            <img src="../up-images/geo-tech-labimgFile56d407cee9833.jpg" alt="Geo Tech. & Concrete Technology Engineering La" class="img-responsive" style="margin:0 auto">
        </div>--->        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            
            <div>                   
                 </div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            
            
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
</div>
</div>
<div class="col-md-1 hidden-sm">&nbsp;</div>
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
<!-- <div
style="margin-top: -40px;
margin-bottom: 12px;
text-align: center;
border-radius: 0px 0px 10px 10px;
background-color: #FE9B42;
color: rgb(255, 255, 255);">
<i>Last updated on : 21-02-2019 11:42 PM</i>
</div> -->
	<!--Right col-->
	<div class="col-sm-12 right-col-fix">
	<div>
	    
 <div class="list-group">
	  <div class="list-group-item">Civil Engineering</div>
	  	  	  	<a href="polytechnic-civil-engineering-profile.php" class="list-group-item active-rp-link">PROFILE</a>
              <a href="polytechnic-civil-engineering-vision-mission.php" class="list-group-item active-rp-link">MISSION & VISSION</a>
              <a href="polytechnic-civil-engineering-pos_and_cos.php" class="list-group-item ">CURRICULUM</a>
	  	  	  	<a href="polytechnic-civil-engineering-laboratories.php" class="list-group-item ">LABORATORIES</a>
	  	  	  	
	  	  	  	<a href="polytechnic-civil-engineering-faculty.php" class="list-group-item ">FACULTY</a>
	  	  	  	<a href="polytechnic-civil-engineering-syllabus.php" class="list-group-item ">SYLLABUS</a>
	  	  	  	<a href="polytechnic-civil-engineering-timetable.php" class="list-group-item ">TIME TABLE</a>
	  	  	  	<a href="polytechnic-civil-engineering-academin_activity.php" class="list-group-item ">MENTOR</a>
	  	  	  	<a href="polytechnic-civil-engineering-gallery.php" class="list-group-item ">ACHIEVEMENTS AND AWARDS</a>
	  	  	  	<a href="polytechnic-civil-engineering-events.php" class="list-group-item ">ACTIVITIES AND EVENTS</a>
	  	  	  	<a href="polytechnic-civil-engineering-cesa.php" class="list-group-item ">STUDENTS ASSOCIATION</a>
	  	  	  	<a href="polytechnic-civil-engineering-plan.php" class="list-group-item ">PLAN</a>
	  	  <div class="list-group-item"></div>
	 </div>
	 
	  	</div>
	</div>
</div></div>
</div>
</div>
    @endsection