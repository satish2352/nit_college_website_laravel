@extends('website.layout.master')
@section('content')
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
            </div>

        </div>
    </div>
    <div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px;">
        <div class="container">
            <div class="row" style="padding:0px">
                <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white1">
                        <div class="col-sm-12">
                            @if (isset($error))
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                            @else
                                @if (!$data_output)
                                    <div class="alert alert-info">
                                        Data not found
                                    </div>
                                @else
                                    @if ($data_output->is_active == 0)
                                        <div class="alert alert-info">
                                            Data not found
                                        </div>
                                    @else
                                        <div>
                                            <h2 style="color:blue">{{ $data_output->activities }}</h2>
                                        </div>
                                        <div>
                                            <p>{{ $data_output->activity_description }}</p>
                                        </div>
                                    @endif
                                @endif
                            @endif
                        </div>
                        

                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 ">
                        <p>Our educational institute organizes co-curricular activities every year It helps the students
                            to enhances their knowledge, confidence, debating power, stage daring and overall
                            personality.</p>
                        <p><b style="color:blue">Quiz Contest</b> :- On the occasion of Teachers day, we had organized
                            the quiz contest The quiz contest was based on general knowledge.</p>
                        <p><b style="color:blue">Teacher day</b> :- On the occasion of Teachers day, the students
                            participated and they were given the opportunity to teach in the class before the students.
                        </p>
                        <p><b style="color:blue">Debate competition</b> :- On the occasion of Youth Day The debate
                            competition was tak .The subject for the debate competition was Addiction gives prestige?
                            Yes or No.The students participated and talked for both the sides.</p>
                    </div>
                </div>
            </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <h2></h2>
                        </div>
                        <div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <P><br>
                        </p>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="col-md-1 hidden-sm">&nbsp;</div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
            </div>
        </div>
    </div>
</div>
@endsection
