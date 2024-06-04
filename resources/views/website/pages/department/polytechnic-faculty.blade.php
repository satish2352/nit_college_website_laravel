@extends('website.layout.master')
@section('content')
<style>
    .row{
        margin-top:40px;
        padding: 0 10px;
    }
    .clickable{
        cursor: pointer;   
    }

    .panel-heading div {
        margin-top: -18px;
        font-size: 15px;
    }
    .panel-heading div span{
        margin-left:5px;
    }
    .panel-body{
        display: none;
    }
</style>
<script>
/**
*   I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
*   but will likely encounter performance issues on larger tables.
*
*		<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
*		$(input-element).filterTable()
*		
*	The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
*/
(function(){
'use strict';
var $ = jQuery;
$.fn.extend({
    filterTable: function(){
        return this.each(function(){
            $(this).on('keyup', function(e){
                $('.filterTable_no_results').remove();
                var $this = $(this), 
                    search = $this.val().toLowerCase(), 
                    target = $this.attr('data-filters'), 
                    $target = $(target), 
                    $rows = $target.find('tbody tr');
                    
                if(search == '') {
                    $rows.show(); 
                } else {
                    $rows.each(function(){
                        var $this = $(this);
                        $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                    })
                    if($target.find('tbody tr:visible').size() === 0) {
                        var col_count = $target.find('tr').first().find('td').size();
                        var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
                        $target.find('tbody').append(no_results);
                    }
                }
            });
        });
    }
});
$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
// attach table filter plugin to inputs
$('[data-action="filter"]').filterTable();

$('.container').on('click', '.panel-heading span.filter', function(e){
    var $this = $(this), 
        $panel = $this.parents('.panel');
    
    $panel.find('.panel-body').slideToggle();
    if($this.css('display') != 'none') {
        $panel.find('.panel-body input').focus();
    }
});
$('[data-toggle="tooltip"]').tooltip();
})
</script>
<div class="container-fluid bg-pink" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
<marquee><h4 style="color:green"><strong>Humanities & Science Staff Section</strong></h4></marquee>
<div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container card-shadow" style="margin-bottom: 95px;"> 
<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
    <div class="col-sm-12">
        
                <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">STAFF SECTION</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Find Our Staff" />
                </div>
                <table class="table table-hover" id="dev-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Qualification</th>
                            <th>Post</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $count=0; 
                            $query="select s.*,dp.*,dd.* from tbl_staff s,designation dp,department dd where s.Designation_id=dp.Designation_id and s.Department_id=dd.Department_id and s.fld_delete='0' and dd.Department='Humanities And Science Department' ";
                            $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                            
                            while($fetch=mysqli_fetch_array($row)) {

                            extract($fetch);
                        ?>
                        <tr>
                            <td><?php echo ++$count; ?></td>
                            <td><?php echo $fetch['fld_staff_name'] ?></td>
                            <td><?php echo $fetch['fld_staff_qualification'] ?></td>
                            <td><?php echo $fetch['Designation'] ?></td>
                            <td><img src="..images/staff/<?php echo $fetch['fld_staff_photo'] ?>" alt="" class="img-responsive" height="100" width="100"></td>
                        </tr>
                       
                        <?php } ?>   
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
        
<!--            <table width="200" class="table table-hover table-responsive" cellspacing="5" cellpadding="5">-->
<!--  <tr>-->
<!--    <th colspan="3" scope="col"> -->
<!--      <h2><strong>Faculty</strong></h2></th>-->
<!--    </tr>-->
<!--  <tr>-->
<!--    <td width="12%">1</td>-->
<!--    <td width="50%">Name : Sandip  S. Gaikar<br>Designation-->
<!-- : First Year Dean & Lecturer  <br> Area Of Specialization : Pure Mathematics <br>Higher Qualifiction : M.Sc.Mathematics  <br>Experience :  03 Years<br>Email ID-->
<!-- :  Sandipgaikar1993@gmail.com-->
<!-- <br> -->
<!--</td>-->
<!--    <td width="38%"><center><img src="../Akole_Poly/gaikar.jpg" width="177" height="177" /> </center></td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td>2</td>-->
<!--    <td width="50%">Name : Rahul S.Awari-->
<!--<br>Designation : Leturer-->
<!-- <br> Area Of Specialization : Chemistry -->
<!--  <br>Higher Qualifiction : M.Sc.-->
<!--  <br>Experience :  06 years-->
<!--  <br>Email ID :  Awari.rahul4@gmail.com-->
<!-- <br> </td>-->

