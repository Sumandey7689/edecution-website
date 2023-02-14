<?php
$acess = false;
$Tpopup = false;
include 'connection.php';
session_start();
$userprofile = $_SESSION['usernameTeacher'];
if ($userprofile != true) {
    header('location: index.php');
}
$result = mysqli_query($conn, "SELECT * FROM `teachers_tbl` WHERE username='$userprofile'");
$data = mysqli_fetch_assoc($result);

if ($data['image'] != null) {
    $image = $data['image'];
} else {
    $image = "assets/service_icons/blank-profile-picture.png";
}

if (isset($_POST['search'])) {
    $registration_no = $_POST['registration_no'];

    $result = mysqli_query($conn, "SELECT * FROM `student_tbl`");
    while ($rows = mysqli_fetch_assoc($result)) {
        if ($rows['registration_no'] == $registration_no) {
            $acess = true;
        }
    }
    if ($acess) {
        session_start();
        $_SESSION['registration_no'] = $registration_no;
        header('location: student_login.php');
    } else {
        $Tpopup = true;
    }
}

?>
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

    <?php
    if ($Tpopup) {
    ?>

        <body onload="codeAddressErrorR();"></body>
    <?php
    }
    ?>

    <!-- Hero Part -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><span class="color-front" style=margin-left:10px><strong>Home</strong></span></a></li>
            <li class="breadcrumb-item"><a href="teachers_login.php"><span class="color-front" style=margin-left:10px><strong>Techers Panel</strong></span></a></li>
        </ol>
    </nav>

    <!-- Page Title Part -->
    <div class="page_name">
        <h2>Techers Panel</h2>
        <img src="assets/img/line.png">
    </div>

    <div class="container justify-content-center">
        <div class="container-fluid">
            <form class="d-flex" role="search" method="POST">
                <input class="form-control me-2" style="border-radius: 5px; border: 1.5px solid black;" type="search" placeholder="Registration No" aria-label="Search" name="registration_no">
                <button class="btn btn-outline-success" style="border-radius: 5px; margin-left: 5px; margin-top: -1px; border: 1.5px solid black;" name="search" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-auto color-front">
                    <div class="card" style="box-shadow: 0 0 10px 0px #363d59;">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="profileimgt" style="border: 2px solid black;" <?php echo 'src="' . $image . '"' ?> alt="Admin" class="rounded-circle">
                                <div class="mt-2">
                                    <h5><?php echo $data['firstname'] . ' ' . $data['lastname']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body" style="box-shadow: 0 0 10px 0px #363d59;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">First Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['firstname'] ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Last Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['lastname'] ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Department</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['deptartment'] ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['number'] ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
<script>
    function codeAddressErrorR() {

        swal({
            ttitle: "Invalid Details",
            text: "Invalid Registration No",
            icon: "error",
            button: "Okk!",
        });
    }
</script>

</html>