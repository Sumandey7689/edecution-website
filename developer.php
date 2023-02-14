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
            <li class="breadcrumb-item"><a href="developer.php"><span class="color-front" style=margin-left:10px><strong>Developer</strong></span></a></li>
        </ol>
    </nav>

    <!-- Page Title Part -->
    <div class="page_name">
        <h2>DEVELOPER TEAM</h2>
        <img src="assets/img/line.png">
    </div>

    <div class="bg-light py-5" style="margin-top: -50px;">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5 color-front">
                    <h3>Our Developer Team</h3>
                    <p class="font-italic text-muted"><strong>Our developers are experienced in creating
                            business-critical,
                            enterprise-wide, client-server applications that manage client's business processes</strong>
                    </p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><a href="tel:+91 8944961893"><img src="assets/developer_img/suman.png" alt="" width="100" class="img-fluid rounded-circle mb-4 img-thumbnail shadow-sm"></a>
                        <h5 class="mb-0">Suman Dey</h5><span class="small text-uppercase text-muted">Frontend
                            Developer</span>
                        </ul>
                    </div>
                </div>

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><a href="tel:+91 8436359103"><img src="assets/developer_img/ankur.png.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                        <h5 class="mb-0">Ankur Dhol</h5><span class="small text-uppercase text-muted">Frontend
                            Developer</span>
                    </div>
                </div>

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><a href="tel:+91 9800413284"><img src="assets/developer_img/sayan.png.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                        <h5 class="mb-0">Sayan Banerjee</h5><span class="small text-uppercase text-muted">Backend
                            Developer</span>
                    </div>
                </div>

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><a href="tel:+91 8617510857"><img src="assets//developer_img/dhrubo.png.jpg" alt="" width="100" class="img-fluid rounded-circle mb-4 img-thumbnail shadow-sm"></a>
                        <h5 class="mb-0">Dhrubojyoti Mondal</h5><span class="small text-uppercase text-muted">SQL
                            Developer</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>