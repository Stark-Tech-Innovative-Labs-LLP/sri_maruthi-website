<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  

        /* css */

        .card{ 
          margin-bottom: 40px !important;
          border-radius:22px !important;
        height:320px; 
        }

        .section-title{
          margin-top:40px !important;
      margin-left:60px !important;
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

        .btn{
          width:50%;
          margin:9px;
        }

        div{
          margin:0 !important;
          padding: 0 !important;
        }

        .heading{
          margin-top:  40px !important;
          margin-bottom:  40px ;
        }
      



    </style>
   <?php require("./header.php") ?>
</head>

<section style="background: url( 'assets/img/study-material/head1.jpg' ) " id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-delay="100">
      <h1>Study Materials</h1>
      <h2>The best documents shared by your fellow students, organized in one place.</h2>
      <a href="./Contact.php" class="btn-get-started">Get Started</a>
    </div>
  </section>



<body>
    <?php 
        @include("./navbar.php");
    ?>
    

    


<br>
<br>

<main id= " main">
<div data-aos="fade-right" data-aos-delay="100"   class="section-title">
        <h2>Study Materials </h2>
        <p>Study Materials</p>
    </div>  
<center>
<div class="container">
  
<div class="row">
    



    

    <h2 data-aos="fade-down" data-aos-delay="100" class="heading">Pre-University Materials</h2>


<div class="col-lg-4">
<center>

    <div  data-aos="zoom-in" data-aos-delay="120" class="card" style="width: 70%;">
  <img class="card_img" src="assets/img/study-material/deg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Languages Study Materials [PUC]</h5>
    <a  href="material?class=LANG"  class="btn btn-danger">View</a>
  </div>
</div>

</center>
</div>



<div class="col-lg-4">

    <div data-aos="zoom-in" data-aos-delay="120" class="card" style="width: 70%;">
  <img src="assets/img/study-material/science.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <br>
    <h5 class="card-title">Science Study Materials   <br>   [PUC]</h5>
    <a style="width:70%;" href="material?class=PUCS"  class="btn btn-danger">View</a>

</div>
</div>
</div>



<div class="col-lg-4">
  <center>
    
  
            <div data-aos="zoom-in" data-aos-delay="120" class="card" style="width: 70%;">
  <img src="assets/img/study-material/commerce.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <br>
  <h5 class="card-title">Commerece Study Materials  [PUC]</h5>
    <a  href="material?class=PUCC"  class="btn btn-primary">View</a>
  </div>
</div>
  </center>
</div>

    </div>

 


      </center>
<br>
<br>


  <div class="row">
    <div class="col-lg-4"></div>

      <div class="col-lg-4">
        <center>
        <h2 data-aos="fade-down" data-aos-delay="100" class="heading">Degree Study Materials</h2>

 
<div data-aos="zoom-in" data-aos-delay="120" class="card" style="width: 70%;">
<img src="assets/img/study-material/deg.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <br>
<h5 style="margin-top:15px;" class="card-title">B.Com Study Materials </h5>

<a style="width:70%;" href="material?class=DEG"  class="btn btn-success">View</a>
</div>
</div>
      </div>
      </center>
      <div class="col-lg-4"></div>
 
  </div>
</div>



      

</main>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<?php
 include("footer.php");
 include("libs.php"); ?>
</body>
</html> 