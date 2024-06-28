@extends('website.layout.master')
@section('content')

<style>
    .bottomline {
        width: 100%;
        color: black;

    }

    .paused {
        animation-play-state: paused;
    }
    .col-height{
        min-height: 300px;
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
                        <a  href="{{ route('aluminiregister') }}"  class="list-group-item">Alumni Registration</a> 

                </div>
            </div>
        </div>


        <div class="col-md-9" style="margin-top: 18px;">
        <marquee style="background-color: white; padding-top:5px;">
                    <h5 style="color: black;"><b>NASHIK INSTITUTE OF TECHNOLOGY (NIT'S)
                        LATE ANNASAHEB PATIL POLYTECHNIC</b></h5>
                </marquee> 
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($data_output as $index => $slider)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" >
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

                            <span style="font-size: 16px; color: black;display:flex;"><h6>Nashik Institute of Technology
                                    (NIT), Nashik. A versatile personality of the Nashik District. Having a vast experience
                                    in various fields including Education, Construction, Industrial, Banking & Social
                                    Etc.<a style="font-size:smaller;padding-top:8px; padding-left:10px; position:absolute;" href="{{ route('polytechnic-president') }}">Read More</a></h6></span>
                            

                        </span>
                    </p>
                </div>
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
                    <marquee direction="up" style="height:170px;" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start()">

                        <p style="font-family: Times New Roman; font-size: 16pt; padding-left:25px;">
                            <a href="pages/final web quotation advertisement .pdf">
                                <span style="color:black; font-size:13px"> Procurement under AICTE Grant in Aid- SPDP-Skill and Personality Development Programme Centre for SC/ST Students 1-7107561391-2020-21.</span>
                                <!-- <span style="background-color:  #015198;color:white;border-radius: 20%; border:1px solid   #015198; font-size:15px">Download</span> -->
                            </a>
                            
                        </p>
                        <h1 style="border: 1px dotted  black; width:100%; margin-left:25px"></h1>
                        
                        <p style="font-family: Times New Roman; font-size: 16pt; padding-left:25px;">
                            <a href="pages/final web quotation advertisement .pdf">
                                <span style="color:black; font-size:13px">"Golden Opportunity for 10th Pass Students, Date Extended for Diploma (Polytechnic) Admission up to 9th July 2024.."</span>
                                <!-- <span style="background-color:  #015198;color:white;border-radius: 20%; border:1px solid   #015198; font-size:15px">Download</span> -->
                            </a>
                            
                        </p>
                        <h1 style="border: 1px dotted  black; width:100%; margin-left:25px"></h1>

                        
                    </marquee>


                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9">
            <div class="row" >
                <div class="col-lg-6 col-md-6" >
                    <div style="background-color: white;" class="col-height">
                    <div style="background-color:#d8d8d8;; height:55px !important; align-items: center; display: flex; justify-content: center; " align="justify">
                        <center>
                            <h4><b><span style="color:black; font-family: georgia, palatino; font-size:20px;margin:10px">VISION</span></b></h4>
                        </center>
                    </div>
                    <p align="justify" >

                            <span style="font-size: 16px; color: black;" ><p style="margin-top:15px;padding-left: 10px; padding-right:10px">Dedicated to promote the quality technical
                                    education through advanced teaching and learning process, high quality research and
                                    extension to serve the human society for sustainable development by developing
                                    community, the ability and passion to work wisely, creatively and effectively, for the
                                    betterment of Humankind</p>
                                </span>
                    </p>
                    </div>
                    
                </div>

                <div class="col-lg-6 col-md-6">

                <div style="background-color: white;" class="col-height">

                    <div style="background-color:#d8d8d8;; height:55px !important; align-items: center; display: flex; justify-content: center; " align="justify">

                        <center>
                            <h4><b><span style="color:black; font-family: georgia, palatino; font-size:20px;margin:10px">MISSION</span></b></h4>
                        </center>
                    </div>
                    <p align="justify" style="margin-top:15px;padding-left: 10px; padding-right:10px">
                        

                            <span style="font-size:16px; color: black;"><p style="margin-top:15px;padding-left: 10px; padding-right:10px">To give the quality technical
                                    education for empowerment of the common masses.</p></span>

                     
                    </p>
                    </div>


                    <!-- <h1 style="border: 2px solid black; width:100%"> -->
                </div>
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