@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<center><h4 style="color:green"><strong>Facilities</strong></h4></center>

	<div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.html" alt="" class="img-responsive"></div>
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container"> 
<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        
                 
    <div class="col-sm-12">
        @foreach($data_output as $campus_data)
            <div>
                <h4 style="color:blue">{{ $campus_data->facility }}</h4>
            </div>
            <div>    
                <p>{{ $campus_data->facility_description }}</p>
            </div>
        @endforeach
        <br>
           
    </div> 
      
        
        
        <div class="col-sm-12">
            <div>
                <h2 style="color:blue">Hostel and Mess</h2>
            </div>
            <div>    
            <p>
    

    The Institute has magnificently designed separate hostels outside the college campus.<br>
    Separate boys and girls each with all modern facilities, for boarding and other recreational activities.<br>
    The hostels have their own mess to provide good and hygienic food to the students.<br>
    The boys' hostel has the capacity of about 120 boys (extendable up to 150).<br>
    The girls' hostel can house 20 girls (can be extended up to 50).<br>
    The types of rooms are cubicles and dormitories.<br>
    Mess is maintained on co-operative basis.


</p>
                 </div>
                 <br>
           
                 
                 
        
        </div>  
        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">
            <!--<img src="../up-images/lab copy.jpg" alt="Library" class="img-responsive" style="margin:0 auto">-->
        </div>        
</div><!-- /.row --><div class="panel-group" id="accordion">
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        <h4 class="">
        <Strong></Strong>
        </h4>
        </div>
        
        <div id="" class="">
        <div class="">
			            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h6></h6>
            </div>
            <div>                   
                <!--<ul class="arrow-blue">
<li>Availability of Study and Reference Books.</li>
<li>Large collection of National &amp; International Journals</li>
<li>Reading Halls for more than 200 Students</li>
<li>Special Reading Room for and Teachers</li>
<li>Computerized Library Management System</li>
<li>Built up area is about 400SQ.M</li>
<li>connected with 10Mbps Internet Connectivity</li>
<li>Magazines and Periodicals Section</li>
<li>A separate Reference Section is maintained for important and rare books.</li>
<li>Easy operation through automated library procedures and Bar Code system</li>
<li>Digital Library &ndash; to provide access to e-Journals, to download desired material</li>
<li>Availability of Various News papers.</li>
<li>Search for books through OPAC(Open Public Access Centre)</li>
<li>Book Bank facility is available&nbsp;for SC, ST Students.&nbsp; Students belonging to the respective group can make use of these Banks.</li>
</ul>-->            </div>
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        <h4 class="">
        <a data-toggle="" data-parent="" class=""  href="#collapse77"></a>
        </h4>
        </div>
        
        <div id="collapse77" class="panel-collapse collapse ">
        <div class="panel-body">
			            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h6></h6>
            </div>
            <div>                   
                <!--<ul class="arrow-blue">

</ul>-->            </div>
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        <h4 class="">
        <a data-toggle="" data-parent="" class=""  href=""></a>
        </h4>
        </div>
        
        <div id="collapse78" class="panel-collapse collapse ">
        <div class="panel-body">
			            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h6></h6>
            </div>
            <div>                   
                <!--<ul class="arrow-blue">
<li><strong>SILENCE&nbsp;&amp;CLEANLINESS</strong>&nbsp;should&nbsp;be strictly maintained&nbsp; in &amp; around the Library.</li>
<li>After obtaining the Institute Identity Card, all the Student &amp; Staff are advised to apply for the&nbsp;<strong>Library Membership</strong>&nbsp;in a prescribed application form, which is available at library Information Desk.</li>
<li>All the&nbsp;<strong>Students</strong>&nbsp;are eligible to borrow / Loan&nbsp;<strong>Four (5) Books</strong>&nbsp;from the Circulation section for a Period of&nbsp;<strong>1 week. </strong></li>
<li>Defaulters will be charged&nbsp;<strong>Rs.1/- (one)</strong>&nbsp;per day or withdrawal of the card.</li>
<li>All the Students should clear the dues to obtain&nbsp; a&nbsp;<strong>NO-DUE</strong>&nbsp;Certificate from the Library</li>
<li>While borrowing the Books / Journal, the User&nbsp;is&nbsp;<strong>ADVISED&nbsp;to Check&nbsp;</strong>and&nbsp;ensure that the Book(s) / Back Volumes of the Journal is / are in PROPER condition.&nbsp;If any Page(s) are MISSING or&nbsp;DAMAGED,&nbsp;inform the same to the Library Staff on Duty.</li>
<li>The students should get the borrowed&nbsp;books / Journal CHECKED by the staff member&nbsp;and&nbsp;cooperate with the Library Staff.</li>
<li>Avoid making Pencil / Pen Marks, Underlining, or any other type of Damage to the Book(s) / Journal If any such things&nbsp;are noticed at the time of returning the books, the Borrower will be held&nbsp;RESPONSIBLE.</li>
<li>In case the Book is lost, the Borrower has to&nbsp;<strong>REPLACE the LATEST EDITION&nbsp;</strong>of&nbsp;the Lost Book. If the Book is not available, the&nbsp; Borrower has to pay the COST of&nbsp; the Book as per the Library Rules</li>
<li>Borrowers should RETURN&nbsp;the books&nbsp;<strong>ON or BEFORE</strong>&nbsp;the Due Date.<br />Defaulter will be fined.</li>
</ul>-->
<ul class="arrow-blue">
<li>

</li>
</ul>
         </div>
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        <h4 class="">
        <a data-toggle="" data-parent="" class=""  href=""></a>
        </h4>
        </div>
        
        <div id="" class="">
        <div class="">
			            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h6></h6>
            </div>
            <div>                   
  <br>
  <h4 class="">
        <Strong></Strong>
        </h4><br>
<br>
 <h4 class="">
        <Strong></Strong>
        </h4><br>
 <br>



<br>
</div>
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
<i>Last updated on : 21-02-2019 12:03 PM</i>
</div> -->
	<!--Right col-->
	
	@foreach($data_output as $campus_data)
                 
                 
                              
	<div class="col-sm-12 right-col-fix">
	<div>
		 <img src="{{ Config::get('DocumentConstant.POLYTECHNIC_CAMPUS_VIEW') }}{{ $campus_data->photo }}" alt="" class="img-responsive" style="margin-top:30px; margin-bottom:30px; height:200px; width:200px;">
	 	</div>
	</div>
                 
    @endforeach
                 
	<div class="col-sm-12 right-col-fix">
	<div>
		 <img src="{{ env('FILE_VIEW') }}/visitors/campus.gif" alt="" class="img-responsive" style="margin-top:30px; margin-bottom:30px; height:200px; width:200px;">
	 	</div>
	</div>
	<div class="col-sm-12 right-col-fix">
	<div>
		 <!--<img src="../visitors/collage.gif" alt="" class="img-responsive" style="margin-top:30px; margin-bottom:30px; height:200px; width:200px;">-->
	 	</div>
	</div>
</div></div>
</div>
</div>
    @endsection