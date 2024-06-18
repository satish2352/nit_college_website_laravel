@extends('website.layout.master')
@section('content')
<div class="container-fluid bg-#fff" id="iwtPageHeading">
    {{-- <div class="container">
            <div class="col-sm-12" style="padding:0;">
                <h4 style="color:green"><strong>Welcome To Humanities & Science Engineering Department </strong></h4>
            </div>
        </div> --}}
</div>
<div class="container-fluid" style="padding-bottom:20px">
    <div class="container card-shadow">

        <div class="row" style="padding:0px ">
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
               
                <div class="row outer-white">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
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
                                    <div class="item">

                                        <div class="container">
                                            <img src="{{ Config::get('DocumentConstant.ACHIEVEMENT_VIEW') }}{{ $data_output->fld_gallery_photo }}"
                                                class="img-responsive" width="400px; height:300px;"><br>

                                            <td>
                                                <div style="color: #545353;">{{ $data_output->imageTitle }}</div>
                                            </td>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endif
                                    <div>
                                        <h2></h2>
                                    </div>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                @include('website.pages.department.right-sidebar-department')
            </div>
        </div>

    </div>
</div><br><br><br><br>
@endsection