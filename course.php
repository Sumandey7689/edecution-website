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

    <!-- Hero Part -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><span class="color-front" style=margin-left:10px><strong>Home</strong></span></a></li>
            <li class="breadcrumb-item"><a href="course.php"><span class="color-front" style=margin-left:10px><strong>Course</strong></span></a></li>
        </ol>
    </nav>

    <!-- Page Title Part -->
    <div class="page_name">
        <h2>Course</h2>
        <img src="assets/img/line.png">
    </div>

    <!-- Course Part -->
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="color: #000000">
                    <strong style="font-size: 35px;">POPULAR COURSES</strong>

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

                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card boxcard">
                        <img src="assets/img/index_course5.jpg" class="card-img-top" alt="..." height="190px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><strong>Electrical Engineering</strong></h5>
                            <a href="electrical_engineering.php" class="btn btn-primary get-btn-master">Tap to View Details</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card boxcard">
                        <img src="assets/img/index_course4.jpg" class="card-img-top" alt="..." height="190px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><strong>Electronics Engineering</strong></h5>
                            <a href="electronics_enginnering.php" class="btn btn-primary get-btn-master">Tap to View Details</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="card boxcard">
                        <img src="assets/img/index_course6.jpg" class="card-img-top" alt="..." height="190px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><strong>Coming Soon</strong></h5>
                            <a href="admission.php" class="btn btn-primary get-btn-master">Tap to View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>