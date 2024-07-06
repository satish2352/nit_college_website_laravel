@extends('website.layout.master')
@section('content')

<style>
    .bottomline {
        width: 100%;
        color: black;

    }

    .leftspace {
        line-height: 30px;
    }

    /* .col-sm-12{
        width: 100%;
    } */
    .icon_box_style_7 {
        padding: 40px;
    }

    .icon_box_style_7 i {
        font-size: 50px;
    }

    .icon_box_style_10 {
        padding: 25px 15px;
    }

    .box_icon {
        position: relative;
        z-index: 1;
    }

    .box_icon i {
        font-size: 32px;
        position: relative;
        transition: all 0.5s ease-in-out;
    }





    overviewclg {
        padding-top: 8px;
        padding-left: 10px;
        position: absolute;
    }


    .paused {
        animation-play-state: paused;
    }

    .row>* {
        padding-right: 0px !important;
        /* padding-left: 0px !important; */
    }

    .rowleft>* {
        padding-left: 0px !important;
    }

    .col-height {
        min-height: 300px;
    }


    @media only screen and (max-width:769px) {
        .margin-right {
            margin-right: 25px !important;
        }

        .leftspace {
            margin-left: 10px;
        }

        .overviewclg {
            padding-top: 0px;
            padding-left: 0px;
            position: relative;
        }

    }
</style>


