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
                                    <span class="pull-right clickable"><i
                                            class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                </div>
                                <div class="panel-body">
                                    <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
                                    <center>
                                        <tbody>
                                            @forelse($data_output as $data)
                                            <td class="td-actions">
                                                <center>
                                                    <iframe
                                                        src="{{ Config::get('DocumentConstant.ACADEMICCALENDAR_VIEW') }}{{ $data->file }}"
                                                        width="100%" height="800px"></iframe>
                                                </center>
                                            </td>
                                            @empty
                                            <tr>
                                                <td colspan="2">No data found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
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


<script type="text/javascript">
function getsource(path) {

    var frame = document.getElementById('curriculamframe');

    frame.src = path;

}
</script>
@endsection