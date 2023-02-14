<?php
include 'connection.php';
session_start();
$insert = false;
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}

if (isset($_POST['submitPage'])) {
    if (!empty($_POST['RoleType'])) {
        $selected = $_POST['RoleType'];
        $facultysname = $_POST['facultysname'];
        $designation = $_POST['designation'];
        $qualification = $_POST['qualification'];
        if ($facultysname != null && $designation != null && $qualification != null) {
            if ($selected == '1') {


                $sql = "INSERT INTO $db.`computer_sciencetechnology`(
            `facultysname`,
            `designation`,
            `qualification`,
            `date`
            )
            VALUES(
            '$facultysname',
            '$designation',
            '$qualification',
            CURRENT_TIMESTAMP()
            );";
                if ($conn->query($sql) === TRUE) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '2') {

                $sql = "INSERT INTO $db.`electronics_enginnering`(
            `facultysname`,
            `designation`,
            `qualification`,
            `date`
            )
            VALUES(
            '$facultysname',
            '$designation',
            '$qualification',
            CURRENT_TIMESTAMP()
            );";
                if ($conn->query($sql) === TRUE) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '3') {

                $sql = "INSERT INTO $db.`electrical_engineering`(
            `facultysname`,
            `designation`,
            `qualification`,
            `date`
            )
            VALUES(
            '$facultysname',
            '$designation',
            '$qualification',
            CURRENT_TIMESTAMP()
            );";
                if ($conn->query($sql) === TRUE) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '4') {

                $sql = "INSERT INTO $db.`mechanical_enginnering`(
            `facultysname`,
            `designation`,
            `qualification`,
            `date`
            )
            VALUES(
            '$facultysname',
            '$designation',
            '$qualification',
            CURRENT_TIMESTAMP()
            );";
                if ($conn->query($sql) === TRUE) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '5') {

                $sql = "INSERT INTO $db.`civil_enginnering`(
            `facultysname`,
            `designation`,
            `qualification`,
            `date`
            )
            VALUES(
            '$facultysname',
            '$designation',
            '$qualification',
            CURRENT_TIMESTAMP()
            );";
                if ($conn->query($sql) === TRUE) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            $insert = true;
        }
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
                        <h4 class="m-t-0 header-title"><b><strong>ADD NEW RECORD</strong></b></h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="POST">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control" name="RoleType">
                                        <option selected>--- Select ---</option>
                                        <option value="1">Computer Science Technology</option>
                                        <option value="2">Electronics Engineering</option>
                                        <option value="3">Electrical Engineering</option>
                                        <option value="4">Mechanical Engineering</option>
                                        <option value="5">Civil Engineering</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input class="form-control" name="designation" placeholder="Enter Designation">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name of Faculty</label>
                                    <input class="form-control" name="facultysname" placeholder="Enter Name of Faculty">
                                </div>
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input class="form-control" name="qualification" placeholder="Enter Qualification">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" name="submitPage" class="btn btn-primary">Save</button>
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