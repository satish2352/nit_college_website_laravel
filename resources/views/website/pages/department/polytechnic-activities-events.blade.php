@extends('website.layout.master')
@section('content')
<style>
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
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
  background-color: #f2f2f2;
  padding: 20px;
}

/*
inspired from https://codepen.io/Rowno/pen/Afykb 
*/
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

/*
WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
now override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}

/* just for demo purpose */
    html,
    body,
    .carousel,
    .carousel-inner,
    .carousel-inner .item {
      height: 90%;
      
    }

    .item:nth-child(1) {
      background: blue;
    }

    .item:nth-child(2) {
      background: red;
    }

    .item:nth-child(3) {
      background: orange;
    }
    
        .margin-top-50 {
	margin-top: 50px;}
    /*Filter START*/
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
/*Filter END*/

.table-widthB{
    width: 48%;
    }
    
.table-widthA{
    width: 49.8%;
    }
    
.bg{
    background-color: white;
    }  
      
.tablescroll {
    overflow-y: auto;
	overflow-x: hidden;
	height: 189px;
	margin-right: 1px;
}
.marginTop30{
    margin-top:30px;
}

.radio,
.checkbox {
  margin-top: 0px;
  margin-bottom: 0px;
  }
  
  .checkbox,.radio{
  margin-top:0px;
  margin-bottom:0px
  }
  
