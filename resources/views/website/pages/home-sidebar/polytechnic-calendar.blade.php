@extends('website.layout.master')
@section('content')

<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>
        <div class="panel_content">
            <div >
                <div class="row">
                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                        @include('website.pages.home-sidebar.right-sidebar-home')
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="panel panel-primary product-type">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title" style="color:blue"><b>Academic Calendar</b></h3>
                                    </center>
                                    <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-plus-sign collapse-ico"></i>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        @forelse($data_output as $data)
                                            <iframe src="{{ url(Config::get('DocumentConstant.ACADEMICCALENDAR_VIEW')  $data->file) }}" width="100%" height="800px"></iframe>
                                        @empty
                                            <p>No data found</p>
                                        @endforelse
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

{{-- <script type="text/javascript">
function getsource(path) {
    var frame = document.getElementById('curriculamframe');
    frame.src = path;
}
</script> --}}
@endsection
