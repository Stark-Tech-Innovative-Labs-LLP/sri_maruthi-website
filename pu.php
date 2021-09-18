<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <title>Sri Maruthi PU College - Moulding Better Tomorrow through Education & Excellence</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        #pu {
            color: #3E64FF;
        }
        .maincard {
            position: relative;
            width: 300px;
            height: 300px
        }

        .thecard {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: all 0.8s ease
        }

        .thecard:hover {
            transform: rotateY(180deg)
        }

        .thefront {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: hidden;
            background: #3E64FF;
            color: #fff;
            border-radius: 10px;
            cursor: pointer;
            border: 1px solid #eee;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            padding: 10px
        }

        .theback {
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
            background-color: hidden;
            background: yellow;
            color: #fff;
            border-radius: 10px;
            transform: rotateY(180deg);
            border: 1px solid #eee;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            padding: 10px
        }

        .user_name {
            color: #eee;
            font-size: 10px;
            margin-top: 0px
        }

        .about {
            font-size: 12px
        }

        #hero {
            width: 100%;
            height: 80vh;
            background: url("../img/books.jpg") top center;
            background-size: cover;
            position: relative;
        }

        section {
            padding: 60px;
        }

        .quote p {
            color: black;
        }

        .para1 {
            font-size: 15px;
        }


    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <?php require("./header.php") ?>
    <?php @include("./navbar.php"); ?>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: url('assets/img/book.jpg')">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>PUC</h1>
            <h2>A happy school, A brighter future. Creating a path of knowledge</h2>
            <a href="./contact" class="btn-get-started">Contact Us</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/chairmen.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>WELCOME TO SRI MARUTHI PU COLLEGE.</h3>
                       <br>
                        <p class="para1">
                            " Sri Maruthi college are certainly Asia’s esteemed power houses for intranational and international competitive courses.
                            We equip the students fully to accomplish their goals and acquire the confidence of high level peers in all the global fields.
                            The academic staff members are stalwarts can guide and steer the students in right direction like beacon of light.
                            The breadth and depth of our integrated, concept-based and student-centered academic schedules foster the students to stand out from the rest and crack easily any competitive examination.
                            The alumni spread across the globe speaks of their victory. Your victory is our history."
                        </p>
                        <br>
                        <br>
                        <span><b style="font-size: 15px;"> - Chairman , Sri Maruthi College</b></span>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- what we offer  -->


        <!-- End Why Us Section -->

        <!-- what we offer end / -->




        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter">+</span>
                        <p>Years Of Excellence</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Students</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Faculty</p>
                    </div>

                    <!-- <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div> -->

                </div>

            </div>
        </section><!-- End Counts Section -->



        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Students</h2>
                    <p>Students Testimonials</p>
                </div>

                <div class="container  d-flex justify-content-center ">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Jane Dae</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify"> <b>Pursuing 1 year MBBS @ Sri Maruthi PU College 2020 batch</b> <br> <br> " Loved the staff and the personal care of chairman sir, I would suggest to all my juniors this college. Hostel facilities were also good and individual care is taken, Best teachers for competitive exams."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Manor Josa</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify"><b>Pursuing 1 year MBBS @ Sri Maruthi PU College 2020 batch</b> <br> <br> " Getting a medical seat this year amidst Covid 19 Pandemic, Lock down, uncertainty of NEET exams was only possible due the to unrelenting effort by my teachers at Sri Maruthi PU College who conducted the online classes and mentoring with great punctuality, passion and efficiency ."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/8JiAQGa.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Sandeep</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify"><b>Pursuing Science Stream (PCMB) @ Sri Maruthi PU College 2020 batch</b> <br> <br> " Coming from Kendriya Vidyalaya Bagalkot with just 56% in 10th Std, many colleges declined to offer me admission to I PU Science but Sai Maruti PU College not only provided me admission, the staff helped me successfully clear my Board Exams and also secure a seat in Science stream." </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Popular Courses Section -->

            <!-- ======= Trainers Section ======= -->

            <div class="container" data-aos="fade-up">
                <div class="container  d-flex justify-content-center ">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Jane Dae</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Manor Josa</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/8JiAQGa.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Jimmy Anderson</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            </div>
        </section><!-- End Trainers Section -->

        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Parents</h2>
                    <p>Parents Testimonials</p>
                </div>

                <div class="container  d-flex justify-content-center ">
                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Rekha Manappa</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify"><b>HBR Layout, Bangalore</b> <br> <br>
                                            " (Mother of Lochan Karthick - Student of Sri Maruthi PU College (2016-18) who secured a Engineering seat in IIT KANPUR)
                                            I am really Happy that my son is studying @ IIT Kanpur. Thank you Sri Maruthi PU College for the opportunity and encouragement. "
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Narasayya</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify"><b>Sindhanur, Karnataka</b> <br> <br>
                                " (Father of M Nagavarun – Student of Sri Maruthi PU College ( 2017-19) - Pursuing 2 year MBBS & Karnataka Institute of Medical Sciences,Vidyanagar,Hubli, Student of Sri Maruthi PU College 2019 Batch.)
                                Sri Maruthi PU College is one of the very few colleges in Karnataka where the owner / chairman himself closely monitors the students and motivates them to achieve success. "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/8JiAQGa.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">V. Basavaraj</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify"><b>Bagepalli, Karnataka</b> <br> <br>
                            "(Father of Bhavya B – Student of Sri Maruthi PU College ( 2017-19) - Pursuing 2 year BSc ( Seri ) @ College of Sericulture, Chintamani. Student of Sri Maruthi PU College 2019 Batch)
                            Sri Maruthi PU College Management and staff are very friendly with Parents, also the college is consistently delivering good results since 3 years, my daughter completed PUC and got a seat in College of Sericulture, Chintamani, I will always be one of their well wishers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Popular Courses Section -->

            <!-- ======= Trainers Section ======= -->

            <div class="container" data-aos="fade-up">
                <div class="container mt-5 d-flex justify-content-center ">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Jane Dae</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Manor Josa</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="maincard p-3">
                                <div class="thecard">
                                    <div class="thefront text-center py-4"> <img src="https://i.imgur.com/8JiAQGa.jpg" class="rounded-circle mt-5" width="100">
                                        <h3 class="mt-2 mb-0">Jimmy Anderson</h3>
                                    </div>
                                    <div class="theback py-3 px-3">
                                        <div class="quote mt-3">
                                            <h4><i class="fa fa-quote-left"></i></h4>
                                            <p class="about text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </section><!-- End Trainers Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Important Links</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Get In Touch</h3>
                            <img src="img/contact-us-1530424_640.png" alt="" style="width:140px; height:auto;">
                            <p>"Success is not final; failure is not fatal: <br> It is the courage to continue that counts."</p>

                            <div class="text-center">
                                <a href="contact" class="more-btn">Contact Us <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <a href="Courses"><i class="bx bx-receipt"></i>
                                            <h4>Courses</h4>
                                        </a>
                                        <p>" Your gateway to success <br>We offer you a brighter future "</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <a href="StudyMaterial"><i class="bx bx-cube-alt"></i>
                                            <h4>Study Materials</h4>
                                        </a>
                                        <p>" Premium learning experience <br> Every lesson counts "</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <a href="Gallery"> <i class="bx bx-images"></i>
                                            <h4>Gallery</h4>
                                        </a>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php
    include("footer.php");
    include("libs.php"); ?>


</body>

</html>