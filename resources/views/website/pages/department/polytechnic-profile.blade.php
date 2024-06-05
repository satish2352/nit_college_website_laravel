@extends('website.layout.master')
@section('content')
    <div class="container-fluid bg-pink" id="iwtPageHeading">
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
                        </div>
                        <div class="row outer-white">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            @if (isset($error))
                                                <div class="alert alert-danger">
                                                    {{ $error }}
                                                </div>
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
                                                        <div>
                                                            <h4 style="color:black">{{ $data_output->Department }}</h4>
                                                        </div>
                                                        <div>
                                                            <p>{{ strip_tags($data_output->department_description) }}</p>
                                                        </div>
                                                        <img id="english"
                                                            src="{{ Config::get('DocumentConstant.DEPARTMENT_VIEW_PROFILE') }}{{ $data_output->photo }}"
                                                            class="img-fluid img-thumbnail" height="300px" width="700px">
                                                    @endif
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
                        <div class="  col-sm-12 right-col-fix">
                            <div>
                                <div class="list-group">
                                    <div class="list-group-item">Humanities & Science</div>
                                    @if (isset($data_output) && isset($data_output['Department_id']))
                                    <a href="{{ route('department-profile', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item ">PROFILE</a>
                                    <a href="{{ route('department-vision-mission', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">Vision Mission</a>
                                    <a href="{{ route('department-curriculum', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">CURRICULUM</a>
                                    <a href="{{ route('department-faculty', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">Faculty</a>
                                    <a href="{{ route('department-syllabus', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">Syllabus</a>

                                    <a href="{{ route('department-time-table', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">Time Table</a>
                                    <a href="{{ route('department-mentor', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">MENTOR</a>
                                    <a href="{{ route('department-achievements-awards', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                                    <a href="{{ route('department-activities-events', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                                    <a href="{{ route('department-students-association', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                                    <a href="{{ route('department-plan', ['id' => $data_output['Department_id']]) }}"
                                        class="list-group-item active-rp-link">PLAN</a>
                                          @else
                <p class="department-error">Data not available.</p>
            @endif
                                    <div class="list-group-item"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
        </div>
    </div><br><br><br><br>
@endsection
