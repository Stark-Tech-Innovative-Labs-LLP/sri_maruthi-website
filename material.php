<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sri Maruthi PU College - Moulding Better Tomorrow through Education & Excellence</title>

    <style>
       #study-material {
            color: #3E64FF;
        }
        body{
            height:100%;
            width:100%;
        }
     img{
          border-top-left-radius:22px !important;
          border-top-right-radius:22px !important;
       
        }
        .card-img-top{
             height:180px !important;
        }
        .card{ 
          margin-bottom: 40px !important;
          border-radius:22px !important;
        height:320px; 
        }

        .btn{
          width:50%;
          margin:9px;
        }

        .row{
          margin:0 !important;
          padding: 0 !important;
        }

        .heading{
          margin-top:  40px !important;
          margin-bottom:  50px !important;
        }


 .section-title{
          margin-top:40px !important;
          margin-left:60px !important;
        }

        @media (max-width:500px) {
            .section-title{
              margin-left:20px !important;
        }
        }




    </style>
    <?php require("./header.php") ?>
</head>

<body>
    <?php 
        @include("./navbar.php");
    ?>

    <section style="background: url( 'assets/img/study-material/head1.jpg' );background-position-x:40%; background-position-y:40%; " id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
      <h1>Materials</h1>
      <h2>No matter how busy you may think you are, you must find time for reading</h2>
      <a href="./contact" class="btn-get-started">Contact Us</a>
    </div>
  </section>


<main  id="main">

    <center>
