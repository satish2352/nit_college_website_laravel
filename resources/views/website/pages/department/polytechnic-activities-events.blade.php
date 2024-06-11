@extends('website.layout.master')
@section('content')
    <style>
        .carousel-fade .carousel-inner .item {
            opacity: 0;
            transition-property: opacity;
        }

        .carousel-fade .carousel-inner .active {
            opacity: 1;
        }

        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            opacity: 0;
            z-index: 1;
        }

        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }

        .carousel-fade .carousel-control {
            z-index: 2;
        }

        @media all and (transform-3d),
        (-webkit-transform-3d) {

            .carousel-fade .carousel-inner>.item.next,
            .carousel-fade .carousel-inner>.item.active.right {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            .carousel-fade .carousel-inner>.item.prev,
            .carousel-fade .carousel-inner>.item.active.left {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            .carousel-fade .carousel-inner>.item.next.left,
            .carousel-fade .carousel-inner>.item.prev.right,
            .carousel-fade .carousel-inner>.item.active {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        /* just for demo purpose */
        html,
        body,
        .carousel,
        .carousel-inner,
        .carousel-inner .item {
            height: 90%;

        }

        /* .item:nth-child(1) {
            background: blue;
        }

        .item:nth-child(2) {
            background: red;
        }

        .item:nth-child(3) {
            background: orange;
        } */

        .margin-top-50 {
            margin-top: 50px;
        }

        /*Filter START*/
        .filterable {
            margin-top: 15px;
        }

        .filterable .panel-heading .pull-right {
            margin-top: -20px;
        }



        /*Radio and Checkbox END*/
    </style>

    <div class="container-fluid">
        <div class="container card-shadow" style="margin-bottom: 145px;">
            <div class="row" style="padding:0px;">
                <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                @if (isset($data_output_category) && isset($data_output_category['id']))
                                    <div class="" style="color:#00ae97; padding:20px 0px;">
                                        {{ $data_output_category->Department }}</div>
                                @else
                                @endif
                            </div>
                            <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        {{-- <div class="carousel-caption">
                                            <img src="../images/events/Industrial Visits_1.jpg" alt=""
                                                class="img-responsive">
                                        </div> --}}
                                    </div>
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
                                                <div class="item">

                                                    <div class="carousel-caption">


                                                        <img src="{{ Config::get('DocumentConstant.EVENTS_VIEW') }}{{ $data_output->fld_gallery_photo }}"
                                                            class="img-responsive"><br>
                                                        <td>
                                                            <center>{{ $data_output->imageTitle }}</center>
                                                        </td>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endif

                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <!-- Include all compiled plugins (below), or include individual files as needed -->
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                            <div>
                                <p><span style="font-family: georgia,palatino;"><strong><span
                                                style="font-size: large; color: #ff6600;">



                                                <script>
                                                    var slideIndex = 1;
                                                    showSlides(slideIndex);

                                                    function plusSlides(n) {
                                                        showSlides(slideIndex += n);
                                                    }

                                                    function currentSlide(n) {
                                                        showSlides(slideIndex = n);
                                                    }

                                                    function showSlides(n) {
                                                        var i;
                                                        var slides = document.getElementsByClassName("mySlides");
                                                        var dots = document.getElementsByClassName("demo");
                                                        var captionText = document.getElementById("caption");
                                                        if (n > slides.length) {
                                                            slideIndex = 1
                                                        }
                                                        if (n < 1) {
                                                            slideIndex = slides.length
                                                        }
                                                        for (i = 0; i < slides.length; i++) {
                                                            slides[i].style.display = "none";
                                                        }
                                                        for (i = 0; i < dots.length; i++) {
                                                            dots[i].className = dots[i].className.replace(" active", "");
                                                        }
                                                        slides[slideIndex - 1].style.display = "block";
                                                        dots[slideIndex - 1].className += " active";
                                                        captionText.innerHTML = dots[slideIndex - 1].alt;
                                                    }
                                                </script>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                <div class="col-md-1 hidden-sm">&nbsp;</div>
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">

                    <div class="col-sm-12 right-col-fix">
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
        </div>
    </div>
@endsection
