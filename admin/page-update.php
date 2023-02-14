<?php
include 'connection.php';
session_start();
$insert = false;
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dep = $_GET['department'];
    if ($dep == "cst") {
        $result = mysqli_query($conn, "SELECT * FROM `computer_sciencetechnology` WHERE `id`=$id");
        $data = mysqli_fetch_assoc($result);
    } elseif ($dep == "et") {
        $result = mysqli_query($conn, "SELECT * FROM `electronics_enginnering` WHERE `id`=$id");
        $data = mysqli_fetch_assoc($result);
    } elseif ($dep == "ee") {
        $result = mysqli_query($conn, "SELECT * FROM `electrical_engineering` WHERE `id`=$id");
        $data = mysqli_fetch_assoc($result);
    } elseif ($dep == "me") {
        $result = mysqli_query($conn, "SELECT * FROM `mechanical_enginnering` WHERE `id`=$id");
        $data = mysqli_fetch_assoc($result);
    } elseif ($dep == "civil") {
        $result = mysqli_query($conn, "SELECT * FROM `civil_enginnering` WHERE `id`=$id");
        $data = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['submitPage'])) {
    if (!empty($_POST['RoleType'])) {
        $selected = $_POST['RoleType'];
        $facultysname = $_POST['facultysname'];
        $designation = $_POST['designation'];
        $qualification = $_POST['qualification'];
        if ($facultysname != null && $designation != null && $qualification != null) {
            if ($selected == '1') {
                $recoed = mysqli_query($conn, "UPDATE $db.`computer_sciencetechnology`
            SET
                `facultysname` = '$facultysname',
                `designation` = '$designation',
                `qualification` = '$qualification'
            WHERE
                `id` = $id");
                if ($recoed) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '2') {
                $recoed = mysqli_query($conn, "UPDATE $db.`electronics_enginnering`
                SET
                    `facultysname` = '$facultysname',
                    `designation` = '$designation',
                    `qualification` = '$qualification'
                WHERE
                    `id` = $id");
                if ($recoed) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '3') {
                $recoed = mysqli_query($conn, "UPDATE $db.`electrical_engineering`
                SET
                    `facultysname` = '$facultysname',
                    `designation` = '$designation',
                    `qualification` = '$qualification'
                WHERE
                    `id` = $id");
                if ($recoed) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '4') {
                $recoed = mysqli_query($conn, "UPDATE $db.`mechanical_enginnering`
                SET
                    `facultysname` = '$facultysname',
                    `designation` = '$designation',
                    `qualification` = '$qualification'
                WHERE
                    `id` = $id");
                if ($recoed) {
                    header('location: page-list.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else if ($selected == '5') {
                $recoed = mysqli_query($conn, "UPDATE $db.`civil_enginnering`
                SET
                    `facultysname` = '$facultysname',
                    `designation` = '$designation',
                    `qualification` = '$qualification'
                WHERE
                    `id` = $id");
                if ($recoed) {
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
                                        <?php
                                        if ($dep == "cst") {
                                        ?>
                                            <option value="1" selected>Computer Science Technology</option>
                                        <?php
                                        } elseif ($dep == "et") {
                                        ?>
                                            <option value="2" selected>Electronics Engineering</option>
                                        <?php
                                        } elseif ($dep == "ee") {
                                        ?>
                                            <option value="3">Electrical Engineering</option>
                                        <?php
                                        } elseif ($dep == "me") {
                                        ?>
                                            <option value="4">Mechanical Engineering</option>
                                        <?php
                                        } elseif ($dep == "civil") {
                                        ?>
                                            <option value="5">Civil Engineering</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input value="<?php echo $data['designation'] ?>" class="form-control" name="designation" placeholder="Enter Designation">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name of Faculty</label>
                                    <input value="<?php echo $data['facultysname'] ?>" class="form-control" name="facultysname" placeholder="Enter Name of Faculty">
                                </div>
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input value="<?php echo $data['qualification'] ?>" class="form-control" name="qualification" placeholder="Enter Qualification">
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