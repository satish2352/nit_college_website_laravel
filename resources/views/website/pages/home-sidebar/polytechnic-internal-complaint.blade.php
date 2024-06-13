@extends('website.layout.master')
@section('content')

<style>
    
.panel_content
{
    background-color: #eceff7;
}
.clickable{
    cursor: pointer;
}
.panel
{
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 0;
    width:800px;
    /*-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
    /*box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
}
.product-type
{
    margin-top: 45px;
}
.product-size
{
    margin-top: 25px;
}
.product-use
{
    margin-top: 25px;
    margin-bottom: 25px;
}
.panel-heading span {
    margin-top: -20px;
    font-size: 15px;
}
.panel-primary>.panel-heading {
    color: #000;
    background-color: #fff;
    border-bottom: 1px solid #eeeeee;
    padding-top: 20px;
    padding-bottom: 20px;
}
.panel-title
{
    font-size: 22px;
    font-weight:400;
}

.panel_product_type
{
    
    margin-top: 20px;
}
.panel_product_type
{
    line-height: 26px;
}
.panel_product_type
{
    font-size: 18px;
    font-weight: 400;
    color: black;
}
</style>
<script>
       $(document).on('click', '.panel-heading span.clickable', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass('glyphicon glyphicon-plus-sign');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass('glyphicon glyphicon-minus-sign');
            }
        })
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<h2><strong></strong></h2>
	<div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div>
</div>

<div class="panel_content">
    <div class="container">
        <div class="row">
          
          <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
	<!--Right col-->
	<div class="col-sm-12 right-col-fix">
	<div>
	       <div class="list-group">
	   	
            <div class="list-group-item"><b>NIT POLYTECHNIC, NASHIK</b></div>
            <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्यात</a>
            
         <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">GOVERNING BODY</a>
         <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item ">MANDATARY DISCLOSURE</a>
            <a href="{{ route('polytechnic-aicte-extension') }}"  class="list-group-item ">AICTE EOA</a>
           <a  href="{{ route('polytechnic-affiliation') }}"  class="list-group-item ">MSBTE AFFILIATION</a>
           {{-- <a  href="{{ route('polytechnic-affiliation_certificates') }}"  class="list-group-item ">AFFILIATION CERTIFICATES</a> --}}
           {{-- <a href="{{ route('polytechnic-servicerules') }}" class="list-group-item ">SERVICE RULES</a> --}}
           {{-- <a href  ="pages/polytechnic-about-t&pcell-IOD.php" class="list-group-item ">TRAINING AND PLACEMENT</a> --}}
           <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item ">ANTIRAGGING COMMITTEE</a>
           <a href="{{ route('polytechnic-internal-complaint') }}"  class="list-group-item ">INTERNAL COMPLAINT COMMITTEE</a>
           {{-- <a class="list-group-item ">GRIEVANCE REDRESSAL COMMITTEE</a> --}}
           <a href="{{ route('polytechnic-about-scst') }}"  class="list-group-item ">SC/ST CELL</a>
       
         {{-- <a href="{{ route('polytechnic-academic-calendar') }}" class="list-group-item ">ACADEMIC CALENDAR</a> --}}
           {{-- <a href="pages/polytechnic-about-regulatingauthority-IOD.php" class="list-group-item ">FEES REGULATING AUTHORITY</a>
           <a href="pages/polytechnic-about-terms-IOD.php" class="list-group-item ">TERMS AND CONDITIONS</a>
           <a href="pages/polytechnic-about-downloads-IOD.php" class="list-group-item ">STUDENT DOWNLOADS</a>
           <a href="pages/polytechnic-about-downloadsstaff-IOD.php" class="list-group-item ">STAFF DOWNLOADS</a>
           <a href="pages/polytechnic-about-scholarship-IOD.php" class="list-group-item ">STUDENT SCHOLARSHIP</a> --}}
           {{-- <a href="pages/polytechnic-about-events-IOD.php" class="list-group-item ">EVENTS</a>
           <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" class="list-group-item ">SBI COLLECT</a>
           <a href="pages/polytechnic-about-media-IOD.php" class="list-group-item ">MEDIA NEWS</a>
           <a href="pages/polytechnic-about-faq-IOD.php" class="list-group-item ">FAQ</a> --}}
           
             <div class="list-group-item"></div>
      </div>
	  	</div>
	</div>
</div>  
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="panel panel-primary product-type">
                        <div class="panel-heading">
                            <center><h3 class="panel-title" style="color:blue"><b>Internal Complaint Committee</b></h3></center>
                            <br>
                            <center><h3 class="panel-title" style="color:blue"><b>(Sexual Harassment Committee)</b></h3></center>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                        </div>
                        <div class="panel-body">
                        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
	    
	                             <center>
                                        <table style="width: 638px;" class="table table-responsive table-hover" cellspacing="0" cellpadding="0">
<tbody>
    
<tr>
<td valign="top" width="85">
<p align="center"><strong>SR.NO</strong></p>
</td>
<td valign="top" width="10">
<p align="center"><strong>Name</strong></p>
</td>
<td valign="top" width="84">
<p align="center"><strong>Designation</strong></p>
</td>
<td valign="top" width="84">
<p align="center"><strong>Mobile</strong></p>
</td>
<td valign="top" width="84">
<p align="center"><strong>Email</strong></p>
</td>
</tr>
<tbody>
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
                <tr>
                    <td><center>{{ $data_output->fld_bm_name }}</center></td>
                    <td valign="top" width="288">
                        <p style="text-align: center;">{{ $data_output->Designation }}</p>
                    </td>
                    <td valign="top" width="288">
                        <p align="center">{{ $data_output->mobilenumber }}</p>
                    </td>
                    <td valign="top" width="288">
                        <p align="center">{{ $data_output->email }}</p>
                    </td>
                </tr>
            @endif
        @endif
    @endif
</tbody>

</table>  
               </center>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container"> 
<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        <div class="col-sm-12">

            <p></p>
            <div>
                <h2 style="color:blue"></h2>
            </div>
            <div>                   
                            </div>
        </div>        
</div><!-- /.row --><div class="panel-group" id="accordion">
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        <h4 class="">
        
        </h4>
        </div>
        
        <div id="" class="">
        <div class="">
			        <div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h3></h3>
            </div>
            <div>                   
                <p></p>
<ul class="arrow-blue">
<li></li>
<li></li>
<li></li>
<li></li>
</ul>            </div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <!--<img src="../up-images/engineering-mechanics-labimgFile56d40781da7f6.jpg" alt="Engineering Mechanics Laboratory" class="img-responsive" style="margin:0 auto">-->
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2></h2>
            </div>
            <div>                   



          </div>
        </div>        
</div><!-- /.row -->				            													
  <!--<div class="row outer-white">
        <div class="col-sm-12">
            
            
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        
        
        <div id="">
        <div class="">
			        
                    <div class="">
        <div class="">
            
            <div>                   
                <p></p>
     </div>
        </div>        
</div><!-- /.row -->				            													<div class="">
        <div class="">
            <!--<img src="../up-images/mechanics-of-structures-labimgFile56d4079d1461d.jpg" alt="Mechanics of Structures Laboratory" class="img-responsive" style="margin:0 auto">------->
        </div>        
</div><!-- /.row -->				            													<div class="">
        <div class="">
            <div>
                <h2></h2>
            </div>
            <div>                   
                        </div>
        </div>        
</div><!-- /.row -->				            													<div class="">
        <div class="">
            <div>
                <h3></h3>
            </div>
            <div class="">                   
                <p><strong> </strong></p>            </div>
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
<!--accordion panel-->

    <!--panel 1-->
    <div class="" id="">
                        <div class="">
        
        </div>
        
        <div id="" class=" ">
        <div class="">
			       <div class="">
        <div class="">
            
            <div>                   
                
</div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <!--<div class="col-sm-12">
            <img src="../up-images/geo-tech-labimgFile56d407cee9833.jpg" alt="Geo Tech. & Concrete Technology Engineering La" class="img-responsive" style="margin:0 auto">
        </div>--->        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            
            <div>                   
                 </div>
        </div>        
</div><!-- /.row -->				            													<div class="row outer-white">
        <div class="col-sm-12">
            
            
        </div>        
</div><!-- /.row -->				            			        </div>
        </div>

    </div><!--/panel 1-->
</div>
</div>
<div class="col-md-1 hidden-sm">&nbsp;</div>
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
<!-- <div
style="margin-top: -40px;
margin-bottom: 12px;
text-align: center;
border-radius: 0px 0px 10px 10px;
background-color: #c70039;
color: rgb(255, 255, 255);">
<i>Last updated on : 01-08-2016 12:32 PM</i>
</div> -->
	<!--Right col-->

</div></div>
</div>
</div>
@endsection