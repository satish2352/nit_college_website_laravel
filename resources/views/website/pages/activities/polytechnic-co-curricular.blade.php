@extends('website.layout.master')
@section('content')
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div >
<!-- 
            <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
            </div> -->

        </div>
    </div>
    <div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px;">
        <div >
            <div class="row" style="padding:0px">
            <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                @include('website.pages.home-sidebar.right-sidebar-home')
            </div>
                <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row card-shadow">
                        <div class="col-sm-12">
                            @if (isset($error))
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                            @else
                                @if (!$data_output)
                                        <div>
                                            <p class="department-error" style="display: flex;justify-content: center;align-items: center;">Data not available.</p>
                                        </div>
                                @else
                                    @if ($data_output->is_active == 0)
                                            <div>
                                                <p class="department-error">Data not available.</p>
                                            </div>
                                    @else
                                        <div>
                                            <h2 style="color:#00ae97">{{ $data_output->activities }}</h2>
                                        </div>
                                        <div>
                                            <p>{{ $data_output->activity_description }}</p>
                                        </div>
                                        <div>
                                            <img id="english"
                                                src="{{ Config::get('DocumentConstant.ACTIVITY_VIEW') }}{{ $data_output->photo }}"
                                                class="img-fluid img-thumbnail" height="300px" width="400px">
                                        </div>
                                    @endif
                                @endif
                            @endif
                        </div>
                        

                <!-- /.row -->
               
            </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <h2></h2>
                        </div>
                        <div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <P><br>
                        </p>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="col-md-1 hidden-sm">&nbsp;</div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
            </div>
        </div>
    </div>
</div>
@endsection
