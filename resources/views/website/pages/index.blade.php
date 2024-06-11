@extends('website.layout.master')
@section('content')
    <div class="container-fluid" id="iwtBanner">
        <div class="row">
            <div class="col-md-4">
                <div class="right-col-fix" id="iwtRightPannel">
                    <div class="list-group">
                        <div class="list-group-item"><b>NIT POLYTECHNIC, NASHIK</b></div>
                        <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf"
                            class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्यात</a>
                        <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">GOVERNING BODY</a>
                        <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item">MANDATARY DISCLOSURE</a>
                        <a href="{{ route('polytechnic-aicte-extension') }}" class="list-group-item">AICTE EOA</a>
                        <a href="{{ route('polytechnic-affiliation') }}" class="list-group-item">MSBTE AFFILIATION</a>
                        <a href="{{ route('polytechnic-affiliation_certificates') }}" class="list-group-item">AFFILIATION CERTIFICATES</a>
                        <a href="pages/polytechnic-about-t&pcell-IOD.php" class="list-group-item">TRAINING AND PLACEMENT</a>
                        <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item">ANTIRAGGING COMMITTEE</a>
                        <a href="{{ route('polytechnic-internal-complaint') }}" class="list-group-item">INTERNAL COMPLAINT COMMITTEE</a>
                        <a href="{{ route('polytechnic-about-scst') }}" class="list-group-item">SC/ST CELL</a>
                        <div class="list-group-item"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach($data_output as $index => $slider)
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($data_output as $index => $slider)
                            <div  class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img style="height:300px;" src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $slider['fld_slider_image'] }}" class="d-block w-100" alt="{{ $slider['fld_slider_title'] }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $slider['fld_slider_title'] }}</h5>
                                    <p>{{ $slider['fld_slider_subtitle'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Other content -->
                <div class="p-3" role="alert" style="background-color:pink;;">
                    {{-- <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    <strong><i class="fa fa-warning"></i>
                        <center>
                            <h4><b><span style="border:4px solid #612625;color:White;background-color:#612625; font-family: georgia, palatino; font-size:20px;">Latest News</span></b></h4>
                        </center>
                    </strong>
                    <p style="font-family: Times New Roman; font-size: 12pt;">
                        <a href="pages/final web quotation advertisement .pdf">
                            <strong style="color:black">Procurement under AICTE Grant in Aid- SPDP-Skill and Personality Development Programme Centre for SC/ST Students 1-7107561391-2020-21.</strong>
                            <span style="background-color:blue;color:white;border:2px solid blue">Download</span>
                        </a>
                    </p>
                </div>

                <hr style="border: 1px solid black">

                <div style="margin-left:10px;">
                    <h2>
                        <span style="font-family: georgia,palatino;">
                            <strong>
                                <span style="font-size: large; color: brown;">
                                    <center><span style="border:4px solid #612625;color:White;background-color:#612625">VISION</span></center>
                                </span>
                            </strong>
                        </span>
                    </h2>
                    <p align="justify">
                        <span style="font-family: georgia,palatino;">
                            <strong>
                                <span style="font-size: small; color: black;margin-left:5px;">Dedicated to promote the quality technical education through advanced teaching and learning process, high quality research and extension to serve the human society for sustainable development by developing community, the ability and passion to work wisely, creatively and effectively, for the betterment of Humankind</span>
                            </strong>
                        </span>
                    </p>
                </div>

                <hr style="border: 1px solid black">

                <div style="margin-left:1px;background-color:pink">
                    <h2>
                        <span style="font-family: georgia,palatino;">
                            <strong>
                                <span style="font-size: large;margin-left:1px; color: brown">
                                    <center><span style="border:4px solid #612625;color:White;background-color:#612625">MISSION</span></center>
                                </span>
                            </strong>
                        </span>
                    </h2>
                    <p align="justify">
                        <span style="font-family: georgia,palatino;">
                            <strong>
                                <span style="font-size:small; color: black;margin-left:5px;">To give the quality technical education for empowerment of the common masses.</span>
                            </strong>
                        </span>
                    </p>
                </div>
                <hr style="border: 1px solid black">

                <div style="margin-left:1px;">
                    <h2>
                        <span style="font-family: georgia,palatino;">
                            <strong>
                                <span style="font-size: large; color: brown">
                                    <center><span style="border:4px solid #612625;color:White;background-color:#612625">About Nashik Institute of Technology (NIT)</span></center>
                                </span>
                            </strong>
                        </span>
                    </h2>
                    <p align="justify">
                        <span style="font-family: georgia,palatino;">
                            <strong>
                                <span style="font-size: small; color: black;margin-left:5px;">Nashik Institute of Technology (NIT), Nashik. A versatile personality of the Nashik District. Having a vast experience in various fields including Education, Construction, Industrial, Banking & Social Etc.</span>
                            </strong>
                        </span>
                    </p>
                </div>
                <hr style="border: 1px solid black">
            </div>
        </div>
    </div>

    <style>
        .active-rp-link {
            background-color: #17a2b8;
            color: white;
        }
    </style>
@endsection
