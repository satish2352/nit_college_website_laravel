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
        <h4 style="color:green"><strong>Humanities And Science  Department Curriculum</strong></h4>
        <!--<div class="pull-right"><img src="../up-images/civil-iconimgFile5682470338b55.png" alt="" class="img-responsive"></div>-->
    </div>
    
    </div>
    </div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
    <div class="container card-shadow" style="margin-bottom: 95px;"> 
    <div class="row" style="padding:0px">
    <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
    <div class="row outer-white">
            <div class="col-sm-12">
                <div>
                    <p>The curriculumn of each department is designed by MSBTE and it includes Teaching Examination Scheme and syllabus of respective semester. From the academic year 2017-18, 'I' Scheme is implemented and followed.</p>
                    <!--<h2><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Department of Civil Engineering</span></strong></span></h2>-->
                    <!--<br><h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Program Educational Outcome (PEO)</span></strong></span></h4>-->
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
                                           <td>  <a href="../images/curriculum/<?php $data_output['file'];?>" class="btn btn-small btn-primary">
                                            <i class="btn-icon-only icon-ok">Download</i>										
                                        </a></td> 
                                      </tr> 
                            
                                        
                                    @endif
                                @endif
                            @endif




                               
                             
                                
                            





                                
                            </tbody>
                            </table>
    <br>
    
    <!--                <table border="1">-->
    <!--    <tr>-->
    <!--        <th colspan="2"> <h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Program Specific Outcome (PSO)</span></strong></span></h4>  </thss>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        <td><strong>PSO 1:</strong> </td>-->
    <!--        <td><p><b>Construction Planning and Designing:</b> Perform optimal civil engineering construction, planning and designing  activities of desired quality at optimal cost.</p></td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        <td><strong>PSO 2:</strong> </td>-->
    <!--        <td><p><b>Construction Execution and Maintenance:</b> Execute civil engineering construction and maintenance using relevant materials and equipment.</p></td>-->
    <!--    </tr>-->
        
        
    <!--</table>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Program Specific Outcome (PSO)</span></strong></span></h4>-->
    <!--<p>PSO 1: <b>Construction Planning and Designing:</b> Perform optimal civil engineering construction, planning and designing  activities of desired quality at optimal cost.<br>-->
    <!--PSO 2: <b>Construction Execution and Maintenance:</b> Execute civil engineering construction and maintenance using relevant materials and equipment. <br>-->
    <!--</p><br>-->
    
    <!--                <h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Semester-III</span></strong></span></h4>-->
    <!--			<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Advanced surveying  &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22301)</span></strong></span></h4>-->
    <!--<p> At the end of Advance surveying  course the student will be able:</p>-->
    <!--<p>CO 1: Prepare plans using plane table survey.<br>-->
    <!--CO 2: prepare plans using theodolite survey.<br>-->
    <!--CO 3: Find distance and elevations using tachometer<br>-->
    <!--CO 4: Set out simple circular curves<br>-->
    <!--CO 5: prepare plans using total station instrument<br>-->
    <!--CO 6: Locate coordinate of stations using GPS.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Highway  Engineering                              &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22302)</span></strong></span></h4>-->
    
    <!--<p> At the end of Highway  Engineering   course the student will be able:</p>-->
    <!--<p>CO 1: identify the types of roads as per IRC recommendations.<br>-->
    <!--CO 2: Implement geometrical design features of different highways.<br>-->
    <!--CO 3: perform different testes on road material.<br>-->
    <!--CO 4: evaluate traffic flow characteristics.<br> -->
    <!--CO 5: Implement Hill road construction using relevant materials , techniques and methods.<br>-->
    <!--CO 6: Undertake maintenance of roads and drainage.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Mechanics of structure                              &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22303)</span></strong></span></h4>-->
    
    <!--<p> At the end of Mechanics of Structure  course the student will be able:</p>-->
    <!--<p>CO 1: articulate practical application of moment of inertia of symmetrical and unsymmetrical structure sections.<br> -->
    <!--CO 2: Interpret structural behavior of materials under various loading conditions.<br> -->
    <!--CO 3: select material considering engineering properties for various structural application.<br>-->
    <!--CO 4: Interpret shear force and bending moment diagram for various types of beams and loading conditions.<br>  -->
    <!--CO 5: determine the bending and shear stress in beams under different loading conditions.<br> -->
    <!--CO 6: check the column safety for various loading and end conditions.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Building construction                             &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22304)</span></strong></span></h4>-->
    <!--<p> At the end of Building Construction  course the student will be able:</p>-->
    <!--<p>   At the end of Building Construction course the student will be able:<br>-->
    <!--CO 1: Identify components of building structure.<br> -->
    <!--CO 2: Propose suitable type of foundation for building structures.<br>-->
    <!--CO 3: Select suitable type of masonry for building structure.<br>-->
    <!--CO 4: Propose relevant means of communication for different types of building.<br>-->
    <!--CO 5: Execute safe practices in building construction activities.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: concrete technology                             &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22305)</span></strong></span></h4>-->
    <!--<p> At the end of Concrete Technology course the student will be able:</p>-->
    <!--<p>CO 1: use relevant types of cement. In different site condition.<br>-->
    <!--CO 2: Use relevant aggregate for required concrete work.<br>-->
    <!--CO 3: prepare concrete of desire compressive strength.<br>-->
    <!--CO 4: prepare concrete of require specification.<br>-->
    <!--CO 5: maintain the quality of concrete.<br>-->
    <!--CO 6: use relevant admixtures for concreting for different whether condition.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Computer aided drawing                               &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22022)</span></strong></span></h4>-->
    <!--<p>At the end of Computer Aided Drawing course the student will be able:</p>-->
    <!--<p>CO 1: interpret the given two dimensional drawing.<br>-->
    <!--CO 2: Use CAD software for drafting and editing two dimensional drawing.<br>-->
    <!--CO 3: Locate the dimension of drafted drawing.<br>-->
    <!--CO 4: Draw isometric and Three Dimensional Drawing.<br>-->
    <!--</p><br>-->
    <!--<h2><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Department of Civil Engineering</span></strong></span></h2>-->
    <!-- <h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Semester-IV</span></strong></span></h4><br>-->
    <!-- <h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Hydraulics                               &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22401)</span></strong></span></h4>              -->
    <!--<p>At the end of Hydraulics course the student will be able:</p>-->
    <!-- <p>CO 1: Intrepret the pressure parameter from pressure measuring devices in flowing liquid.<br>               -->
                    
    <!--CO 2: Detremine total hydrostatic pressure and centre of pressure for different conditions.<br>-->
    <!--CO 3: Use relevant Fluid flow parameters in different situation.<br>-->
    <!--CO 4: Determine  the loss of head of fluid flow through pipes.<br>-->
    <!--CO 5: Find fluid flow parameters in open channel.<br> -->
    <!--CO 6: Select relevant Hydraulic pumps for different applications.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Theory of Structures                                        &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22402)</span></strong></span></h4>-->
    
    <!--<p>At the end of Civil Engineering Theory of Sturctures course the student will be able:</p>-->
    <!--<p>CO a: Analyze stresses include in vertical member subjected to direct and bending load.<br>-->
    <!--CO b: Analyze slope and deflection in a beam under different loading condition.<br>-->
    <!--CO c: Analyze end moment and fixed beam.<br> -->
    <!--CO d: Analyze continuous beam under different loading condition using the principal of three moments.<br>-->
    <!--CO e: Analyze continuous beam using moment distribution method under different loading condition.<br>-->
    <!--CO f: Evaluate axial force in the membership of Principal Truss.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: RAILWAY AND BRIDGE ENGINEERING                                                &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22403)</span></strong></span></h4>-->
    
    <!--<p>At the end of Fluid Mechanics and Machinery course the student will be able:</p>-->
    <!--<p>CO 1: identify the components of railway track.<br>-->
    <!--CO 2: Maintain the railway track.<br>-->
    <!--CO 3: Diagnose the condition of bridge.<br>-->
    <!--CO 4: Maintain different types of railway bridge and there component.<br> -->
    <!--CO 5: Maintain different types of tunnels.<br> -->
    
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: GEOTECHNICAL ENGINEERING	                                                 &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22404)</span></strong></span></h4>-->
    
    <!--<p>CO 1: Identify types of rocks and subsoil strata of earth.<br>-->
    <!--CO 2: interpret the physical properties of soil  related to given construction activities.<br>-->
    <!--CO 3: Use the results of permeability and shear strength test for foundation analyasis.<br> -->
    <!--CO 4: interpret the soil bearing capacity result.<br>  -->
    <!--CO 5: compute optimum values for moisture content for maximum dry density of soil through various test.<br>-->
    <!--</p><br>-->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Buliding Planning And Drawing	                                                 &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22405)</span></strong></span></h4>-->
    <!--<p>At the end of Building Planning And Drawing course the student will be able:</p>-->
    <!--<p>CO a: interpret the symbols, sign and convention from the given drawing.<br> -->
    <!--CO b: prepare line plan of residential and public building using principles planning.<br> -->
    <!--CO c: Prepare submission and working drawing from the given requirement of load bearing structure.<br> -->
    <!--CO d: Prepare submission and working drawing from the given requirement of Frame  structure.<br> -->
    <!--CO e: Draw two Point perspectives drawing for given small object.<br> -->
    <!--</p><br> -->
    
    <!--<h4><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">Course: Environment Studies.                                                    &nbsp;&nbsp;&nbsp;&nbsp;     Course Code: (22447)</span></strong></span></h4>-->
    <!--<p>At the end of Environment Studies course the student will be able:</p>-->
    <!--<p>CO 1: Develop Public awareness about environment.<br>-->
    <!--CO 2: Select alternative energy sources for engineering practice.<br>-->
    <!--CO.3: Conserve ecosystem and bio diversity.<br>-->
    <!--CO 4: Apply techniques to reduce environment pollution.<br>-->
    <!--CO 5: Manage social issues and environment ethics as lifelong learning.<br> -->
    
    <!--</p><br>-->
    
    
    
    
    
    
    
                </div>
                <div>                   
                                </div>
            </div>        
    </div><!-- /.row -->
    <div class="row outer-white">
        
    <!--<div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/Neeraja-PrasadimgFile15683d7aec651a.jpg" alt="Mrs. Neeraja Prasad">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mrs. Neeraja Prasad</h4>
            </div>
            <div>
                <p>M.A.(English) M. Phill (P.hd.) <br />SR. LECTURER<br /><strong>Experience :</strong> 23 yrs <br /><strong>Email : <strong><a href="mailto:poly@snjb.org">gangaraju.nppoly@snjb.org</a> ,</strong> <a href="mailto:neerajar_ovveti@yahoo.co.in">neerajar_ovveti@yahoo.co.in</a></strong><strong><br />Subject taught : </strong>English &amp; Communication skill</p>
    <p>&nbsp;</p>		</div>
        </div>
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/HimgFile156cff3572abd6.php" alt="Mr. Hemant R. Metkar">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mr. Hemant R. Metkar</h4>
            </div>
            <div>
                <p>M.Sc.(Physics)<br />LECTURER<br /><strong>Experience :</strong> 15 yrs<br /><strong>Email :</strong> <strong><a href="mailto:poly@snjb.org,"><strong>metkar.hrpoly@snjb.org</strong> ,</a></strong><strong>&nbsp; <a href="mailto:metkarhr13@rediffmail.com">metkarhr13@rediffmail.com</a></strong><br /><strong>Subject taught :</strong> Basic Physics &amp; Applied Physics</p>
    <p>&nbsp;</p>		</div>
        </div>
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/MimgFile156cff3751c0ee.php" alt="Mrs.Meghana.M.Wagh">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mrs. Meghana M. Wagh</h4>
            </div>
            <div>
                <p>M.Sc. (Chemistry) M.Ed <br />LECTURER <br /><strong>Experience :</strong> 14 yrs <br /><strong>Email :</strong> <strong><a href="mailto:poly@snjb.org">wagh.mmpoly@snjb.org</a> , <a href="mailto:Wagh.meghana@yahoo.in">wagh.meghana@yahoo.in</a></strong><br /><strong>Subject taught :</strong> Basic Chemistry &amp; Applied Chemistry</p>
    <p>&nbsp;</p>		</div>
        </div>
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/PimgFile156cff39309b96.php" alt="Mr.Pankaj J. Bafna">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mr. Pankaj J. Bafna</h4>
            </div>
            <div>
                <p>M.Sc. (Chemistry) B.Ed &nbsp;<br />LECTURER <br /><strong>Experience :</strong> 10 yrs <br /><strong>Email :</strong> <strong><a href="mailto:poly@snjb.org">bafna.pjpoly@snjb.org</a> , <a href="mailto:pankaj_bafna1312@rediffmail.com">pankaj_bafna1312@rediffmail.com</a></strong><br /><strong>Subject taught : Basic Chemistry &amp; Applied Chemistry</strong></p>
    <p>&nbsp;</p>		</div>
        </div>
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/AimgFile156cff3bd14e0d.S" alt="Mrs. Anjana S. Mali">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mrs. Anjana S. Mali</h4>
            </div>
            <div>
                <p>M.Sc.(Math) <br />LECTURER <br /><strong>Experience :</strong> 11 yrs <br /><strong>Email :</strong> <strong><a href="mailto:poly@snjb.org">mali.aspoly@snjb.org</a> , <a href="mailto:malisa2800@gmail.com">malisa2800@gmail.com</a></strong><br /><strong>Subject taught :</strong> Basic Maths, Eng.Maths &amp; Applied Maths</p>		</div>
        </div>
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/AimgFile156cff3df5922b.P" alt="Mr.Parimal B. Dugaje">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mr. Parimal B. Dugaje</h4>
            </div>
            <div>
                <p>M.Sc.(Physics)<br />LECTURER<br /><strong>Experience :</strong> 09 yrs<br /><strong>Email :</strong> <strong><a href="mailto:poly@snjb.org">pdugaje.pbpoly@snjb.org</a> , <a href="mailto:paridugaje@gmail.com">paridugaje@gmail.com</a></strong><br /><strong>Subject taught :</strong> Basic Physics &amp; Applied Physics</p>		</div>
        </div>
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <img class="img-responsive" src="../up-images/AimgFile156cff3f9c20d3.php" alt="Mr.Atul J. Bhawsar">
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:-23px;">
            <div>
                <h4>Mr. Atul J. Bhawsar</h4>
            </div>
            <div>
                <p>M.Sc.(Math)<br />LECTURER<br /><strong>Experience : </strong>08 yrs<br /><strong>Email :<a href="mailto:poly@snjb.org">bhavsar.ajpoly@snjb.org</a> ,<a href="mailto:atulbhawsar83@rediffmail.com">atulbhawsar83@rediffmail.com</a></strong><br /><strong>Subject taught :</strong> Basic Maths, Eng. Maths &amp; Applied Maths</p>		</div>
        </div>-->
    </div>
    <div class="row outer-white">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <!--img class="img-responsive" src="../Akole_Poly/person.png" alt="">--->
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:10px;">
            <div>
                <h4></h4>
                            
    
            </div>
            <div>
                <p></p>		</div>
        </div>
        
        
        
        
        
        
        
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
    <i>Last updated on : 21-02-2019 11:23 AM</i>
    </div> -->
        <!--Right col-->
        <div class="col-sm-12 right-col-fix">
        
        <div class="list-group">
                    <div class="list-group-item">Humanities & Science</div>
                    @if(isset($data_output) && isset($data_output['Department_id']))
                    <a href="{{ route('department-profile', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item ">PROFILE</a>
                    <a href="{{ route('department-vision-mission', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Vision Mission</a>
                    <a href="{{ route('department-curriculum', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">CURRICULUM</a>
                    <a href="{{ route('department-faculty', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Faculty</a>
                    <a href="{{ route('department-syllabus', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Syllabus</a>

                    <a href="{{ route('department-time-table', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Time Table</a>
                    <a href="{{ route('department-mentor', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">MENTOR</a>
                    <a href="{{ route('department-achievements-awards', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                    <a href="{{ route('department-activities-events', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                    <a href="{{ route('department-students-association', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                    <a href="{{ route('department-plan', ['id' => $data_output['Department_id']]) }}"
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