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
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container card-shadow" style="margin-bottom: 95px;">
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                
    <div class="span7">   
    
                </div>
                
            <div> 
                    
   </div>
            </div>        
    </div><!-- /.row --><div class="row outer-white">

       

            <div class="col-sm-12">
                <div class="col-sm-12" style="padding:0;">
                    <h4 style="color:green"><strong>Download Time Table Here....</strong></h4>
                    <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
                </div>
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
                                           <td>  <a href="{{ Config::get('DocumentConstant.TIMETABLE_DOC_VIEW') }}{{ $data_output->file }}"
                                            target="_blank" class="btn btn-small btn-primary">
                                            <i class="btn-icon-only icon-ok">Download</i>	
                                            
                                            
                                        </a></td> 
                                      </tr> 
                            
                                        
                                    @endif
                                @endif
                            @endif


                          
                            </tbody>
                            </table>
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
                <div class="list-group-item">Humanities & Science</div>
                @if(isset($data_output_category) && isset($data_output_category['id']))                    
                <a href="{{ route('department-profile', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item ">PROFILE</a>
                <a href="{{ route('department-vision-mission', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Vision Mission</a>
                <a href="{{ route('department-curriculum', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">CURRICULUM</a>
                {{-- <a href="{{ route('department-faculty', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Faculty</a> --}}
                <a href="{{ route('department-syllabus', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Syllabus</a>

                <a href="{{ route('department-time-table', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Time Table</a>
                <a href="{{ route('department-mentor', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">MENTOR</a>
                <a href="{{ route('department-achievements-awards', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                <a href="{{ route('department-activities-events', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                <a href="{{ route('department-students-association', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                <a href="{{ route('department-plan', ['id' => $data_output_category['id']]) }}"
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