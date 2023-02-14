<?php
$insert = false;
include 'connection.php';
session_start();
$insert = false;
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM `teachers_tbl` WHERE `id`=$id");
    $data = mysqli_fetch_assoc($result);
}
if (isset($_POST['submitTeacherUpdate'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $deptartment = $_POST['deptartment'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    $username = $_POST['username'];

    if ($_POST['password'] != null) {
        $password = sha1($_POST['password']);
    } else {
        $password = $data['password'];
    }

    if ($firstname != null && $lastname != null && $deptartment != null && $number != null && $email != null && $username != null && $password != null) {
        $recoed = mysqli_query($conn, "UPDATE $db.`teachers_tbl`
    SET
        `firstname` = '$firstname',
        `lastname` = '$lastname',
        `deptartment` = '$deptartment',
        `number` = '$number',
        `email` = '$email',
        `username` = '$username',
        `password` = '$password',
        `image` = '$image'
    WHERE
        `id` = $id");

        if ($recoed) {
            header('location: teacher-list.php');
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
                        <h4 class="m-t-0 header-title"><b><strong>ADD NEW TEACHER</strong></b></h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="POST">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" value="<?php echo $data['firstname'] ?>" name="firstname" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="form-control" value="<?php echo $data['deptartment'] ?>" name="deptartment" placeholder="Enter Department">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" value="<?php echo $data['lastname'] ?>" name="lastname" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" value="<?php echo $data['number'] ?>" name="number" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" value="<?php echo $data['email'] ?>" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" value="<?php echo $data['username'] ?>" name="username" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Image URL (Optional)</label>
                                        <input class="form-control" value="<?php echo $data['image'] ?>" name="image" placeholder="Enter Image URL">
                                    </div>
                                    <label>Password</label>
                                    <input class="form-control" value="" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" name="submitTeacherUpdate" class="btn btn-primary">Save</button>
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

    <!-- DataTables JavaScript -->
    <script src="assets/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.min.js"></script>

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