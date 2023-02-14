<?php
include 'connection.php';
session_start();
$insert = false;
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}
if (isset($_POST['submitStudent'])) {

    $full_name = $_POST['full_name'];
    $fathers_name = $_POST['fathers_name'];
    $registration_no = $_POST['registration_no'];
    $roll = $_POST['roll'];
    $deptartment = $_POST['deptartment'];
    $courseduration = $_POST['courseduration'];
    $image = $_POST['image'];
    $password = sha1($_POST['password']);

    if ($full_name != null && $fathers_name != null && $registration_no != null && $roll != null && $deptartment != null && $courseduration != null && $password != null) {
        $sql = "INSERT INTO $db.`student_tbl`(
            `full_name`,
            `fathers_name`,
            `registration_no`,
            `roll`,
            `deptartment`,
            `courseduration`,
            `image`,
            `password`,
            `date`
        )
        VALUES(
            '$full_name',
            '$fathers_name',
            '$registration_no',
            '$roll',
            '$deptartment',
            '$courseduration',
            '$image',
            '$password',
            CURRENT_TIMESTAMP()
        );";
        if ($conn->query($sql) === TRUE) {
            header('location: student-list.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $insert = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <?php
    if ($insert) {
    ?>

        <body onload="codeAddressFalid();"></body>
    <?php
    }
    ?>

    <div id="wrapper">

        <?php include 'header.php'; ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-10">
                        <h4 class="m-t-0 header-title"><b><strong>ADD NEW STUDENT</strong></b></h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="POST">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="form-control" name="full_name" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Registration No</label>
                                    <input class="form-control" name="registration_no" placeholder="Enter Registration No">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input class="form-control" name="fathers_name" placeholder="Enter Father's Name">
                                </div>
                                <div class="form-group">
                                    <label>Roll No</label>
                                    <input class="form-control" name="roll" placeholder="Enter Roll No">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="form-control" name="deptartment" placeholder="Enter Department">
                                </div>
                                <div class="form-group">
                                    <label>Image URL (Optional)</label>
                                    <input class="form-control" name="image" placeholder="Enter Image URL">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" name="courseduration" placeholder="Enter Course Duration">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" name="submitStudent" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script>
        function codeAddressFalid() {
            swal({
                ttitle: "Field Empty",
                text: "Please Check the missing field",
                icon: "warning",
                button: "Okk!",
            });
        }
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>