<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <style>
        #courses {
            color: #3E64FF;
        }
        figure{
            width: 100%;
            height:100%;
        }
        
body{
    background-color:#F6F5F5!important;
}

  /* .container0{ 
  height: 100vh;
  width: 100vw;
  max-height: 800px;
  max-width: 1280px;
  min-height: 600px;
  min-width: 1000px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin: 0 auto;
  } */
.border{ 
  height: 300px;
  width: 300px;
  background: transparent;
  border-radius: 10px;
  transition: border 1s;
  position: relative;
        }
 
.card{ 
  height: 300px;
  width: 300px;
  background: grey;
  border-radius: 10px;
  transition: background 0.8s;
  overflow: hidden;
  background: black;
  box-shadow: 0 70px 63px -60px #000000;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  margin-top:25px;
}
.card0{ 
    border-radius: 10px !important;
  background: url('assets/img/courses/pcmb_bef.jpg') center center no-repeat
  ;background-size: 700px;
}
  .card0:hover{ 
    border-radius: 10px;
    background: url('assets/img/courses/pcmb_bef.jpg') left center no-repeat 
   ; background-size: 1000px;
   backdrop-filter: blur(10px);
  }

   .card0:hover h2{  
      opacity: 1;
    }
    .card0:hover h4{  
      opacity: 1;
    }
    .card0:hover .fa { 
      opacity: 1;
    }

  

  .card0 h2 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 1;
  transition: opacity 1s;
    }
   
    .card0 h4 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 0;
  transition: opacity 1s;
    }
    



    
.card1{ 
    border-radius: 10px !important;
  background: url('assets/img/courses/pcmcs_bef.jpg') center center no-repeat
  ;background-size: 700px;
}
  .card1:hover{ 
    border-radius: 10px !important;
    background: url('assets/img/courses/pcmcs_bef.jpg') left center no-repeat 
   ; background-size: 800px;

  }

   .card1:hover h2{  
      opacity: 1;
    }
    .card1:hover h4{  
      opacity: 1;
    }
    .card1:hover .fa { 
      opacity: 1;
    }

  

  .card1 h2 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 1;
  transition: opacity 1s;
    }

    .card1 h4 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 0;
  transition: opacity 1s;
    }
    



    .card2{  border-radius: 10px !important;
  background: url('assets/img/courses/ebacs_bef.jpg') center center no-repeat
  ;background-size: 700px;
}
  .card2:hover{  border-radius: 10px !important;
    background: url('assets/img/courses/ebacs_bef.jpg') left center no-repeat 
   ; background-size: 800px;
   backdrop-filter: blur(10px);
  }

   .card2:hover h2{  
      opacity: 1;
    }
    .card2:hover h4{  
      opacity: 1;
    }
    .card2:hover .fa { 
      opacity: 1;
    }

  

  .card2 h2 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 1;
  transition: opacity 1s;
    }

    .card2 h4 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 0;
  transition: opacity 1s;
    }
    
   

    .card3{ 
  background: url('assets/img/courses/b.com_bef.jpg') center center no-repeat
  ;background-size: 500px;
  border-radius: 10px !important;
}
  .card3:hover{ 
    background: url('assets/img/courses/b.com_bef.jpg') left center no-repeat 
   ; background-size: 600px;
   backdrop-filter: blur(10px);
   border-radius: 10px !important;
  }

   .card3:hover h2{  
      opacity: 1;
    }
    .card3:hover h4{  
      opacity: 1;
    }
    .card3:hover .fa { 
      opacity: 1;
    }

    .section-title{
      margin-left:40px;
    }
  

  .card3 h2 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 1;
  transition: opacity 1s;
    }

    .card3 h4 { 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: white;
  margin: 20px;
  opacity: 0;
  transition: opacity 1s;
    }
    


    </style>
    <?php require("./header.php") ?>


</head>
<body>
    <?php 
        @include("./navbar.php");
    ?>







<section style="background: url( 'assets/img/courses/head.jpg' ) " id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-delay="100">
      <h1>Courses Offered</h1>
      <h2>Learn Without Limits</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section>


<main id="main"> 

<section>



<div style=" border-radius:25px; background-color:white;" class="container">


<br>
<br>


       <div data-aos="fade-right" data-aos-delay="100" class="section-title">
                    <h2>Pre University Course</h2>
                    <p>Pre University Course</p>
                </div> 
    
    <br>
    <div class="row"> 
        
  

<div  class="col-lg-8"><h4 data-aos="fade-right" data-aos-delay="100"> <center><b>Science</b></center> </h4></div>
    
<div class="col-lg-4"><center>
        <h4 data-aos="fade-left" data-aos-delay="100">
            <b>Commerce</b>
        </h4>
    </center></div>

<br>
<br>


<div data-aos="zoom-in" data-aos-delay="100" class="col-lg-4"> 
<center> 
  <div  class="card card0">
     <div class="border">
         <br>
      <h1 style="color:white;">PCMB</h1>

      <h4>Physics</h4>
      <h4>Chemistry</h4>
      <h4>Maths</h4>
      <h4>Biology</h4>

      </div>
 </div>
 </div>
 </center>
 <div data-aos="zoom-in" data-aos-delay="100" class="col-lg-4"> 
 <center> 
 <div  class="card card1">
     <div class="border">
     <br>
      <h1 style="color:white;">PCMCS</h1>

      <h4>Physics</h4>
      <h4>Chemistry</h4>
      <h4>Maths</h4>
      <h4>Computer Science</h4>
 
      </div>
 </div>
 
 </div>
 </center>





 
    <br>
<br>

    <div data-aos="zoom-in" data-aos-delay="100" class="col-lg-4"> 

<center> 
  <div  class="card card2">
     <div class="border">
         <br>
      <h1 style="color:white;">EBACS</h1>

      <h4>Economics</h4>
      <h4>Business Studies</h4>
      <h4>Accountancy</h4>
      <h4>Computer Science</h4>

      </div>
 </div>
</center>


 </div>






  
</div>



<br>
<br>
<br>
<br>

<br>
<br>
<br>
<div class="row">

  <div data-aos="fade-right" data-aos-delay="100" class="section-title">
                    <h2>Bachelor’s Degree</h2>
                    <p>Bachelor’s Degree</p>
                </div> 
        


 <br>
 <br>
    <center>
        <h4 data-aos="fade-right" data-aos-delay="100">
         <b>   B.Com</b>
        </h4>
    </center>
</div>

<div data-aos="zoom-in" data-aos-delay="100" class="col-lg-12">
<center> 
  <div  class="card card3">
     <div class="border">
         <br>
      <h1 style="color:white;">EBACS</h1>

      <h4>Economics</h4>
      <h4>Business Studies</h4>
      <h4>Accountancy</h4>
      <h4>Computer Science</h4>

      </div>
 </div>
</center>
</div>


    </div>
</section>



</main>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>