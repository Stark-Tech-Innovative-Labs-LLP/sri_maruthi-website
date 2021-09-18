<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sri Maruthi PU College - Moulding Better Tomorrow through Education & Excellence</title>

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




.card{ 
          margin-bottom: 40px !important;
          border-radius:22px !important;
        height:330px; 
        }


        @media only screen and (max-width: 790px) {
  .card {
    width:70% !important;
  }
}




        .section-title{
          margin-top:40px !important;
      margin-left:40px !important;
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

        .row{
          margin:0 !important;
          padding: 0 !important;
        }

        .heading{
          margin-top:  40px !important;
          margin-bottom:  50px !important;
        }







    </style>
    <?php require("./header.php") ?>
</head>
<section style="background: url( 'assets/img/study-material/head1.jpg' );background-position-x:40%; background-position-y:40%; " id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-delay="100">
      <h1>Materials</h1>
      <h2>No matter how busy you may think you are, you must find time for reading</h2>
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
      if($_GET['class']=="PUCK1"){
        ?>                  


              
        <?php

      }elseif($_GET['class']=="PUSE1"){
       ?> 



     
       <?php
      }elseif($_GET['class']=="PUCH1"){
        ?> 



<?php
      }elseif($_GET['class']=="PUCK2"){
        ?> 


<?php
      }elseif($_GET['class']=="PUCE2"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCH2"){
        ?> 

        
<?php
      }elseif($_GET['class']=="PUCP1"){
        ?> 


<?php
      }elseif($_GET['class']=="PUCC1"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCM1"){
        ?> 

<?php
      }elseif($_GET['class']=="PUCB1"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCCS1"){
        ?> 

<?php
      }elseif($_GET['class']=="PUCP2"){
        ?> 


<?php
      }elseif($_GET['class']=="PUCC2"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCM2"){
        ?> 

<?php
      }elseif($_GET['class']=="PUCB2"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCCS2"){
        ?> 



<?php
      }elseif($_GET['class']=="PUCE1"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCBS1"){
        ?> 

<?php
      }elseif($_GET['class']=="PUCCCS1"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCA1"){
        ?> 
        

        
        <?php
      }elseif($_GET['class']=="PUCBS2"){
        ?> 

<?php
      }elseif($_GET['class']=="PUCCCS2"){
        ?> 
        

        <?php
      }elseif($_GET['class']=="PUCA2"){
        ?> 
        

    
        <?php
      }elseif($_GET['class']=="PUCA2"){
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