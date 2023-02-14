<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style type="text/css">
        .navbar-nav>li>.dropdown-menu a:link,
        .navbar-nav>li>.dropdown-menu a:hover {
            background-color: #350cea;
        }
    </style>

    <title>Berhampore Polytechnic College</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- Slider Part -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/IMG_20220804_140914.jpg" height="550px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>OUR COURSES</h2>
                    <p>Building a better world, one course at a time</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/IMG_20220804_141053.jpg" height="550px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>OUR COURSES</h2>
                    <p>Building a better world, one course at a time</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/IMG_20220804_141201.jpg" height="550px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>OUR COURSES</h2>
                    <p>Building a better world, one course at a time</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Course Part -->
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="color: #000000">
                    <strong style="font-size: 35px;">OUR POPULAR COURSES</strong>

                </h3>
            </div>
            <div class="row">

                <!-- course item -->
                <div class="col-lg-4 col-md-3 course-item wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card boxcard">
                        <img src="assets/img/index_course1.jpg" class="card-img-top" alt="..." width="290px" height="190px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><strong>Civil Engineering</strong></h5>
                            <a href="civil_enginnering.php" class="btn btn-primary get-btn-master">Tap to View Details</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card boxcard">
                        <img src="assets/img/index_course2.jpg" class="card-img-top" alt="..." height="190px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><strong>Computer Science Engineering</strong>
                            </h5>
                            <a href="computer_sciencetechnology.php" class="btn btn-primary get-btn-master">Tap to View Details</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card boxcard">
                        <img src="assets/img/index_course3.jpg" class="card-img-top" alt="..." height="190px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><strong>Mechanical Engineering</strong></h5>
                            <a href="mechanical_enginnering.php" class="btn btn-primary get-btn-master">Tap to View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Now Part -->
    <div class="admission-section" style="background-image:url(assets/img/apply-section.jpg); background-position: left;">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <h2 style="font-family: Poppins" ;>Apply for Admission</h2>
                    <h4><strong> invites students to apply to its stellar courses in
                            order to experience world-class education in our
                            own West Bengal.</strong>
                    </h4>
                    <br>
                    <p> We do not just offer education but impart knowledge beyond the syllabus structure.
                        We contribute to the overall development of the students and help them build their career in<br>
                        their
                        chosen path with ease.</p>
                    <a href="admission.php" class="get-btn-master">Apply Now</a>
                    <a href="admission.php" class="get-btn-master">Online Fee Payment</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Part -->
    <div class="container services" style="margin-top: 40px;">
        <div class="section-title text-center">
            <h3 style="color: #000000"><strong> OUR FACILITIES</strong></h3>
            <p1 style="font-size: 20px; color: #000000;">We provides the opportunity to prepare for life</p1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 service-item wow fadeInLeft" style="visibility: visible;">
                <div class="service-icon">
                    <img src="assets/service_icons/1.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><strong>Sports, Culture</strong></h4>
                    <p style="color :#000000">Nourishing recreational talents in the fields of sports, culture etc</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 service-item wow fadeInRight" style="visibility: visible;">
                <div class="service-icon">
                    <img src="assets/service_icons/2.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><strong>College Hostel</strong></h4>
                    <p style="color :#000000">College Hostel (Boys &amp; Girls Available)</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item wow fadeInLeft" style="visibility: visible;">
                <div class="service-icon">
                    <img src="assets/service_icons/3.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><strong>Medical Assistance</strong></h4>
                    <p style="color :#000000">24x7 medical assistance for students.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item wow fadeInRight" style="visibility: visible;">
                <div class="service-icon">
                    <img src="assets/service_icons/4.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><strong>Placement Assistant</strong></h4>
                    <p style="color :#000000">BPC will provide 100% placement assistant</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item wow fadeInLeft" style="visibility: visible;">
                <div class="service-icon">
                    <img src="assets/service_icons/5.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><strong>Industrial Training</strong></h4>
                    <p style="color :#000000">Exclusive industrial training for 2nd year and 3rd year students</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item wow fadeInRight" style="visibility: visible;">
                <div class="service-icon">
                    <img src="assets/service_icons/6.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><strong>Drinking Water</strong></h4>
                    <p style="color :#000000">Purified cool drinking water plant</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Part -->
    <div class="container" style="margin-bottom: 40px; cursor: pointer;">
        <h1 class="down-head" style="color: #000000"><strong>Frequently Asked Questions</strong></h1>
        <div class="accordion" id="accordionExample">
            <div class="card my-1 faqcard ">
                <div class="card-header collapsed dropdown-toggle" id="faq-1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong>Can I Join Diploma After 10th?</strong>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="faq-1" data-parent="#accordionExample">
                    <div class="card-body">
                        Yes, you can do diploma after 10th…. You have to give a JEXPO exam and according to ur rank you
                        will
                        get admission in engineering college.
                    </div>
                </div>
            </div>
            <div class="card my-1 faqcard">
                <div class="card-header collapsed dropdown-toggle" id="faq-2" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>How Many Years does it take to Complete a Polytechnic Course after 10th?</strong>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="faq-2" data-parent="#accordionExample">
                    <div class="card-body">
                        Polytechnic is a 3-year course which has an extensive and rigorous teaching plus training
                        process.
                        Students after completing their polytechnic courses would have the privilege to take admissions
                        via
                        lateral entry i.e directly to the second year of the engineering program.
                    </div>
                </div>
            </div>
            <div class="card my-1 faqcard">
                <div class="card-header dropdown-toggle" id="faq-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>What is the Procedure to do a B.TECH after Diploma?</strong>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="faq-3" data-parent="#accordionExample">
                    <div class="card-body">
                        B.Tech after diploma is called B.Tech lateral i.e.you get lateral entry in B.Tech which means
                        you
                        get admitted in 2nd year of B.Tech.
                    </div>
                </div>
            </div>
            <div class="card my-1 faqcard">
                <div class="card-header dropdown-toggle" id="faq-4" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <strong>What are the difference between diploma & btech?</strong>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="faq-4" data-parent="#accordionExample">
                    <div class="card-body">
                        Polytechnic education offers an engineering diploma whereas B.Tech. is a degree course and
                        offers a
                        full-fledged engineering degree upon completion of course. Polytechnic is a three-year course
                        whereas B. Tech is a four-year course.
                    </div>
                </div>
            </div>
            <div class="card my-1 faqcard">
                <div class="card-header dropdown-toggle" id="faq-5" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <strong>What Jobs can i get after diploma?</strong>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="faq-5" data-parent="#accordionExample">
                    <div class="card-body">
                        Today, diploma holders are employed as Junior Engineers, Assistant Engineers, executives in
                        hotels,
                        BPO sector and many public and private organizations. The Central and State Government of India
                        provides a large number of opportunities to diploma holders.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
</body>

</html>