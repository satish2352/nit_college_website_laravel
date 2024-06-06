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
                <div class="col-md-12 col-sm-12 text-justify" id="iwtContentArea">
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
                                        @elseif ($data_output->isEmpty())
                                            <div>
                                                <p class="department-error">Data not available.</p>
                                            </div>
                                        @else
                                            @foreach ($data_output as $achievement)
                                                @if ($achievement->is_active == 1)
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8">
                                                            <div>
                                                                <h4 style="color:black">
                                                                    {{ $achievement->achievement_title }}</h4>
                                                            </div>
                                                            <div>
                                                                <p>{{ strip_tags($achievement->achievement_description) }}
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4">
                                                            <img id="english"
                                                                src="{{ Config::get('DocumentConstant.ACHIEVEMENT_VIEW') }}{{ $achievement->photo }}"
                                                                class="img-fluid img-thumbnail" height="300px"
                                                                width="400px">
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif

                                        {{-- @if (isset($error))
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @else
                                            @if (!$data_output)
                                                <div>
                                                    <p class="department-error">Data not available.</p>
                                                </div>
                                            @else
                                                @foreach ($data_output as $achievement)
                                                    @if ($achievement->is_active == 0)
                                                        <div>
                                                            <p class="department-error">Data not available.</p>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8">
                                                                <div>
                                                                    <h4 style="color:black">
                                                                        {{ $achievement->achievement_title }}</h4>
                                                                </div>
                                                                <div>
                                                                    <p>{{ strip_tags($achievement->achievement_description) }}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4">
                                                                <img id="english"
                                                                    src="{{ Config::get('DocumentConstant.ACHIEVEMENT_VIEW') }}{{ $achievement->photo }}"
                                                                    class="img-fluid img-thumbnail" height="300px"
                                                                    width="400px">
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif --}}

                                        {{-- @if (isset($error))
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
                                                            <h4 style="color:black">{{ $data_output->achievement_title }}</h4>
                                                        </div>
                                                        <div>
                                                            <p>{{ strip_tags($data_output->achievement_description) }}</p>
                                                        </div>
                                                        <img id="english"
                                                            src="{{ Config::get('DocumentConstant.ACHIEVEMENT_VIEW') }}{{ $data_output->photo }}"
                                                            class="img-fluid img-thumbnail" height="300px" width="700px">
                                                    @endif
                                                @endif
                                            @endif --}}
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

            </div>

        </div>
    </div><br><br><br><br>
@endsection
