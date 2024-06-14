@extends('website.layout.master')
@section('content')
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt=""
                        class="img-responsive"></div>
            </div>

            <div class="panel_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                            @include('website.pages.home-sidebar.right-sidebar-home')
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <div class="panel panel-primary product-type">
                                    <div class="panel-heading">
                                        <center>
                                            <h3 class="panel-title" style="color:#00ae97;"><b>AFFILIATION CERTIFICATES </b>
                                            </h3>
                                        </center>
                                        <span class="pull-right clickable"><i
                                                class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                    </div>
                                    <div class="panel-body">
                                        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->

                                        <center>
                                            <div class="table-responsive p-3"> <!-- Add this wrapper -->
                                                @forelse ($data_output as $data)
                                                <div class="">
                                                  
                                                   <?php 

                                                   dd($data_output);
                                                   die();
                                                   ?>
                                                        <img id="english"
                                                            src="{{ Config::get('DocumentConstant.AFFILIATION_CERTIFICATES_VIEW') }}{{ $data->fld_affiliation_image }}"
                                                            class="img-fluid img-thumbnail" height="300px"
                                                            width="700px">
                                                  
                                                </div>
                                            @empty
                                                {{-- <h4>No Data Found</h4> --}}
                                            @endforelse
                                             
                                            </div>
                                        </center>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
