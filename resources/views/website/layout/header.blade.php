<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIT</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public/assets/visitors/hm/design/style.css') }}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .heading1 {
            font-size: 19px;
            line-height: 23px;
            font-family: 'Lato', sans-serif;
            text-transform: uppercase;
            color: #1b2834;
            font-weight: 900;
        }

        .navbar {
            --bs-navbar-padding-y: 0rem;
        }

        /* .nav-link:hover {
            background-color: #015198;
            color: #fff;
        } */
        .nav-link::before {
            /* background-color: #015198;
            color: #fff; */
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background-color: blue;
            /* Change color as per your need */
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            visibility: hidden;
            transition: 0.3s ease-in-out;
            color: black;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 80%;
            visibility: visible;

        }

        .mob-display {
            display: none;
        }

        .web-display {
            display: block;
            
        }

        .red-watch-bg {
            width: 100%;
            background-color: #015198;
            position: relative;
            height: 40px;
        }

        .nav-item a {
            font-weight: 600 !important;
        }

        li .dropdown-item {
            font-weight: normal !important;
        }

        .dropdown-menu {
            padding: 10px;

        }

        .abcd {
            width: 300px !important;
        }
        .spaceacademic{
            width: 245px !important;
        }

        .aaaa .aaab:hover{
            color: #fff !important;
            background-color: #015198;
            padding:  5px 3px;
        }

        .dropdown-menu li a {
            font-weight: normal !important;
            color: #1b2834;
            /* padding: 30px; */
        }

        .dropdown-menu ul li:hover {
            background-color: #015198;
            color: #fff;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #015198;
            color: #fff;
        }
        /* .dropdown-item:hover{
            color: white !important;
            background-color: #015198;
        } */

        li #footer-links {
            color: #00ae97;
            font-size: 13px;
            display: block;
            font-weight: 600 !important;
        }
        a:hover {
            color: #1b2834 !important;
        }
        a:hover:active {
            color: #1b2834 !important;
        }

        @media only screen and (max-width: 767px) {
            .main-header {
                font-size: 14px;
            }

            .heading1 {
                font-size: 11px;
                line-height: 20px;
                text-transform: uppercase;
                color: #1b2834;
                font-weight: 900;
            }

            .mob-width {
                width: 40px;
            }

            .img-fluid {
                width: 50px;
                /* Adjust width for smaller screens */
            }

            .mob-display {
                display: block;
            }

            .web-display {
                display: none;
            }

            .navbar-toggler {
                position: absolute;
                top: 10px;
                right: 10px;
            }

            .navbar-collapse {
                position: fixed;
                top: 0;
                left: -100%;
                width: 75%;
                height: 100%;
                background: white;
                z-index: 999;
                transition: left 0.3s;
                padding-top: 1rem;
            }

            .navbar-collapse.show {
                left: 0;
            }

            .mob-toggle-right-side {
                display: flex;
                align-items: center !important;
            }

            .mob-width-left {
                width: 80%;
            }

            .mob-width-right {
                width: 20%;
            }

            #iwtHeaderNav {
                border-bottom: none;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            body {
                font-size: 16px;
            }

            .main-header {
                text-align: center;
                /* Center align for better visibility */
            }
        }

        .AICTE {
            margin-left: -48px !important;
        }
    </style>
</head>