.radio-margin{
    margin-left: -13px;
	margin-top: 7px;
}
.radio-margin{
    margin-left: -13px;
    margin-top: 7px;
}
.EU_DataTable td, th {
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
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
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

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
/*Radio and Checkbox END*/
</style>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<h4 style="color:green"><strong>Civil Department Activities And Events</strong></h4>
	<div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container card-shadow" style="margin-bottom: 95px;"> 
<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        <div class="col-sm-12">
            
            <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
              <img src="../images/events/Industrial Visits_1.jpg" alt="" class="img-responsive">
                </div>
            </div>
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
                <div class="item">
               
                    <div class="carousel-caption">
                        <img src="../images/events/<?php echo $data_output['fld_gallery_photo'];?>" class="img-responsive" ><br> 
                         <td><center>{{ $data_output->imageTitle }}</center></td>
                    </div>
                </div>
                @endif
            @endif
        @endif

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            
            <div class="row">
                
                <?php 
                                    // $count=0; 
                                    // $query="select t.*,d.* from tbl_events t,department d  where d.Department_id=t.Department_id and t.fld_delete='0' and d.Department='Civil Engineering'  order by t.fld_gallery_id desc";
                                    // $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                                    
                                    // while($fetch=mysqli_fetch_array($row)) {

                                    // extract($fetch);
                                
                                ?>

            <!--<div class="col-lg-6 col-md-6 col-xs-6 thumb">-->
                
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""-->
            <!--       data-image="../images/events/<?php //echo $fetch['fld_gallery_photo'];?>"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../images/events/<?php// echo $fetch['fld_gallery_photo'];?>"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--    <center><h3><strong><?php// echo $fetch['imageTitle'];?></strong></h3></center>-->
            <!--</div>-->
            

            	<?php //} ?>
            
            



            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a8.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a8.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a9.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a9.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a10.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a10.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->



            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a11.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a11.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a12.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a12.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a13.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a13.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a14.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a14.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a15.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a15.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a16.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a16.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a17.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a17.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a18.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a18.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a19.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a19.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a20.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a20.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a22.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a22.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a23.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a23.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a24.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a24.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a25.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a25.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a26.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a26.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a27.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a27.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            
            
        </div>
        
            <div>
                <h3></h3>
            </div>
            <div>                   
                <p><span style="font-family: georgia,palatino;"><strong><span style="font-size: large; color: #ff6600;">

                  <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0043.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->

<!--                  <div class="container">-->
<!--  <div class="mySlides">-->
<!--    <div class="numbertext">1 / 3</div>-->
<!--    <img src="../images/gallery/5ea826f5be32a01.jpg" style="width:70%">-->
<!--  </div>-->

<!--  <div class="mySlides">-->
<!--    <div class="numbertext">2 / 3</div>-->
<!--    <img src="../images/gallery/5ea828e3e1c3c12.jpg" style="width:70%">-->
<!--  </div>-->

<!--  <div class="mySlides">-->
<!--    <div class="numbertext">3 / 3</div>-->
<!--    <img src="../images/gallery/5ea828a8a3876025.jpg" style="width:70%">-->
<!--  </div>-->
    

<!--  <a class="prev" onclick="plusSlides(-1)">❮</a>-->
<!--  <a class="next" onclick="plusSlides(1)">❯</a>-->

 

<!--  <div class="row">-->
<!--    <div class="column">-->
<!--      <img class="demo cursor" src="../images/gallery/5ea826f5be32a01.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">-->
<!--    </div>-->
<!--    <div class="column">-->
<!--      <img class="demo cursor" src="../images/gallery/5ea828e3e1c3c12.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">-->
<!--    </div>-->
<!--    <div class="column">-->
<!--      <img class="demo cursor" src="../images/gallery/5ea828a8a3876025.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">-->
<!--    </div>-->
    
<!--  </div>-->
<!--</div>-->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                   <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0170.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->

                   

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

 <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0195.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->

 


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <!--<p><div class="pull-left"><img src="../up-images/civil/DSC_0331.JPG" alt="" class="img-responsive" height="500" width="500"></div></p>-->

  


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--<p><span style="background-color: #ffffff; font-size: medium; color: #ff6600; font-family: georgia,palatino;">2. Shri H.H.J.B. Polytechnic&nbsp; (Shift ) &nbsp; &nbsp; &nbsp;&nbsp; Institute Code &nbsp; &nbsp; 1104</span><strong><span style="background-color: #ffffff; font-size: large; color: #ff6600; font-family: georgia,palatino;"> &nbsp;</span></strong></p>-->            </div>
        </div>        
</div><!-- /.row --><div class="row outer-white">
        <div class="col-sm-12">
            <div>
                
            </div>
            <div class="table-responsive">                   
                

                
                
<p><strong>&nbsp;</strong></p>
<p>&nbsp;</p>            </div>
        </div>        
</div><!-- /.row --></div>
<div class="col-md-1 hidden-sm">&nbsp;</div>
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
<!-- <div
style="margin-top: -40px;
margin-bottom: 12px;
text-align: center;
border-radius: 0px 0px 10px 10px;
background-color: #FE9B42;
color: rgb(255, 255, 255);">
<i>Last updated on : 01-08-2016 12:32 PM</i>
</div> -->
	<!--Right col-->
	<div class="col-sm-12 right-col-fix">
	<div>
  <div class="list-group">
                    <div class="list-group-item">Humanities & Science</div>
                    @if(isset($data_output) && isset($data_output['Department_id']))
                    <a href="{{ route('department-profile', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item ">PROFILE</a>
                    <a href="{{ route('department-vision-mission', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Vision Mission</a>
                    <a href="{{ route('department-curriculum', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">CURRICULUM</a>
                    <a href="{{ route('department-faculty', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Faculty</a>
                    <a href="{{ route('department-syllabus', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Syllabus</a>

                    <a href="{{ route('department-time-table', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">Time Table</a>
                    <a href="{{ route('department-mentor', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">MENTOR</a>
                    <a href="{{ route('department-achievements-awards', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                    <a href="{{ route('department-activities-events', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                    <a href="{{ route('department-students-association', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                    <a href="{{ route('department-plan', ['id' => $data_output['Department_id']]) }}"
                        class="list-group-item active-rp-link">PLAN</a>

                    @else
                    <p> Data not available.</p>
                    @endif



                    <div class="list-group-item"></div>
                </div>
	 
	  	</div>
	</div>
</div></div>
</div>
</div>
    @endsection