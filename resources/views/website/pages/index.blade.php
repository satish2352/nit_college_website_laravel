@extends('website.layout.master')
@section('content')

<style>
    .bottomline {
        width: 100%;
        color: black;

    }
</style>


<div class="container-fluid" id="iwtBanner">
    <div class="row">
        <div class="col-md-3">
            <div class="right-col-fix" id="iwtRightPannel">
                <div class="list-group">
                    <div class="list-group-item"><b></b></div>
                    <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्यात</a>
                    <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">Governing
                        Body</a>
                    <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item">Mandatory Disclosure</a>
                    <a href="{{ route('polytechnic-aicte-extension') }}" class="list-group-item">AICTE EOA</a>
                    <a href="{{ route('polytechnic-affiliation') }}" class="list-group-item">MSBTE Affiliation</a>
                    <a href="{{ route('polytechnic-affiliation_certificates') }}" class="list-group-item">Affiliation
                        Certificates</a>
                    <a href="pages/polytechnic-about-t&pcell-IOD.php" class="list-group-item">Training And Placement</a>
                    <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item">Antiragging Committee</a>
                    <a href="{{ route('polytechnic-internal-complaint') }}" class="list-group-item">Internal Complaint
                        Committee</a>
                    <a href="{{ route('polytechnic-about-scst') }}" class="list-group-item">SC/ST Cell</a>
                    <a href="{{ route('polytechnic-academic-calendar') }}" class="list-group-item ">Academic
                        Calender</a>

                </div>
            </div>
        </div>

        <div class="col-md-9" style="margin-top: 18px;">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel                                                                                                                                                                          ">
                <!-- Indicators -->
                <!-- <div class="carousel-indicators">
                        @foreach($data_output as $index => $slider)
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div> -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($data_output as $index => $slider)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img style="" src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $slider['fld_slider_image'] }}" class="d-block w-100" alt="{{ $slider['fld_slider_title'] }}">
                        <!-- {{-- <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $slider['fld_slider_title'] }}</h5>
                                    <p>{{ $slider['fld_slider_subtitle'] }}</p>
                                </div> --}} -->
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
                <marquee style="background-color: white; padding-top:5px;">
                    <h5 style="color: black;">NASHIK INSTITUTE OF TECHNOLOGY (NIT'S)
                        LATE ANNASAHEB PATIL POLYTECHNIC</h5>
                </marquee>
            </div>
            <!-- Other content -->
            <div>

                <div style="margin-left:1px; margin-top:15px">
                    <h2>
                        <span style="font-family: georgia,palatino; ">
                            <strong>
                                <span style="font-size: large;margin-left:1px; color: brown">
                                    <span style="border:4px solid   #015198; color:White;background-color:  #015198;">MISSION</span>

                                </span>
                            </strong>
                        </span>
                    </h2>
                    <p align="justify" style="margin-top:15px;">
                        <span style="font-family: georgia,palatino; ">

                            <span style="font-size:16px; color: brown;"><i>To give the quality technical
                                    education for empowerment of the common masses.</i></span>

                        </span>
                    </p>
                    
                </div>
                <h1 style="border: 2px solid black; width:100%">

            </div>
            <span class="bottomline"></span>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-3 col-md-3">
            <div>
                <div>
                    <strong>
                        <center>
                            <h4><b><span style="border:4px solid   #015198;color:White;background-color:  #015198; font-family: georgia, palatino; font-size:20px;">Latest
                                        News</span></b></h4>
                        </center>
                    </strong>
                    <marquee direction=up style="height:170px;">

                        <p style="font-family: Times New Roman; font-size: 16pt; padding-left:25px;">
                            <a href="pages/final web quotation advertisement .pdf">
                                <h style="color:brown; font-size:15px"> Procurement under AICTE Grant in Aid- SPDP-Skill and Personality
                                    Development Programme Centre for SC/ST Students 1-7107561391-2020-21.
                                </h>
                                <span style="background-color:  #015198;color:white;border-radius: 20%; border:1px solid   #015198; font-size:15px">Download</span>
                            </a>

                        </p>
                    </marquee>
                </div>
            </div>
        </div>
        <hr style="border: 5px solid black">
        <div class="col-lg-9 col-md-9">

            <div>
                <h2>
                    <span style="font-family: georgia,palatino;">
                        <strong>
                            <span style="font-size: large; color: brown;">
                                <span style="border:4px solid   #015198;color:White;background-color:  #015198">VISION</span>

                            </span>
                        </strong>
                    </span>
                </h2>
                <p align="justify" style="margin-top:15px;">
                    <span style="font-family: georgia,palatino; ;">

                        <span style="font-size: 16px; color: brown;"><i>Dedicated to promote the quality technical
                                education through advanced teaching and learning process, high quality research and
                                extension to serve the human society for sustainable development by developing
                                community, the ability and passion to work wisely, creatively and effectively, for the
                                betterment of Humankind</i></span>

                    </span>
                </p>
                <h1 style="border: 2px solid black; width:100%">
            </div>



          
            <div style="margin-top:20px;">
                <h2>
                    <span style="font-family: georgia,palatino; ">
                        <strong>
                            <span style="font-size: large; color: brown">
                                <span style="border:4px solid   #015198;color:White;background-color:  #015198">About
                                    Nashik Institute of Technology (NIT)</span>
                            </span>
                        </strong>
                    </span>
                </h2>
                <p align="justify" style="margin-top:15px;">
                    <span style="font-family: georgia,palatino;">

                        <span style="font-size: 16px; color: brown;"><i>Nashik Institute of Technology
                                (NIT), Nashik. A versatile personality of the Nashik District. Having a vast experience
                                in various fields including Education, Construction, Industrial, Banking & Social
                                Etc.</i></span>

                    </span>
                </p>
            </div>
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