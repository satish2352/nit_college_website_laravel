@extends('website.layout.master')
@section('content')
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
            margin-left: 20px;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                {{-- <h4 style="color:green"><strong>Civil Department Achievements And Awards</strong></h4>
        <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div> --}}
            </div>

        </div>
    </div>
   
    <div class="container card-shadow" style="margin-bottom: 95px;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
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
                                            class="img-responsive" width="800px; height:600px;"><br>

                                        <td>
                                            <center style="color: #545353;">{{ $data_output->imageTitle }}</center>
                                        </td>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endif
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 right-col-fix">
                <div>
                    <div class="list-group">
                        <div class="list-group-item">Humanities & Science</div>
                        @if (isset($data_output_category) && isset($data_output_category['id']))
                            <a href="{{ route('department-profile', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item ">PROFILE</a>
                            <a href="{{ route('department-vision-mission', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">Vision Mission</a>
                            {{-- <a href="{{ route('department-curriculum', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">CURRICULUM</a> --}}
                            {{-- <a href="{{ route('department-faculty', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">Faculty</a> --}}
                            {{-- <a href="{{ route('department-syllabus', ['id' => $data_output_category['id']]) }}"
            class="list-group-item active-rp-link">Syllabus</a> --}}

                            <a href="{{ route('department-time-table', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">Time Table</a>
                            <a href="{{ route('department-mentor', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">MENTOR</a>
                            <a href="{{ route('department-achievements-awards', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                            <a href="{{ route('department-activities-events', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                            <a href="{{ route('department-students-association', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                            <a href="{{ route('department-plan', ['id' => $data_output_category['id']]) }}"
                                class="list-group-item active-rp-link">Syllabus</a>
                        @else
                            <p> Data not available.</p>
                        @endif
                        <div class="list-group-item"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
