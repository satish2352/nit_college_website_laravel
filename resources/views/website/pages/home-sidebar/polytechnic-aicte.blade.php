@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>

        <!-- <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt=""
                        class="img-responsive"></div>
            </div> -->

        <div class="panel_content">
            <div>
                <div class="row">

                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                        @include('website.pages.home-sidebar.right-sidebar-home')
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div>
                            <div class="panel panel-primary product-type">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title pt-2" style="color:#00ae97"><b>AICTE Extension of
                                                Approval (EOA)
                                            </b></h3>
                                    </center>
                                    <span class="pull-right clickable"><i
                                            class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                </div>
                                <div class="panel-body">
                                    <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->

                                    <center>
                                        <div class="table-responsive p-3 pt-5">
                                            <!-- Add this wrapper -->
                                            <table id="example"
                                                class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                                style="width:100%">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="col" class=" justify-content-center">
                                                            <center>SR.NO</center>
                                                        </th>
                                                        <th scope="col" class="">
                                                            <center>Name</center>
                                                        </th>
                                                        <th scope="col">
                                                            <div class="d-flex justify-content-center">
                                                                Download File
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($data_output as $data)
                                                    <tr class="">
                                                        <td>
                                                            <center>{{ $loop->iteration }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $data->title }}</center>
                                                        </td>
                                                        <td>
                                                            <center>
                                                                <a href="{{ Config::get('DocumentConstant.AICTE_VIEW') }}{{ $data->file }}"
                                                                    target="_blank"
                                                                    class="btn btn-small bg-primary download-btn1 btn-icon-only icon-ok ">
                                                                    Download
                                                                </a>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    {{-- <h4>No Data Found</h4> --}}
                                                    @endforelse
                                                </tbody>
                                            </table>
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
    @endsection