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

/* Just for demo purpose */
html,
body,
.carousel,
.carousel-inner,
.carousel-inner .item {
    height: 90%;
}

.margin-top-50 {
    margin-top: 50px;
}

/* Filter START */
.filterable {
    margin-top: 15px;
}

.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
</style>

<div class="container-fluid">
    <div class="container card-shadow" style="margin-bottom: 145px;">
        <div class="row" style="padding:0px;">
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            @if (isset($data_output_category) && isset($data_output_category['id']))
                            <div style="color:#00ae97;font-size:20px;">
                                <strong>{{ $data_output_category->Department }}</strong>
                            </div>
                            @endif
                        </div>

                        @if (isset($error))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                        @elseif (!$data_output || $data_output->is_active == 0)
                        <div>
                            <p class="department-error">Data not available</p>
                        </div>
                        @else
                        <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="carousel-caption">
                                        <img src="{{ Config::get('DocumentConstant.EVENTS_VIEW') }}{{ $data_output->fld_gallery_photo }}" class="img-responsive"><br>
                                        <center>{{ $data_output->imageTitle }}</center>
                                    </div>
                                </div>
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
                        @endif

                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

                        <div>
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

            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                @include('website.pages.department.right-sidebar-department')
            </div>
        </div>
    </div>
</div>
@endsection
