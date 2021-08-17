<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #study-material {
            color: #3E64FF;
        }

        /* css */

        .card{ 
          border-radius:22px !important;
        height:320px; 
        }

      
     img{
          border-top-left-radius:22px !important;
          border-top-right-radius:22px !important;
       
        }
        .card-img-top{
             height:190px !important;
        }

        .btn{
          width:50%;
          margin:9px;
        }

        div{
          margin:0 !important;
          padding: 0 !important;
        }


    </style>
    <?php require("./header.php") ?>
</head>

<section style="background: url( 'assets/img/study-material/head1.jpg' ) " id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-delay="100">
      <h1>Study Materials</h1>
      <h2>The best documents shared by your fellow students, organized in one place.</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section>



<body>
    <?php 
        @include("./navbar.php");
    ?>
    

    


<br>
<br>

<main id= " main">

<center>
    <h1>Study Materials</h1>
    <br>
    <br>
    <h4><u>Pre-University Course</u></h4>
    <br> 
    <div class="container">
    <div class="row">
    <div style="margin-top:10px !important;margin-bottom:10px !important " class="col-lg-4 col-sm-12">
    <div class="card" style="width: 18rem;">
  <img class="card_img" src="assets/img/study-material/deg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Languages Study Materials [PUC]</h5>
    <a href="material?class=LANG"  class="btn btn-danger">View</a>
  </div>
</div>
</div> 
<div style="margin-top:10px !important;margin-bottom:10px !important " class="col-lg-4 col-sm-12">
    <div class="card" style="width: 18rem;">
  <img src="assets/img/study-material/science.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Science Study Materials [PUC]</h5>
    <a href="material?class=PUSC"  class="btn btn-danger">View</a>
  </div>
</div></div>
        <div style="margin-top:10px !important;margin-bottom:10px !important " class="col-lg-4 col-sm-12">
            <div class="card" style="width: 18rem;">
  <img src="assets/img/study-material/commerce.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Commerece Study Materials [PUC]</h5>
    <a href="material?class=PUCM"  class="btn btn-primary">View</a>
  </div>
</div></div>
    </div>
    </div>
    </div>
<br>
<br>
<br>
<br>
    <h4><u>Degree Course</u></h4>
<div class="container">
      
<div class=" row">
 
        <div style="margin-top:10px !important;margin-bottom:10px !important " class="col-lg-4 col-sm-12"><div class="card" style="width: 18rem;">
  <img src="assets/img/study-material/deg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">B.Com Study Materials </h5>
    <a href="material?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>


      
    </div>
</div>
</center>
</main>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html> 