<div class="container-fluid" id="iwtBanner">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="right-col-fix" id="iwtRightPannel">
                <div class="list-group">
                    <div class="list-group-item"><b></b></div>
                    <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" target="_blank" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्यात</a>
                    <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">Governing
                        Body</a>
                    <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item">Mandatory Disclosure</a>
                    <a href="{{ route('department-faculty') }}" class="list-group-item ">Faculty</a>
                    <a href="{{ route('polytechnic-aicte-extension') }}" class="list-group-item">AICTE EOA</a>
                    <a href="{{ route('polytechnic-affiliation') }}" class="list-group-item">MSBTE Affiliation</a>
                    <a href="{{ route('polytechnic-affiliation_certificates') }}" class="list-group-item">Affiliation
                        Certificates</a>
                    {{-- <a href="pages/polytechnic-about-t&pcell-IOD.php" class="list-group-item">Training And Placement</a> --}}
                    <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item">Antiragging Committee</a>
                    {{-- <a href="#" class="list-group-item ">Grievance Redressal Cell </a> --}}
                    <a href="{{ route('polytechnic-internal-complaint') }}" class="list-group-item">Internal Complaint
                        Committee</a>
                    <a href="{{ route('polytechnic-about-scst') }}" class="list-group-item">SC/ST Cell</a>
                    <a href="{{ route('polytechnic-academic-calendar') }}" class="list-group-item ">Academic
                        Calender</a>
                    <a href="{{ route('aluminiregister') }}" class="list-group-item">Alumni Registration</a>
                    <a href="{{ route('list-events') }}"  class="list-group-item ">Events</a>
                    <div>
                        <h5 style="color:#fff; padding:15px 0px 0px 15px; font-size:16px;">Student Section</h5>
                        <a href="{{ route('list-student-section-download') }}" class="list-group-item ">Download</a>
                        <a href="{{ route('list-student-section-scholarship') }}" class="list-group-item ">Scholarship</a>
                    </div>
                    <a href="{{ route('list-fees-regulating-authority') }}" class="list-group-item ">Fees Regulatiion Authority </a>
                    <div>
                        <h5 style="color:#fff; padding:15px 0px 0px 15px; font-size:16px;">Plan</h5>
                        <a href="{{ route('list-expert-lecture') }}" class="list-group-item ">Expert Lecture</a>
                        <a href="{{ route('list-industrial-visit-mentor') }}" class="list-group-item ">Industrial Visit and Mentor Meeting</a>
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="col-md-9" style="margin-top: 18px;">

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($data_output as $index => $slider)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img style="" src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $slider['fld_slider_image'] }}" class="d-block w-100" alt="{{ $slider['fld_slider_title'] }}">
                    </div>
                    @endforeach
                </div>
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
            <div>
                <div style="margin-top:20px;">
                    <h2>
                        <span style="font-family: georgia,palatino; ">
                            <strong>
                                <span style="font-size: large; color: brown">
                                    <span style="border:4px solid   #015198;color:White;background-color:  #015198">Overview of Institute </span>
                                </span>
                            </strong>
                        </span>
                    </h2>
                    <p align="justify" style="margin-top:15px;">
                        <span style="font-family: georgia,palatino;">

                            <span style="font-size: 16px; color: black;display:flex;">
                                <h6 class="leftspace">Nashik Institute of Technology
                                    (NIT), Nashik. A versatile personality of the Nashik District. Having a vast experience
                                    in various fields including Education, Construction, Industrial, Banking & Social. <br>The institute offers Diploma courses including After 10th programs. These programs are offered in full-time mode. Candidate can pursue multiple ranges of courses like After 10th Diploma in the stream of Engineering. Over the period, NIT's Late Annasaheb Patil Polytechnic has gained expertise through its trained and experienced faculty in the fields of Automobile Engineering, Civil Engineering, Computer Science Engineering, Electrical Engineering, Mechanical Engineering. These courses offered by the institute are recognised by approving bodies like AICTE. NIT's Late Annasaheb Patil Polytechnic offers courses distributed over 300 seats in total. The institute provides good facilities all around the campus
                                    Etc.<a style="font-size:smaller;" class="overviewclg" href="{{ route('polytechnic-president') }}">Read More</a></h6>
                            </span>


                        </span>
                    </p>
                </div>
            </div>
            <span class="bottomline"></span>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div>
                <div>
                    <strong>
                        <center>
                            <h4><b><span style="border:4px solid   #015198;color:White;background-color:  #015198; font-family: georgia, palatino; font-size:20px;">Latest
                                        News</span></b></h4>
                        </center>
                    </strong>
                    <marquee direction="up" style="height:170px; margin-top:10px;" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start()">
                        <p style="font-family: 'Open Sans', sans-serif; font-size: 16pt; padding-left:25px; ">
                            <a href="pages/final web quotation advertisement .pdf">
                                <span style="color:black; font-size:13px">Golden Opportunity for 10th Pass Students, Date Extended for Diploma (Polytechnic) Admission up to 9th July 2024...</span>
                                <!-- <span style="background-color:  #015198;color:white;border-radius: 20%; border:1px solid   #015198; font-size:15px">Download</span> -->
                            </a>
                        </p>
                        <h1 style="border: 1px solid  black; width:auto; margin-left:25px;" class="margin-right"></h1>
                    </marquee>


                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div style="background-color: white;" class="col-height">
                        <div style="background-color:#d8d8d8;; height:55px !important; align-items: center; display: flex; justify-content: center; " align="justify">
                            <center>
                                <h4><b><span style="color:black; font-family: georgia, palatino; font-size:20px;margin:10px">VISION</span></b></h4>
                            </center>
                        </div>
                        <p align="justify">

                            <span style="font-size: 16px; color: black;">
                                <p style="margin-top:15px;padding-left: 10px; padding-right:10px" class="leftspace">Dedicated to promote the quality technical
                                    education through advanced teaching and learning process, high quality research and
                                    extension to serve the human society for sustainable development by developing
                                    community, the ability and passion to work wisely, creatively and effectively, for the
                                    betterment of Humankind</p>
                            </span>
                        </p>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div style="background-color: white;" class="col-height">

                        <div style="background-color:#d8d8d8;; height:55px !important; align-items: center; display: flex; justify-content: center; " align="justify">

                            <center>
                                <h4><b><span style="color:black; font-family: georgia, palatino; font-size:20px;margin:10px">MISSION</span></b></h4>
                            </center>
                        </div>
                        <p align="justify" style="margin-top:15px;padding-left: 10px; padding-right:10px">


                            <span style="font-size:16px; color: black;">
                                <p style="margin-top:15px;padding-left: 10px; padding-right:10px" class="leftspace">To give the quality technical
                                    education for empowerment of the common masses.</p>
                            </span>


                        </p>
                    </div>


                    <!-- <h1 style="border: 2px solid black; width:100%"> -->
                </div>
            </div>
        </div>
    </div>


    <div class="row rowleft mt-4">
        <div class="col-lg-4 col-md-4 col-sm-4 text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.1s" style="animation-delay:0.1s; opacity:1;">
            <div class="icon_box icon_box_style_7 bg-dark text-white h-100">
                <div class="box_icon mb-3">
                    <i class="fa fa-thumbs-up etline-icon icon-medium mb-2 mt-2"></i>
                </div>
                <div class="icon_box_content">
                    <h5>
                        Best Academics
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.1s" style="animation-delay:0.1s; opacity:1;">
            <div class="icon_box icon_box_style_7 bg-secondary text-white h-100 ">
                <div class="box_icon mb-3">
                    <i class="fa fa-chalkboard-teacher etline-icon icon-medium mb-2 mt-2 text-white"></i>
                </div>
                <div class="icon_box_content">
                    <h5>
                        Excellent Faculty
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.1s" style="animation-delay:0.1s; opacity:1;">
            <div class="icon_box icon_box_style_7 bg-primary text-white h-100">
                <div class="box_icon mb-3">
                    <i class="fa fa-hands-helping etline-icon icon-medium mb-2 mt-2"></i>
                </div>
                <div class="icon_box_content">
                    <h5>
                        Placement Assistance
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div style="background-color: white;" class="col-height">
                <div style="background-color:#ff8000;; height:55px !important; align-items: center; display: flex; justify-content: center; " align="justify">
                    <center>
                        <h4><b><span style="color:white; font-family: georgia, palatino; font-size:20px;margin:10px">Institute Notice</span></b></h4>
                    </center>
                </div>
                <p align="justify">

                    <span style="font-size: 16px; color: black;">
                        <p style="margin-top:15px;padding-left: 10px; padding-right:10px" class="leftspace">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sapiente libero hic eligendi temporibus? Atque, suscipit dolorem. Deserunt perferendis ratione error animi veniam facere, facilis eveniet quo similique, sed laborum!</p>
                    </span>
                </p>
            </div>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div style="background-color: white;" class="col-height">
                <div style="background-color:#ff8000;; height:55px !important; align-items: center; display: flex; justify-content: center; " align="justify">
                    <center>
                        <h4><b><span style="color:white; font-family: georgia, palatino; font-size:20px;margin:10px">MSBTE Notice</span></b></h4>
                    </center>
                </div>
                <p align="justify" style="margin-top:15px;padding-left: 10px; padding-right:10px">
                    <span style="font-size:16px; color: black;">
                        <p style="margin-top:15px;padding-left: 10px; padding-right:10px" class="leftspace">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat atque nemo accusantium assumenda soluta officia ratione vitae? Neque, assumenda. Voluptate facilis cupiditate aut architecto impedit fuga quas doloremque id maiores.</p>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class="container-fluit bg-white">
    <div>
        <h2 class="pt-5 pb-5 ms-5"><b>Academics</b></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 text-center text-black  pb-2 mt-2">
                <div class="icon_box icon_box_style_10" style="border: 1px solid black;">
                    <a href="#" class="text-black">
                        <div class="box_icon mb-3">
                            <i class="fa-solid fa-computer">
                            </i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Computer<br>
                                Engineering</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->






<style>
    .active-rp-link {
        background-color: #17a2b8;
        color: white;
    }
</style>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var marquee = document.querySelector('marquee');

        marquee.addEventListener('mouseenter', function() {
            marquee.classList.add('marquee-stopped');
        });

        marquee.addEventListener('mouseleave', function() {
            marquee.classList.remove('marquee-stopped');
        });
    });
</script>