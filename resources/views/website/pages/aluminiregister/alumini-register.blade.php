@extends('website.layout.master')
@section('content')
<style>
/* General styling for the form */
label {
    color: #454545;
}

input[type=text],
select,
textarea {
    width: 100%;
    padding: 7px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.containerid {
    border-radius: 5px;
    /* background-color: #f2f2f2; */
    padding: 20px;
    margin: 0 auto;
}

.form-container {
    max-width: 800px;
    margin: auto;
}

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

.margin-top-50 {
    margin-top: 50px;
}

.table-widthB {
    width: 48%;
}

.table-widthA {
    width: 49.8%;
}

.bg {
    background-color: white;
}

.tablescroll {
    overflow-y: auto;
    overflow-x: hidden;
    height: 189px;
    margin-right: 1px;
}

.marginTop30 {
    margin-top: 30px;
}

.radio,
.checkbox {
    margin-top: 0px;
    margin-bottom: 0px;
}

.checkbox,
.radio {
    margin-top: 0px;
    margin-bottom: 0px
}

.radio-margin {
    margin-left: -13px;
    margin-top: 7px;
}

.radio-margin {
    margin-left: -13px;
    margin-top: 7px;
}

.EU_DataTable td,
th {
    padding: 6px;
    border: 1px solid #ccc;
    text-align: left;
    height: 50px;
}

th {
    background: #e5e5e5;
    color: #454545;
    font-weight: bold;
    height: 40px;
}

/*Radio and Checkbox START*/
.checkbox label:after,
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.2em;
    height: 1.2em;
    /* float: left; */
    margin-right: .5em;
    left: 9px;
}

@media (max-width: 575.98px) {

    .checkbox .cr,
    .radio .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 0.9em;
        height: 0.9em;
        /* float: left; */
        margin-right: 1.5em;
        left: 20px;
    }
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"]+.cr>.cr-icon,
.radio label input[type="radio"]+.cr>.cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked+.cr>.cr-icon,
.radio label input[type="radio"]:checked+.cr>.cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled+.cr,
.radio label input[type="radio"]:disabled+.cr {
    opacity: .5;
}

/*Radio and Checkbox END*/
</style>
<script>
$('#carouselHacked').carousel();
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">

        <div class="col-sm-12" style="padding:0;">
            <center>
                <h2 style="color:green" class="pt-3">Alumni Register Here..</h2>
            </center>
        </div>
    </div>
</div>

<div class="container-fluid" style="background:#fff; padding-top:40px; padding-bottom:40px">
    <div class="container form-container">
        <div class="row" style="padding:0px">
            <div class="col-md-12 col-sm-12 text-justify" id="iwtContentArea">
                <div class="row outer-white"
                    style="box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); margin-bottom:100px;">
                    <div class="col-sm-12" style="padding: 0px;">
                        <div>
                            <div class="containerid">
                                <form method="post" enctype="multipart/form-data"
                                    action="{{ route('add-aluminiregister') }}">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="name">Name Of Student</label>
                                            <input type="text" id="name" name="name" placeholder="Your name..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="email">Email ID</label>
                                            <input type="text" id="email" name="email"
                                                placeholder="Your Email Address..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="enroll">Enrollment Number</label>
                                            <input type="text" id="enroll" name="enroll"
                                                placeholder="Your Enrollment Number..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="company">Current Working Company</label>
                                            <input type="text" id="company" name="company"
                                                placeholder="Your Current Working Company..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="location">Current Location</label>
                                            <input type="text" id="location" name="location"
                                                placeholder="Your Current Location..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="mobile">Contact Number</label>
                                            <input type="text" id="mobile" name="mobile"
                                                placeholder="Your Contact Number..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="passout_year">Passout Year</label>
                                            <input type="text" id="passout_year" name="passout_year"
                                                placeholder="Your Passout Year..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="department">Department Name</label>
                                            <input type="text" id="department" name="department"
                                                placeholder="Your Department Name..">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="message">Message</label>
                                            <input type="text" id="message" name="message" placeholder="Message..">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="creatediv1 marginTop30">
                            <div class="row margin-top-50">
                                <div class="col-md-12">
                                    <div class="panel panel-primary filterable">
                                        <div class="panel-heading">
                                            <div class="pull-right">
                                                <!-- Filter button if needed -->
                                            </div>
                                        </div>
                                        <div class="bg tablescroll">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr class="filters">
                                                        <th style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th style="width: 48%">
                                                            <center>Semister</center>
                                                        </th>
                                                        <th style="width: 48%">
                                                            <center>Result</center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">First Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="firstsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Second Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="secondsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Third Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="thirdsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Fourth Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="fourthsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Fifth Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="fifthsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Sixth Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="sixthsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection