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


     <main id="main" >
         <br>



<br>

<section id="contact" class="contact">
      <div class="container">

        <div style="margin-top:25px;" id="contact_us_txt" >
        <h2  style="font-weight:1000;color:black;" >  We're here to help you! </h2>

        <h5 style="color:black;">
Thanks for reaching us out,
We will Contact you soon
        </h5>

        </div>

        <br>
        <div class="row" >
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" >

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
         <img style="width:100%;" src="assets/img/contact/contact_us_1.png" alt="">
            </div>

          <div class="col-lg-6">
          <form style=" background-color:white; width: 90%;border:1px solid ; border-color:rgba(40, 79, 235, 0.72) ; border-radius:25px; padding:10%;">
  <div class="row">
    <div class="col">
        <label for="name">Name:</label>
      <input name="name" type="text"  class="form-control" placeholder="name">
    </div>
    </div>

    <div class="row">
    <div class="col">
        <label style="margin-top:20px;" for="email">Email-Id:</label>
      <input name="email" type="email"     class="form-control" placeholder="@gmail.com">
    </div>
 </div>
 <div class="row">
 <div class="col-lg-6 col-sm-12">
        <label style="margin-top:20px;" for="class">Class:</label>
      <input name="class" type="text"  class="form-control" placeholder="Class">
    </div>
    <div class="col-lg-6 col-sm-12">
        <div> 
        <label style="margin-top:20px;" for="class">Branch:</label> 
        </div>


        <select class="form-select" aria-label="Default select example">
  <option selected>Select</option>
  <option value="pcmb">PCMB</option>
  <option value="pcmcs">PCMCS</option>
  <option value="ebacs">EBACS</option>
</select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col"> 
        <label for="address">Address:</label>
        <textarea rows="4"  data-gramm_editor="false" class="form-control" aria-label="With textarea"></textarea>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
        <label for="mobno">Mobile No. :</label>
        <input name="mobno" type="tel"  class="form-control" placeholder="Mobile Number">
    </div>
    </div>
    <button id="btn_submit_contact" class="btn btn-primary" type="submit"> Submit </button>
</form>  
          </div>

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