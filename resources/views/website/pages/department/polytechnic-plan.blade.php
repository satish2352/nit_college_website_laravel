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
      text-align:center;
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
        <h4 style="color:green"><strong>Civil Engineering Plans</strong></h4>
        <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div>
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container card-shadow" style="margin-bottom: 95px;"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <!--<h2>Teaching Plans: </h2>-->
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row --><div class="panel-group" id="accordion">
    <!--accordion panel-->
    
        <!--panel 1-->
        <div class="" id="">
                            <div class="">
            <!--<h4 class="">-->
            <!--Teaching Plan is implemented as per the Curriculum Implementation and Assessment Norms (CIAAN) of MSBTE. To view Teaching Plan of each subject, click on following links. -->
            <!--</h4>-->
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
                                    <th><center>Plan Name</center></th>
                                    <th><center>Year</center></th>
                                    <th><center>Semister</center></th>
                                    <th><center>Name Of The Subject</center></th>
                                    <th><center>Download File</center></th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <tbody>
                                    @if (isset($error))
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @else
                                        @if ($data_output->isEmpty())
                                            <div class="alert alert-info">
                                                Data not found
                                            </div>
                                        @else
                                            @foreach ($data_output as $data)
                                                @if ($data->is_active == 0)
                                                    <div class="alert alert-info">
                                                        Data not found
                                                    </div>
                                                @else
                                                    <tr>
                                                        <td><center>{{ $data->plan_name }}</center></td>
                                                        <td><center>{{ $data->edu_year }}</center></td>
                                                        <td><center>{{ $data->semister }}</center></td>
                                                        <td><center>{{ $data->subject_name }}</center></td>
                                                        <td>
                                                            <a href="{{ Config::get('DocumentConstant.PLAN_VIEW') }}{{ $data->file }}"
                                                                target="_blank" class="btn btn-small btn-primary">
                                                                <i class="btn-icon-only icon-ok">Download</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </tbody>

                                
                                {{-- @if (isset($error))
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
                                        <td><center>{{ $data_output->plan_name }}</center></td>
                                        <td><center>{{ $data_output->edu_year }}</center></td>
                                    <td><center>{{ $data_output->semister }}</center></td>
                                    <td><center>{{ $data_output->subject_name }}</center></td>

                                          
                                      </tr> 
                            
                                        
                                    @endif
                                @endif
                            @endif --}}
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
                               </div>
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
                    <div class="list-group-item">Humanities & Science</div>
                    @if(isset($data_output) && isset($data_output['department_id']))
                    <a href="{{ route('department-profile', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item ">PROFILE</a>
                    <a href="{{ route('department-vision-mission', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">Vision Mission</a>
                    <a href="{{ route('department-curriculum', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">CURRICULUM</a>
                    {{-- <a href="{{ route('department-faculty', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">Faculty</a> --}}
                    <a href="{{ route('department-syllabus', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">Syllabus</a>

                    <a href="{{ route('department-time-table', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">Time Table</a>
                    <a href="{{ route('department-mentor', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">MENTOR</a>
                    <a href="{{ route('department-achievements-awards', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                    <a href="{{ route('department-activities-events', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                    <a href="{{ route('department-students-association', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                    <a href="{{ route('department-plan', ['id' => $data_output['department_id']]) }}"
                        class="list-group-item active-rp-link">PLAN</a>
                    @else
                    <p> Data not available.</p>
                    @endif



                    <div class="list-group-item"></div>
                </div>
         
              </div>
        </div>
    </div></div>
    </div>
    </div>
    @endsection