<div   class="container">
    <?php 
      if($_GET['class']=="LANG"){
        ?>                  


</center> 
 <div class="section-title">
                    <h2>Study Materials</h2>
                    <p>Study Materials</p>
                </div>
    <center>


  
   <br>



       <div class="row">
       <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" class="heading"> 1<sup>st</sup> PU Languages</h3>
        <div class="col-lg-4">

        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 70%;">
<img src="https://i.gadgets360cdn.com/large/kannada_google_1622781055470.jpg" class="card-img-top" alt="...">
<div class="card-body">

<h5 class="card-title">Kannada Study Materials <br> [PUC]</h5>
<a href="Docs?class=PUCK1"  class="btn btn-primary">View</a>
</div>
</div>
         </div> 
         <div class="col-lg-4">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 70%;">
<img src="https://img.etimg.com/thumb/msid-77058712,width-650,imgsize-172210,,resizemode-4,quality-100/english_istock.jpg" class="card-img-top" alt="...">
<div class="card-body">

<h5 class="card-title">English Study Materials <br> [PUC]</h5>
<a href="Docs?class=PUCE1"  class="btn btn-primary">View</a>
</div>
</div>
         </div>
         <div class="col-lg-4">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 70%;">
<img src="https://images.indianexpress.com/2019/07/hindi-759.jpg" class="card-img-top" alt="...">
<div class="card-body"> 

<h5 class="card-title">Hindi Study Materials <br> [PUC]</h5>
<a href="Docs?class=PUCH1"  class="btn btn-primary">View</a>
</div>
</div>
         </div>
     
       </div> 
       
       <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="130" class="heading"> 2<sup>nd</sup> PU Languages</h3>
               <div class="row">
               <div class="col-lg-4">
               <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 70%;">
  <img src="https://i.pinimg.com/originals/c1/df/c5/c1dfc543bcf0dd88fc4211ab5c5fd4ea.jpg" class="card-img-top" alt="...">
  <div class="card-body">

    <h5 class="card-title">Kannada Study Materials <br> [PUC]</h5>
    <a href="Docs?class=PUCK2"  class="btn btn-primary">View</a>
  </div>
</div>
                </div>
                
                <div class="col-lg-4">
               <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 70%;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLo7pggn0BQDSQnOFHQZdaAz1ThaSA7Zr7Lg&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">

    <h5 class="card-title">English Study Materials <br> [PUC]</h5>
    <a href="Docs?class=PUCE2"  class="btn btn-primary">View</a>
  </div>
</div>
                </div>


                <div class="col-lg-4">
               <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 70%;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body"> 
    <h5 class="card-title">Hindi Study Materials <br> [PUC]</h5>
    <a href="Docs?class=PUCH2"  class="btn btn-primary">View</a>
  </div>
</div>
                </div>
            
              </div>

              
        <?php

      }elseif($_GET['class']=="PUSC"){
       ?> 


</center> 
<div style="align:left;" class="section-title">
        <h2>Science Stream</h2>
        <p>Science Stream</p>
    </div> 
    <center>

  
  <h3 class="heading"> 1<sup>st</sup> PU Science </h3>
            <div class="row">
              <div class="col-lg-6"> 
                 <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/phy1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Physics Study Materials </h5>
    
    <a href="Docs?class=PUCP1"  class="btn btn-primary">View</a>
  </div>
</div></div>
              <div class="col-lg-6">
                  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/chem1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Cemistry Study Materials </h5>
    <a href="Docs?class=PUCC1"  class="btn btn-primary">View</a>
  </div>
</div></div>
            </div>
            <div class="row">
              <div class="col-lg-6"> 
                 <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/math1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Mathematics Study Materials </h5>
    <a href="Docs?class=PUCM1"  class="btn btn-primary">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  
                <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/bio2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Bilogy Study Materials </h5>
    <a href="Docs?class=PUCB1"  class="btn btn-primary">View</a>
  </div>
</div></div>
</div>
          <div class="row">
<div class="col-lg-3"></div>
<center>
<div class="col-lg-6"> 
               <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/cs1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Computer Science Study Materials </h5>
    <a href="Docs?class=PUCCS1"  class="btn btn-primary">View</a>
  </div>
</div></div>
</center>
<div class="col-lg-3"></div>
          </div>
            
          <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="130" class="heading"> 2<sup>nd</sup> PU Science</h3>
            <div class="row">
              <div class="col-lg-6">  
                <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/phy2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Physics Study Materials </h5>
    <a href="Docs?class=PUCP2"  class="btn btn-primary">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/chem2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Cemistry Study Materials </h5>
    <a href="Docs?class=PUCC2"  class="btn btn-primary">View</a>
  </div>
</div></div>
            </div>
            <div class="row">
              <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/math2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Mathematics Study Materials </h5>
    <a href="Docs?class=PUCM2"  class="btn btn-primary">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/bio1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Bilogy Study Materials </h5>
    <a href="Docs?class=PUCB2"  class="btn btn-primary">View</a>
  </div>
</div></div>
<div class="row">
<div class="col-lg-3"></div>
<center>
<div class="col-lg-6"> 
               <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
  <img src="assets/img/study-material/cs2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Computer Science Study Materials </h5>
    <a href="Docs?class=PUCCS2"  class="btn btn-primary">View</a>
  </div>
</div></div>
</center>
<div class="col-lg-3"></div>
          </div>
            </div>
     
       <?php
      }elseif($_GET['class']=="PUCM"){
        ?> 

<br>
</center> 
<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="130" class="section-title">
        <h2>Commerce Stream</h2>
        <p>Commerce Stream</p>
    </div> 
    <center>

<br>

<h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="130" class="heading"> 1<sup>st</sup> PU Commerce</h3>
        <div class="row">
               <div class="col-lg-6"> 
                  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/e1.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
     <h5 class="card-title">Economics Study Materials </h5>
     <br>
     <a href="Docs?class=PUCE1"  class="btn btn-primary">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/bs1.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
     <h5 class="card-title">Business Studies Study Materials </h5>
     <br>
     <a href="Docs?class=PUCBS1"  class="btn btn-primary">View</a>
   </div>
 </div></div>
             </div>
             <div class="row">
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/ac1.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
   <h5 class="card-title">Accountancy Study Materials </h5>
   <br>
     <a href="Docs?class=PUCA1"  class="btn btn-primary">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/ccs1.png" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
     <h5 class="card-title">Computer Science Study Materials </h5>
     <br>
     <a href="Docs?class=PUCCCS1"  class="btn btn-primary">View</a>
   </div>
 </div></div>
           
             </div>
             <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="130" class="heading"> 2<sup>nd</sup> PU Commerce</h3>
             <div class="row">
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/e2.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
     <h5 class="card-title">Economics Study Materials </h5>
     <br>
     <a href="Docs?class=PUCE2"  class="btn btn-primary">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/bs2.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
     <h5 class="card-title">Business Studies Study Materials </h5>
     <br>
     <a href="Docs?class=PUCBS2"  class="btn btn-primary">View</a>
   </div>
 </div></div>
             </div>
             <div class="row">
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/ac2.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
   <h5 class="card-title">Accountancy Study Materials </h5>
   <br>
     <a href="Docs?class=PUCA2"  class="btn btn-primary">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="130" class="card" style="width: 60%;">
   <img src="assets/img/study-material/ccs2.jpg" class="card-img-top" alt="...">
   <div class="card-body">
     <br>
     <h5 class="card-title">Computer Science Study Materials </h5>
     <br>
     <a href="Docs?class=PUCCCS2"  class="btn btn-primary">View</a>
   </div>
 </div></div>
           
             </div>
    
        <?php
      }elseif($_GET['class']=="DEG"){
        echo "<h1>This Page is Still Under Development for Degree Course Materials..!!! </h1><br><h3>Stay Tuned..</h3>";
      }

?>
 </div>
</main>


    <?php
    include("footer.php");
    include("libs.php"); ?>

            <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script> -->
    </body>
</html>