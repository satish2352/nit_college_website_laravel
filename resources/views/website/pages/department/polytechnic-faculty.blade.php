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
                        @if (isset($error))
                        <div>
                            {{ $error }}
                        </div>

                        <php
                        {{-- dd($data_output);
                        die(); --}}
                        ?>
                    @else
                        @if (!$data_output)
                        <div>
                            <p class="department-error">Data not available.</p>
                        </div>
                        @else
                            @if ($data_output->is_active == 0)
                                <div>
                                    <p class="department-error">Data not available.</p>
                                </div>
                            @else
                            <td>
                                    <h4 style="color:black">{{ $data_output->fld_staff_name }}</h4>
                            </td>
                            <td>>
                                <p>{{ strip_tags($data_output->fld_staff_qualification) }}</p>
                            </td>
                            <td>>
                                <p>{{ strip_tags($data_output->Department) }}</p>
                            </td>
                                <td>>
                                    <p>{{ strip_tags($data_output->Designation) }}</p>
                                </td>
                                <td>>
                                    <p>{{ strip_tags($data_output->fld_staff_experiance) }}</p>
                                </td>
                                {{-- <td>>
                                    <p>{{ strip_tags($data_output->Designation) }}</p>
                                </td> --}}
                                <td>
                                <img id="english"
                                    src="{{ Config::get('DocumentConstant.STAFF_VIEW') }}{{ $data_output->photo }}"
                                    class="img-fluid img-thumbnail" height="300px" width="700px">
                                </td>
                            @endif
                        @endif
                    @endif




                       
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
        


    </div>        
</div><!-- /.row --></div>
<div class="col-md-1 hidden-sm">&nbsp;</div>
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">

<div class="col-sm-12 right-col-fix">
<div>
    <div class="list-group">
        <div class="list-group-item">Humanities & Science</div>
        @if(isset($data_output_category) && isset($data_output_category['id']))                    
        <a href="{{ route('department-profile', ['id' => $data_output_category['id']]) }}"
            class="list-group-item ">PROFILE</a>
        <a href="{{ route('department-vision-mission', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">Vision Mission</a>
        {{-- <a href="{{ route('department-curriculum', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">CURRICULUM</a> --}}
        {{-- <a href="{{ route('department-faculty', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">Faculty</a> --}}
        {{-- <a href="{{ route('department-syllabus', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">Syllabus</a> --}}

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
            class="list-group-item active-rp-link">Syllabus</a>
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