@extends('website.layout.master')
@section('content')
<style>
    .panel_content {
        background-color: #eceff7;
    }

    .clickable {
        cursor: pointer;
    }

    /* .titlegov{
  
    margin-bottom: 25px !important;
} */

    .panel {
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 0;
        width: 100%;
        /* Changed from fixed width to 100% */
    }

    .product-type {
        margin-top: 45px;
    }

    .product-size {
        margin-top: 25px;
    }

    .product-use {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .panel-heading span {
        margin-top: -20px;
        font-size: 15px;
    }

    .panel-primary>.panel-heading {
        color: #000;
        background-color: #fff;
        border-bottom: 1px solid #eeeeee;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .govbody{
        margin-top: -60px;
    }

    .panel-title {
        font-size: 22px;
        font-weight: 400;
    }

    .panel_product_type {
        margin-top: 20px;
    }

    .panel_product_type {
        line-height: 26px;
    }

    .panel_product_type {
        font-size: 18px;
        font-weight: 400;
        color: black;
    }

    .dataTables_filter {
        display: flex;
        justify-content: end;
        padding-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_info {
        clear: both;
        float: left;
        padding-top: .755em;
    }

    .dataTables_wrapper .dataTables_paginate {
        float: right;
        text-align: right;
        padding-top: .25em;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #000 !important;
        border: 1px solid rgba(0, 0, 0, 0.3);
        background: linear-gradient(to bottom, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
    }
</style>
<script>
    $(document).on('click', '.panel-heading span.clickable', function(e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass(
                'glyphicon glyphicon-plus-sign');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass(
                'glyphicon glyphicon-minus-sign');
        }
    })
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
        <div class="col-sm-12" style="padding:0;">
            <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div>
        </div>

        <div class="panel_content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="" id="iwtRightPannel">
                            <!--Right col-->
                            <div class="col-sm-12 right-col-fix">
                                <div>
                                    <div class="list-group">

                                        <div class="list-group-item"><b>NIT POLYTECHNIC, NASHIK</b></div>
                                        <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश –
                                            थोडक्यात</a>

                                        <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">GOVERNING BODY</a>
                                        <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item ">MANDATARY DISCLOSURE</a>
                                        <a href="{{ route('polytechnic-aicte-extension') }}" class="list-group-item ">AICTE EOA</a>
                                        <a href="{{ route('polytechnic-affiliation') }}" class="list-group-item ">MSBTE
                                            AFFILIATION</a>
                                        <a href="{{ route('polytechnic-affiliation_certificates') }}" class="list-group-item ">AFFILIATION CERTIFICATES</a>
                                        {{-- <a href="{{ route('polytechnic-servicerules') }}" class="list-group-item
                                        ">SERVICE RULES</a> --}}
                                        {{-- <a href  ="pages/polytechnic-about-t&pcell-IOD.php" class="list-group-item ">TRAINING AND PLACEMENT</a> --}}
                                        <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item ">ANTIRAGGING COMMITTEE</a>
                                        <a href="{{ route('polytechnic-internal-complaint') }}" class="list-group-item ">INTERNAL COMPLAINT COMMITTEE</a>
                                        {{-- <a class="list-group-item ">GRIEVANCE REDRESSAL COMMITTEE</a> --}}
                                        <a href="{{ route('polytechnic-about-scst') }}" class="list-group-item ">SC/ST
                                            CELL</a>

                                        {{-- <a href="{{ route('polytechnic-academic-calendar') }}"
                                        class="list-group-item ">ACADEMIC CALENDAR</a> --}}
                                        {{-- <a href="pages/polytechnic-about-regulatingauthority-IOD.php" class="list-group-item ">FEES REGULATING AUTHORITY</a>
                                   <a href="pages/polytechnic-about-terms-IOD.php" class="list-group-item ">TERMS AND CONDITIONS</a>
                                   <a href="pages/polytechnic-about-downloads-IOD.php" class="list-group-item ">STUDENT DOWNLOADS</a>
                                   <a href="pages/polytechnic-about-downloadsstaff-IOD.php" class="list-group-item ">STAFF DOWNLOADS</a>
                                   <a href="pages/polytechnic-about-scholarship-IOD.php" class="list-group-item ">STUDENT SCHOLARSHIP</a> --}}
                                        {{-- <a href="pages/polytechnic-about-events-IOD.php" class="list-group-item ">EVENTS</a>
                                   <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" class="list-group-item ">SBI COLLECT</a>
                                   <a href="pages/polytechnic-about-media-IOD.php" class="list-group-item ">MEDIA NEWS</a>
                                   <a href="pages/polytechnic-about-faq-IOD.php" class="list-group-item ">FAQ</a> --}}

                                        {{-- <div class="list-group-item"></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-9 col-md-9 col-sm-9 pt-5 govbody">
                        <div class="table-responsive">

                            <!-- Add this wrapper -->
                            <div class="card-shadow p-4">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title" style="color:#00ae97"><b>GOVERNING BODY</b></h3>
                                    </center>

                                </div>
                                <div class="panel-body">
                                    <table id="example" class="table display responsive nowrap table-striped table-hover table-bordered border-dark" style="width:100%">
                                        <thead class="">
                                            <tr>
                                                <th scope="col" class=" justify-content-center">
                                                    <center> SR.NO</center>
                                                </th>
                                                <th scope="col">
                                                    <center> Name</center>
                                                </th>
                                                <th scope="col">
                                                    <div class="d-flex justify-content-center">
                                                        Designation
                                                    </div>
                                                </th>
                                                {{-- <th scope="col">
                                                <div class="d-flex justify-content-center">
                                                    Address
                                                </div>
                                            </th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data_output as $data)
                                            <tr class="">
                                                <td>
                                                    <center>{{ $data->fld_bm_id }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $data->fld_bm_name }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $data->Designation }}</center>
                                                </td>
                                                {{-- <td>
                                                    <center>{{ $data->gov_address }}</center>
                                                </td> --}}

                                            </tr>
                                            @empty
                                            {{-- <h4>No Data Found For District Disaster Management Plan</h4> --}}
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div>

                            </div> <!-- Close this wrapper -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection