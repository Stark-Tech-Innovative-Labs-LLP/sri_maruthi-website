<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #contact {
            color: #3E64FF;
        }
        
label{
  color: black !important;
  font-weight: 550 !important;
}

@media only screen and (min-width: 600px) {
        #contact_us_txt {
  margin-top:70px;
  }
}

.contact .info-box {
  color: #444444;
  text-align: center;
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 20px 0 30px 0;
}

.contact .info-box i {
  font-size: 32px;
  color: #3E64FF;
  border-radius: 50%;
  padding: 8px;
  border: 2px dotted #3E64FF;
}

.contact .info-box h3 {
  font-size: 20px;
  color: #777777;
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input::focus, .contact .php-email-form textarea::focus {
  background-color: #cc1616;
}

.contact .php-email-form input {
  padding: 10px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type="submit"] {
  background: #cc1616;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #e82d2d;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

    </style>
    <?php require("./header.php") ?>
</head>
<section style="background: url( 'assets/img/cus.jpg' );background-position-x:40%; background-position-y:40%; " id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-delay="100">
      <h1>Contact Us</h1>
      <h2>Our Door is always open to help you</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section>
<body>
    <?php 
        @include("./navbar.php");
    ?>


<main id="main">

    <center>
<div class="container">
    <?php 
      if($_GET['class']=="LANG"){
        ?>                    <h3> 1ST PU Languages</h3>

       <div class="row">
        <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
<img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Kannada Study Materials [PUC]</h5>
<a href="waste?class=PUSC"  class="btn btn-danger">View</a>
</div>
</div>
         </div> <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
<img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">English Study Materials [PUC]</h5>
<a href="waste?class=PUSC"  class="btn btn-danger">View</a>
</div>
</div>
         </div>
         <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
<img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Hindi Study Materials [PUC]</h5>
<a href="waste?class=PUSC"  class="btn btn-danger">View</a>
</div>
</div>
         </div>
     
       </div>       <h3> 2ND PU Languages</h3>
               <div class="row">
               <div class="col-lg-4">
               <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kannada Study Materials [PUC]</h5>
    <a href="waste?class=PUSC"  class="btn btn-danger">View</a>
  </div>
</div>
                </div> <div class="col-lg-4">
               <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">English Study Materials [PUC]</h5>
    <a href="waste?class=PUSC"  class="btn btn-danger">View</a>
  </div>
</div>
                </div>
                <div class="col-lg-4">
               <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hindi Study Materials [PUC]</h5>
    <a href="waste?class=PUSC"  class="btn btn-danger">View</a>
  </div>
</div>
                </div>
            
              </div>

              
        <?php

      }elseif($_GET['class']=="PUSC"){
       ?> 
  
      <h3> 1ST PU Science</h3>
            <div class="row">
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Physics Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cemistry Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
            </div>
            <div class="row">
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mathematics Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bilogy Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
          <div class="row">
            <div class="col">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Computer Science Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
          </div>
            </div>
            <h3> 2ND PU Science</h3>
            <div class="row">
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Physics Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cemistry Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
            </div>
            <div class="row">
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mathematics Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
              <div class="col-lg-6">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bilogy Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
          <div class="row">
            <div class="col">  <div class="card" style="width: 18rem;">
  <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Computer Science Study Materials </h5>
    <a href="waste?class=DEG"  class="btn btn-success">View</a>
  </div>
</div></div>
          </div>
            </div>
     
       <?php
      }elseif($_GET['class']=="PUCM"){
        ?> 

     <h3> 1ST PU Commerce</h3>
        <div class="row">
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Economics Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Business Studies Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
             </div>
             <div class="row">
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
   <h5 class="card-title">Accountancy Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Computer Science Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
           
             </div>
             <h3> 2ND PU Commerce</h3>
             <div class="row">
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Economics Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Business Studies Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
             </div>
             <div class="row">
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
   <h5 class="card-title">Accountancy Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
   </div>
 </div></div>
               <div class="col-lg-6">  <div class="card" style="width: 18rem;">
   <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2020/07/solar_orbiter_s_first_view_of_the_sun2/22133123-1-eng-GB/Solar_Orbiter_s_first_view_of_the_Sun_pillars.png" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Computer Science Study Materials </h5>
     <a href="waste?class=DEG"  class="btn btn-success">View</a>
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

            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    </body>
</html>