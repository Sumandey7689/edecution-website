<?php
include 'connection.php';
session_start();
$userprofile = $_SESSION['registration_no'];
if ($userprofile != true) {
    header('location: index.php');
}
$result = mysqli_query($conn, "SELECT * FROM `student_tbl` WHERE registration_no='$userprofile'");
$data = mysqli_fetch_assoc($result);

if ($data['image'] != null) {
    $image = $data['image'];
}
else{
    $image = "assets/service_icons/blank-profile-picture.png";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Student login</title>

</head>

<style>
    .close {
        position: relative;
        left: -35px;
        top: -78px;
    }

    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }
</style>

<body>

    <?php include 'header.php'; ?>

    <!-- Hero Part -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><span class="color-front" style=margin-left:10px><strong>Home</strong></span></a></li>
            <li class="breadcrumb-item"><a href="student_login.php"><span class="color-front" style=margin-left:10px><strong>Student Panel</strong></span></a></li>
        </ol>
    </nav>

    <!-- Page Title Part -->
    <div class="page_name">
        <h2>Student Panel</h2>
        <img src="assets/img/line.png">
    </div>

    <div class="container" style="margin-top: 10px; margin-bottom: 50px;">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-auto color-front">
                    <div class="card" style="box-shadow: 0 0 10px 0px #363d59; height: 375px;">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="profileimg" style="border: 2px solid black;" <?php echo 'src="' . $image . '"' ?> alt="Admin" class="rounded-circle" width="150px" hight="150px" >
                                <div class="mt-5">
                                    <h5><?php echo $data['full_name']; ?></h5>
                                    <p class="text-secondary mb-1">CST 4th Semester Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body faqcard">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['full_name']; ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Father's Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['fathers_name']; ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Registration No</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['registration_no']; ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Roll</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['roll']; ?>
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
                                        <?php echo $data['deptartment']; ?>
                                    </h6>
                                </div>
                            </div>
                            <hr style="border: 1px solid black">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Course Duration</h6>
                                </div>
                                <div class="col-sm-9">
                                    <h6>
                                        <?php echo $data['courseduration']; ?>
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

</html>