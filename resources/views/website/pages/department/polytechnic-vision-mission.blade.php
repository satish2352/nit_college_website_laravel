@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        <h4 style="color:green"><strong>Humanities & Science Department Vision and Mission</strong></h4>
        <!--<div class="pull-right"><img src="../up-images/civil-iconimgFile56867160dd0c0.png" alt="" class="img-responsive"></div>-->
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                <!--<img src="../up-images/CONCRETE%20%26%20GEOTECHNICAL%20LAB%20-%20CopyimgFile56fccbe389201.jpg" alt="Civil Engineering Profile" class="img-responsive" style="margin:0 auto">-->
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <!--<div>-->
                <!--    <h2>Mission & Vision</h2>-->
                <!--</div>-->
                <div>                   
           
    <div>
    <!-- <h2>DEPARTMENT INFORMATION</h2> -->
    <h2><strong>VISION :</strong></h2>
                </div>
    
                
    
    <div>
       <h2><strong>MISSION :</strong></h2>
    </div>
    

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
            <div>
                <h2 style="color:blue">{{ $data_output->Department }}</h2>
            </div>
            <div>
                <p>{{ $data_output->department_mission }}</p>
            </div>

            
        @endif
    @endif
@endif

   
    
    <!--<p>  “To self-disciplined, physically fit, mentally robust, and morally strong engineers and technocrats with high degree of integrity and sense of purpose who are capable to meet challenges of ever advancing technology for the benefit of mankind and nature.”-->
    
    <!--</p>-->
    
    <!-- <p>&nbsp;&nbsp; <br />&nbsp;<br /><strong>Name of Programme</strong> <br />Diploma in Civil Engineering. <br /><strong>Sanctioned Intake - Regular</strong>&nbsp; 60&nbsp; &nbsp;<br /><strong>Duration:</strong> 3 Years <br /><strong>Course Code:</strong> CE</p> -->            </div>
    <!--        </div>        -->
    <!--</div><!-- /.row </div>
    <!--<div class="col-md-1 hidden-sm">&nbsp;</div>-->
    <!--<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">-->
        </div>
            </div>        
    </div><!-- /.row </div>-->
    <div class="col-md-1 hidden-sm">&nbsp;</div>
    <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
    <!-- <div
    style="margin-top: -40px;
    margin-bottom: 12px;
    text-align: center;
    border-radius: 0px 0px 10px 10px;
    background-color: #FE9B42;
    color: rgb(255, 255, 255);">
    <i>Last updated on : 21-02-2019 12:27 PM</i>
    </div> -->
        <!--Right col-->
        <div class="col-sm-12 right-col-fix">
        <div>
            <div class="list-group">
          <div class="list-group-item">Humanities & Science</div>
                    <a href="polytechnic-applied-science-profile.php" class="list-group-item ">PROFILE</a>
                    <a href="applied-vision-mission.php" class="list-group-item active-rp-link">MISSION & VISSION</a>
                    <a href="polytechnic-applied-science-posandcos.php" class="list-group-item active-rp-link">CURRICULUM</a>
                    <a href="polytechnic-applied-science-laboratories.php" class="list-group-item ">LABORATORIES</a>
                    <a href="polytechnic-applied-science-faculty.php" class="list-group-item ">FACULTY</a>
                    <a href="polytechnic-applied-science-syllabus.php" class="list-group-item ">SYLLABUS</a>
                    <a href="polytechnic-applied-science-timetable.php" class="list-group-item ">TIME TABLE</a>
                    <a href="polytechnic-applied-science-mentor.php" class="list-group-item ">MENTOR</a>
                    <a href="polytechnic-applied-science-academic_activity.php" class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                    <a href="polytechnic-applied-science-academic_event.php" class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                    <a href="polytechnic-applied-science-csa.php" class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                    <a href="polytechnic-applied-science-plan.php" class="list-group-item active-rp-link">PLAN</a>
                    
                    <!--<a href="polytechnic-applied-science-gallery.php" class="list-group-item active-rp-link">Gallery</a>-->
                  
                  <!--<a href="polytechnic-applied-science-gallery.php" class="list-group-item active-rp-link">Gallery</a>-->
                  <!--<a href="polytechnic-applied-science-csa.php" class="list-group-item active-rp-link">CSA</a>-->
              <div class="list-group-item"></div>
         </div>
              </div>
        </div>
    </div></div>
    </div>
    </div>
    @endsection