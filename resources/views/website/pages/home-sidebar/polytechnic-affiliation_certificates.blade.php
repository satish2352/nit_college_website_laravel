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
                        <div class="col-lg-9 col-md-9 col-sm-9" style=" width:100%">
                            <div class="panel panel-primary product-type">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title pt-3 pb-1" style="color:#00ae97;"><b>AFFILIATION CERTIFICATES </b>
                                        </h3>
                                    </center>
                                    <span class="pull-right clickable"><i
                                            class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                </div>
                                <div class="panel-body">
                                    <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->

                                    <center>
                                        <div class="table-responsive p-3">
                                            @if (isset($error))
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                            @else
                                            @if ($data_output->isEmpty())
                                            <div>
                                                <p class="department-error"
                                                    style="display: flex; justify-content: center; align-items: center;">
                                                    Data not available.</p>
                                            </div>
                                            @else
                                            @foreach ($data_output as $data)
                                            @if ($data->is_active == 0)
                                            <div>
                                                <p class="department-error">Data not available.</p>
                                            </div>
                                            @else
                                            <div>
                                                <img id="english"
                                                    src="{{ Config::get('DocumentConstant.AFFILIATION_CERTIFICATES_VIEW') }}{{ $data->fld_affiliation_image }}"
                                                    class="img-fluid img-thumbnail" height="300px" width="700px">
                                            </div>
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
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