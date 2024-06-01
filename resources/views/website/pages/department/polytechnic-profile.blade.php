@extends('website.layout.master')
@section('content')
<div class="container-fluid bg-pink" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        <h4 style="color:green"><strong>Welcome To Humanities & Science Engineering Department  </strong></h4>
        <!--<div class="pull-right"><img src="../up-images/applied-science-iconimgFile5686712b79a04.png" alt="" class="img-responsive"></div>-->
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                <!--<img src="../up-images/science%20profileimgFile579b0438715ef.jpg" alt="Applied Science Profile" class="img-responsive" style="margin:0 auto">-->
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <!--<div>-->
                <!--    <h2>Profile</h2>-->
                <!--</div><br>-->
    
                <div>
                    <h4 style="color:blue"></h4>
                </div>
                <p><b>Department Applied Science And Humanities</b></p>
                <p>Today's engineers and scientists need a well formulated background in applied sciences and humanities in order to make well reasoned decisions involving human values implicit in technical careers and to excel in communication skills in the globally competitive world .The department of Applied science offers a variety of stimulating, specialized and revised subjects that investigate among the natural sciences, technology and humanities. The focus of applied science department is to provide in-depth knowledge of Physics, Chemistry, Mathematics and Communication skills that will form a firm foundation to build engineering and management careers in various disciplines.</p>
                <p>Department provides an encouraging environment to develop the intellectual capacity, critical thinking, creativity & problem solving ability of the students. Department is taking more focused and multidimensional efforts to make foundation of the students as strong as possible.</p>
                <p>They are closely associated with first year students for counseling admission work, curricular co and extracurricular activity etc. The department is associated with well `equipped Physics, Chemistry, Electrical laboratories</p>
                <p></p>
                <p></p>
                <div>   



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
                                <p>{{ $data_output->department_description }}</p>
                            </div>

                            <img src="../NIT/department/<?php echo $data_output['photo'];?>" height="400px" width="700px" ><br> 
                        @endif
                    @endif
                @endif

                          
    
               <div>
                    <h2></h2>
                </div>
    
    <p></p>
             </div>
            </div>        
    </div><!-- /.row --></div>
    <div class="col-md-1 hidden-sm">&nbsp;</div>
    <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
    <!-- <div
    style="margin-top: -40px;
    margin-bottom: 12px;
    text-align: center;
    border-radius: 0px 0px 10px 10px;
    background-color: #FE9B42;
    color: rgb(255, 255, 255);">
    <i>Last updated on : 29-07-2016 12:52 PM</i>
    </div> -->
        <!--Right col-->
        <div class="col-sm-12 right-col-fix">
        <div>
             <div class="list-group">
          <div class="list-group-item">Humanities & Science</div>


                  
                    @if(isset($data_output) && isset($data_output['Department_id']))
                    <a href="{{ route('department-profile', ['id' => $data_output['Department_id']]) }}" class="list-group-item ">PROFILE</a>
                    <a href="{{ route('department-vision-mission', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">Vision Mission</a>
                    <a href="{{ route('department-curriculum', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">CURRICULUM</a>
                    <a href="{{ route('department-faculty', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">Faculty</a>
                    <a href="{{ route('department-syllabus', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">Syllabus</a>

                    <a href="{{ route('department-time-table', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">Time Table</a>
                    <a href="{{ route('department-mentor', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">MENTOR</a>
                    <a href="{{ route('department-achievements-awards', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                    <a href="{{ route('department-activities-events', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                    <a href="{{ route('department-students-association', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                    <a href="{{ route('department-plan', ['id' => $data_output['Department_id']]) }}" class="list-group-item active-rp-link">PLAN</a>

                    @else
    <p>Vision Mission information is not available.</p>
@endif

                    
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