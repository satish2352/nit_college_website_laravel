@extends('website.layout.master')
@section('content')
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">



        </div>
    </div>
    <div class="container-fluid" style="padding-bottom:40px">
        <div class="container card-shadow" style="margin-bottom: 95px;">
            <div class="row" style="padding:0px">
                <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                <p>The curriculumn of each department is designed by MSBTE and it includes Teaching
                                    Examination Scheme and syllabus of respective semester. From the academic year 2017-18,
                                    'I' Scheme is implemented and followed.</p>

                                <table class="table table-striped table-bordered" id="customers">
                                    <thead>
                                        <tr>

                                            <th>
                                                <center>Semister</center>
                                            </th>
                                            <th class="td-actions">Download Syllabus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($error))
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @else
                                        @if (!$data_output)
                                            <div>
                                                <p class="department-error">Data not available</p>
                                            </div>
                                        @else
                                            @foreach ($data_output as $data_output)
                                                @if ($data_output->is_active == 0)
                                                    <div >
                                                        <p class="department-error">Data not available</p>
                                                    </div>
                                                @else
                                                    <tr>

                                                        <td>{{ $data_output->semister }}</td>
                                                        <td> <a href="{{ Config::get('DocumentConstant.CURRICULUM_DOC_VIEW') }}{{ $data_output->file }}"
                                                                target="_blank" class="btn btn-small btn-primary">
                                                                <i class="btn-icon-only icon-ok">Download</i>
                                                            </a></td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                @endif
                                            @endif
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row outer-white">


                    </div>
                    <div class="row outer-white">
                        <div class="col-lg-4 col-md-5 col-sm-12">
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12" style="padding:0;margin-top:10px;">
                            <div>
                                <h4></h4>
                            </div>
                            <div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 hidden-sm">&nbsp;</div>
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                    @include('website.pages.department.right-sidebar-department')
                </div>  

            </div>
        </div>
    </div>
    </div>
@endsection
