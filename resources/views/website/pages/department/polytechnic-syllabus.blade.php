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
        <h4 style="color:green"><strong>Download Syllabus Humanities And Science Engineering Here....</strong></h4>
        <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container">
        
        
    
    <!--<a href="poly\on home page\downloads\3rdSemCivilGroupCurriculumCECRCS_210520181827.pdf" >1.Third Semister Civil Group Curriculum.<span></span></a><br>-->
    
    <!--<a href="poly\on home page\downloads\I-Scheme Second Semester-Civil Group[CE,CR,CS].pdf" >2.I-Scheme Second Semester-Civil Group[CE,CR,CS].<span></span></a>-->
    
     <!--<span>First Semister</span><a href="#" class="btn btn-info btn-md">Download</a>-->
    
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                
    <div class="span7">   
    <div class="widget stacked widget-table action-table">
                        
                    <div class="widget-header">
                        <i class="icon-th-list"></i>
                        <!--<h3>Table</h3>-->
                    </div> <!-- /widget-header -->
                    
                    <div class="widget-content">
                        
                        <table class="table table-striped table-bordered"  id="customers">
                            <thead>
                                <tr>
                                    
                                    <th><center>Semister</center></th>
                                    <th class="td-actions"></th>
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
                                       
                                            <td>{{ $data_output->semister }}</td>
                                           <td>  <a href="../images/syllabus/<?php $data_output['file'];?>" class="btn btn-small btn-primary">
                                            <i class="btn-icon-only icon-ok">Download</i>										
                                        </a></td> 
                                      </tr> 
                            
                                        
                                    @endif
                                @endif
                            @endif

                                
                              
                                
                            </tbody>
                            </table>
                        
                    </div> <!-- /widget-content -->
                
                </div> <!-- /widget -->
                </div>
                
                
            <div> 
    
                
                    
    
    
    
    <!--<p><span style="background-color: #ffffff; font-size: medium; color: #ff6600; font-family: georgia,palatino;">2. Shri H.H.J.B. Polytechnic&nbsp; (Shift ) &nbsp; &nbsp; &nbsp;&nbsp; Institute Code &nbsp; &nbsp; 1104</span><strong><span style="background-color: #ffffff; font-size: large; color: #ff6600; font-family: georgia,palatino;"> &nbsp;</span></strong></p>-->            </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <h3><strong></strong></h3>
                </div>
                <div class="table-responsive">                   
                    
                    
    <p><strong>&nbsp;</strong></p>
    <p>&nbsp;</p>            </div>
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
    <i>Last updated on : 01-08-2016 12:32 PM</i>
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