<body>
    <script>
        $(document).ready(function() {

            // For the Second level Dropdown menu, highlight the parent	
            $(".dropdown-menu")
                .mouseenter(function() {
                    $(this).parent("li").addClass("active");
                });
            $(".dropdown-menu")
                .mouseleave(function() {
                    $(this).parent("li").removeClass("active");
                });

        });
        $(document).on("show", ".accordion", function(e) {
            //$(".accordion-heading i").toggleClass(" ");
            $(e.target).prev(".accordion-heading").addClass("accordion-opened");
        });

        $(document).on("hide", ".accordion", function(e) {
            $(this).find(".accordion-heading").not($(e.target)).removeClass("accordion-opened");
            //$(".accordion-heading i").toggleClass("fa-chevron-right fa-chevron-down");
        });
    </script>
    {{-- ======================Start Top Header==================== --}}
    <div class="container-fluid px-3" id="iwtHeaderTopNav">
        <div class="container px-0">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5"><a href="{{ route('/') }}">Institute Address : Cannol
                        Road,Behind Hydro-division(MERI),Nashik-422005</a></div>
                <div class="col-lg-7 col-md-7 col-sm-7 text-right">
                    <span style="font-size:13px !important;">Email :</span> <a href="mailto:info@nitnasik.com">info@nitnasik.com</a> |
                    <span style="font-size:13px !important;">Contact Number : </span>
                    <a href="tel:9552551056">9552551056</a>&nbsp;
                    <a href="tel:8149822404">8149822404</a>&nbsp;
                    <a href="tel:9890269439">9890269439</a>&nbsp;
                </div>
            </div>
        </div>
    </div>
    {{-- =========================End Top Header======================== --}}
    {{-- ======================Start Sub Header==================== --}}
    <div class="mob-toggle-right-side">
        <div class="container-fluid pt-2 pb-1 mob-width-left" id="iwtHeaderNav">
            <div class="container main-header">
                <div class="row align-items-center d-flex justify-content-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-3">
                        <a href="/"><img src="{{ asset('public/assets/Akole_Poly/logo.gif.jpg') }}" class="img-fluid mob-width" alt="Logo"></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-9 text-center ">
                        <h3 class="heading1 d-flex justify-content-start">NASHIK INSTITUTE OF TECHNOLOGY (NIT'S)</h3>
                        <h2 class="heading1 d-flex justify-content-start">LATE ANNASAHEB PATIL POLYTECHNIC</h2>
                        <span class="d-lg-block d-none d-flex justify-content-center AICTE ">
                            {{-- <marquee> --}}
                            Affiliated to MSBTE Mumbai, Approved By Govt. of Maharashtra AICTE
                            {{-- </marquee> --}}


                        </span>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-3 text-center displsy-flex web-display mob-display">
                        <img src="{{ asset('public/assets/Akole_Poly/TWOWIN2p_400x400.jpg') }}" alt="Avatar" class="img-fluid rounded-circle" style="width:100px;">
                        <p style="font-size:12px;color:red;"><b>Shri.&nbsp;Suresh&nbsp;Patil</b></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center displsy-flex web-display mob-display">
                        <button class="btn btn-danger">
                            <a href="{{ route('enquiry') }}" style="color:white; text-decoration:none;">Admission Enquiry</a>
                        </button>
                        <!-- <b><a href="{{ route('enquiry') }}" style="color:red">Click Here For <br>Admission Enquiry <br>2024-25</a></b> -->
                    </div>
                </div>
            </div>
        </div>
        {{-- ======================End Sub Header==================== --}}
        <div class="container-fluid mob-width-right" id="iwtHeaderNav">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            {{-- <a class="navbar-brand" href="#">Brand</a> --}}
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link" href="{{ route('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            About Us
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                                            <li class="aaaa"><a class="dropdown-item aaab " href="{{ route('polytechnic-president') }}">President
                                                    Desk</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab " href="{{ route('polytechnic-principals') }}">Principal
                                                    Desk</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab" href="{{ route('mission-and-vision') }}">Mission &
                                                    Vision</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab" href="{{ route('about-governingbody') }}">Governing
                                                    Body</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab" href="{{ route('about-futureplans') }}">Future
                                                    Plans</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="ActivitiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Activities
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="ActivitiesDropdown">
                                            @foreach ($menu as $menuItem)
                                            <li class="aaaa">
                                                <a class="aaab" href="{{ route('polytechnic-co-curricular', ['id' => $menuItem['id']]) }}">{{ $menuItem['activities'] }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" id="DepartmentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Department
                                        </a>
                                        <ul class="dropdown-menu abcd" aria-labelledby="DepartmentDropdown">
                                            @foreach ($menuDepartment as $menuItemDepartment)
                                            <?php

                                            ?>
                                            <li class=" aaaa">
                                                <a class="aaab" href="{{ route('department-profile', ['id' => $menuItemDepartment['id']]) }}">{{ $menuItemDepartment['Department'] }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('achievement') }}">Achievements</a></li>
                                    <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="FacilitiesDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Facilities
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="FacilitiesDropdown">

                                    @foreach ($menuFacility as $menuFacility)
                                        <li class="">
                                            <a
                                                href="{{ route('polytechnic-facilities', ['id' => $menuFacility['facility_id']]) }}">{{ $menuFacility['facility'] }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                </li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" href="#" id="AcademicsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu spaceacademic" aria-labelledby="AcademicsDropdown">
                                        <li class="nav-item aaaa"><a class=" aaab" href="{{ route('polytechnic-rules') }}">Admission Rules And
                                                Process</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="AlumniDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Alumni
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="AlumniDropdown">
                                        <li class="nav-item aaaa"><a class=" aaab" href="{{ route('aluminiregister') }}">Alumni
                                                Registration</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown"><a class="nav-link" href="{{ route('polytechnic-gallery') }}">Gallery</a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="QuickLinksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Quick Links
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="QuickLinksDropdown">
                                        <li class="aaaa"><a class="aaab" href="https://msbte.org.in/" target="_blank">msbte.org</a></li>
                                        <li class="aaaa"><a class="aaab" href="https://www.aicte-india.org/" target="_blank">aicte-india.org</a></li>
                                        <li class="aaaa"><a class="aaab" href="http://www.dtemaharashtra.gov.in/index.html" target="_blank">dtemaharashtra.gov.in</a></li>
                                        <li class="aaaa"><a class="aaab" href="https://scholarships.gov.in/" target="_blank">scholarships.gov.in</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>


            </div>
        </div><!--/container-->
    </div>
    <div class="mob-display">
        <p class="px-2">
            {{-- <marquee> --}}
            {{-- <b>Approved By</b> :
                <b>Govt. of Maharashtra & All India Council of Technical Education (AICTE)</b>&nbsp;&nbsp;&nbsp;<b>Affiliated To</b> :
                <b>Maharashtra State Board Of Technical Education (MSBTE), Mumbai</b> --}}
            {{-- </marquee> --}}
            <span class="d-sm-block d-none d-flex justify-content-center">

            </span>
            <br>
            <span>
                <span class="d-flex justify-content-center">
                    Affiliated to MSBTE Mumbai, Approved By Govt. of Maharashtra AICTE</span> <br>
                <b> <a href="{{ route('enquiry') }}" style="color:red">Click Here For Admission Enquiry 2024-25</a></b></span>
        </p>
    </div>
    </div><!--/container-fluid /iwtHeaderNav--><!--======================= iwtBanner =======================-->


    <div class="container-fluid red-watch-bg" id="">
        <div class="fl news-img"><img src="{{ asset('public/assets/visitors/hm/design/images/alarm-icon.png') }}" border="0" height="40px"></div>

        <div class="fl news-text">
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
