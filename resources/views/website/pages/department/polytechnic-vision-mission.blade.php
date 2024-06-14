@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
</div>
<div class="container-fluid" style="padding-bottom:40px">
    <div class="container card-shadow" style="margin-bottom: 95px;">
        <div class="row" style="padding:0px">
            <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            @if(isset($data_output_category) && isset($data_output_category['id']))                    
                            <div class="" style="color:#00ae97;" 
                                >{{$data_output_category->Department}}</div>
                                @else
                                @endif
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <div>
                                @if (isset($error))
                                            <div>
                                                {{ $error }}
                                            </div>
                                        @else
                                            @if ($data_output->isEmpty())
                                                <div>
                                                     <p class="department-error">Data not available.</p>
                                                </div>
                                            @else
                                                @foreach ($data_output as $data_output)
                                                    @if ($data_output->is_active == 0)
                                                        <div>
                                                             <p class="department-error">Data not available.</p>
                                                        </div>
                                                    @else
                                <h4><strong>VISION :</strong></h4>
                                <p >{{ $data_output->department_vision }}</p>
                            </div>
                            <div>
                                <h4><strong>MISSION :</strong></h4>
                                <p>{{ $data_output->department_mission }}</p>
                            </div>
                            @endif
                            @endforeach
                        @endif
                    @endif
                        </div>
                    </div>
                </div>
            </div><!-- /.row </div>-->
            <div class="col-md-1 hidden-sm">&nbsp;</div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                @include('website.pages.department.right-sidebar-department')
            </div>  
        </div>
    </div>
</div>
@endsection