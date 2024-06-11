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
        color:#00ae97;
        /* background-color:#c70039; */
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
    /* .president-msg{
        box-shadow: 0 0 15px #8D9AA8;
        border-radius: 10px;
    }
    .president-msg p::first-letter{
        color: #c70039;
        font-size: xx-large;
    } */
    
    /* Styles for the president-msg section */
.president-msg {
    margin-top: 5rem; /* Adjust as needed */
    margin-bottom: 5rem; /* Adjust as needed */
}

/* Styles for the president image and text */
.president-msg .col {
    text-align: center;
}

/* .president-msg img {
    height: 400px;
} */
.president-msg img {
    height: 250px;
}
.president-msg h5 {
    color: #00ae97;
    margin-top: 2rem;
    font-weight: bold;
}

.president-msg p {
   
    text-align: justify;
}

/* Animation styles */
[data-aos="fade-left"] {
    /* Add your fade-left animation styles */
}

[data-aos="fade-right"] {
    /* Add your fade-right animation styles */
}

.row1{   
   margin-right: 0px;
  margin-left: 0px;
  width:1100px
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
    <div class="container-fluid pageHeading-bg " id="iwtPageHeading">
    <div class="container">
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2 card-shadow" style="padding:0;" data-aos="flip-left">
        <center><h2 style="color:green" class="mt-3"><strong>President Desk</strong></h2></center>
        <br>
    

    <div class="container about1 ">
        <center><h3 class="panel-title" ><b>President Message</b></h3></center>
    </div>

    <div class="president-msg">
     <div class="row">
       <div class="col-lg-5 col text-center" data-aos="fade-left">
       <img src="{{ asset('public/assets/up-images/annasaheb-patil.gif') }}" alt="" height="400">
                &nbsp;&nbsp;
       <h5 class="mt-2" style="color:#00ae97;">Mr. Suresh .A. Patil B.Sc (Hons), L.L.B. <br>President, Nasik Institute of Technology</h5>     
       </div>
       <div class="col-lg-7 col text-center">
       <p class="text-justify p-3" data-aos="fade-right card">Through my last 36 years of experience in various sectors like Industrial, Construction, Banking, Social etc. I strongly believe that there is still a long way to go to attain the increasing demand of technology Savvy minds by the industrial and for that the excellence in education and training is the need of hour. NIT- Nasik Institute of Technology is taking shape to bridge the gap between the future demand and supply technical human resource. Over the year it will grow in to a leading educational center in Maharashtra, widely recognized for its modern state of the art infrastructure, vibrant campus and academic excellence in the field of technical education. The courses designed are amongst the best in the industry and is believed to equip the with effective knowledge, Potentials, insights and expertise so that they can make a successful and bright career. Keeping in mind the requirement of building construction industry, we have designed Sandwich course in Civil Engineering to give in-depth knowledge of on site working.
                                We trust the fact that if youth is equipped with proper knowledge and skills, they can be the most powerful global asset .We are proud to say that we are creating Youth anium (Intellectual Youth Power).
    
       </p>
       </div>
     </div>   
    </div>
  
    
    
    </div>
</div>
    </div>
    @endsection