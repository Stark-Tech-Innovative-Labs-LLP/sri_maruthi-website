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
    </style>
    <?php require("./header.php") ?>
</head>
<body>
    <?php 
        @include("./navbar.php");
    ?>
    
<center>
    <h2>Study Materials</h2>
    <h4><u>Pre-University Course</u></h4>
    <div class="row">
    <div class="col-lg-4"><div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Languages Study Materials [PUC]</h5>
    <a href="waste?class=LANG"  class="btn btn-danger">View</a>
  </div>
</div></div> 
<div class="col-lg-4"><div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Science Study Materials [PUC]</h5>
    <a href="waste?class=PUSC"  class="btn btn-danger">View</a>
  </div>
</div></div>
        <div class="col-lg-4"><div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Commerece Study Materials [PUC]</h5>
    <a href="waste?class=PUCM"  class="btn btn-primary">View</a>
  </div>
</div></div>
    </div>



    <h4><u>Degree Course</u></h4>
    <div class="p-4 row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6"><div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">B.Com Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
<div class="col-lg-3"></div>

      
    </div>
</center>
</body>
</html>