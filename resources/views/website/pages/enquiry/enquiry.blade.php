@extends('website.layout.master')
@section('content')
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                <center>
                    <h4 style="color:green"><strong>Enquiry</strong></h4>
                </center>
                <div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.php" alt=""
                        class="img-responsive"></div>
            </div>

        </div>
    </div>
    <div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form method="post" enctype="multipart/form-data" action="{{ route('add-contact-us') }}">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">
                                            Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                                            placeholder="Enter Mobile Number" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email"
                                                name="email" placeholder="Enter email" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="admission_level">Admission Level <i class="required">*</i></label>
                                        <select class="form-control chosen chosen-select" name="admission_level"
                                            id="admission_level" tabi-ndex="5" placeholder="Select admission level">
                                            <option value="">select</option>
                                            <option value="1">FY</option>
                                            <option value="2">DSY</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="source">Source</label>
                                        <select class="form-control" id="source" name="source"
                                            required="required">
                                            <option value="">select source</option>
                                            <option value="Directly Institute Visit">Directly Institute Visit</option>
                                            <option value="website">Website</option>
                                            <option value="radio/newspaper">Radio/Newspaper</option>
                                            <option value="staff">Staff</option>
                                            <option value="student">Student</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="source">
                                            Source Name</label>
                                        <input type="text" class="form-control" id="source_name" name="source_name"
                                            placeholder="Enter source name" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea id="message" name="fld_contact_message" class="form-control" rows="9" cols="25"
                                            required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right"
                                        id="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-4">
{{-- 
                    <form>
                        <legend><span class="glyphicon glyphicon-globe">&nbsp;</span>Our Office</legend>
                        <address>
                            <strong style="color:green">{{ $contactusdata[0]['contact_us_name'] }} </strong>
                        </address>
                        <address>
                            <span class="glyphicon glyphicon-home"></span>&nbsp;<strong><strong
                                    style="color:green">Address</strong> <strong>:</strong>&nbsp;
                                {{ $contactusdata[0]['contact_us_address'] }}</strong><br>
                        </address>
                        <address>
                            <span class="glyphicon glyphicon-phone"></span>&nbsp;<strong><strong
                                    style="color:green">Tel.</strong> <strong>:</strong>&nbsp;
                                {{ $contactusdata[0]['contact_us_telephone'] }}</strong><br>
                        </address>
                        <address>
                            <span class="glyphicon glyphicon-phone"></span>&nbsp;<strong><strong
                                    style="color:green">Mobile.</strong> <strong>:</strong>&nbsp;
                                {{ $contactusdata[0]['contact_us_mobile'] }}</strong><br>
                        </address>
                        <address>
                            <span class="glyphicon glyphicon-globe"></span>&nbsp;<strong style="color:green">
                                Website:</strong>&nbsp; {{ $contactusdata[0]['contact_us_website'] }}<br>
                        </address>
                        <address>
                            <span class="glyphicon glyphicon-envelope"></span>&nbsp;<strong
                                style="color:green">Email:</strong>&nbsp;<a
                                href="mailto:#">{{ $contactusdata[0]['contact_us_email'] }}</a>

                        </address>
                    </form> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="padding:0px">
                <div class="col-md-6 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                <h2 style="color:blue"></h2>
                            </div>
                            <div>
                                <h2 align="justify" style="color:blue"><strong></strong></h2>
                                <p align="justify"><strong></strong>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                <h4 style="color:blue"></h4>
                            </div>
                            <div>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                <a href="https://maps.google.co.in/maps?hl=en&tab=wl"><img
                                        src="{{ env('FILE_VIEW') }}/up-images/map.jpg" /></a>
                            </div>
                            <div>
                                <p><a href="#">
                                    </a></p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>

                <div class="col-md-6 hidden-sm right-col-fix" id="iwtRightPannel">

                    <!--Right col-->
                    <div class="col-sm-12 right-col-fix">
                        <div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