<!--    <td width="38%"><center><img src="../Akole_Poly/Kotkar  M R_0001.jpg" width="177" height="177" /></center></td>-->
<!--  </tr>-->


<!--  <tr>-->
<!--    <td>3</td>-->
<!--    <td width="50%">Name : Rekha G.Ghule-->
<!--<br>Designation : Leturer-->
<!-- <br> Area Of Specialization : Physics-->
<!--  <br>Higher Qualifiction : M.Sc(Physics),B.Ed-->
<!--  <br>Experience :  06 Years-->
<!--  <br>Email ID : Rekha.ghule123@gmail.com-->
<!-- <br> </td>-->
<!--    <td width="38%"><center><img src="../Akole_Poly/ghule.JPG" width="177" height="177" /> </center></td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td>4</td>-->
<!--    <td width="50%">Name : Priya D.Kedar-->
<!--<br>Designation : Leturer-->
<!-- <br> Area Of Specialization : English-->
<!--  <br>Higher Qualifiction : M.A.(English)-->
<!--  <br>Experience :  03 Years-->
<!--  <br>Email ID :  Kedarpriya1@gmail.com-->
<!-- <br> </td>-->
<!--    <td width="38%"><center><img src="../Akole_Poly/Priya Image.jpg" width="177" height="177" /></center></td>-->
<!--  </tr>-->

<!--<tr>-->
<!--    <td>5</td>-->
<!--    <td width="50%">Name : Vijay J.Pathave -->
<!--<br>Designation : Leturer-->
<!-- <br> Area Of Specialization : Chemistry<br> -->
<!--  Higher Qualifiction : M.Sc.Chemistry-->
<!--  <br>Experience :  03 Years-->
<!--  <br>Email ID :    Vijaypathave007@gmail.com-->
<!-- <br> </td>-->
<!--    <td width="38%"><center><img src="../Akole_Poly/vijay.JPG" width="177" height="177" /></center></td>-->
<!--  </tr>-->


<!--  <tr>-->
<!--    <td>6</td>-->
<!--    <td width="50%">Name : Deepak M.Balsarph-->
<!--<br>Designation : Leturer-->
<!-- <br> Area Of Specialization : Pure mathematics<br> -->
<!--  Higher Qualifiction : M.Sc(Mathematics),B.Ed.-->
<!--  <br>Experience :  06 Years -->
<!--  <br>Email ID :    Balsaraphm00@gamil.com-->
<!-- <br> </td>-->
<!--    <td width="38%"><center><!--<img src="../Akole_Poly/Cothave S Photo.jpg" width="177" height="177" /> --</center></td>-->
<!--  </tr>-->

<!--</table>-->


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
<i>Last updated on : 24-07-2018 04:26 PM</i>
</div> -->
<!--Right col-->
<div class="col-sm-12 right-col-fix">
<div>
<div class="list-group">
                    <div class="list-group-item">Humanities & Science</div>
                    @if(isset($data_output) && isset($data_output['Department_id']))
                    <a href="{{ route('department-profile', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item ">PROFILE</a>
                    <a href="{{ route('department-vision-mission', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Vision Mission</a>
                    <a href="{{ route('department-curriculum', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">CURRICULUM</a>
                    {{-- <a href="{{ route('department-faculty', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Faculty</a> --}}
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