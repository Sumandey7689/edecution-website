<?php
include 'connection.php';
session_start();
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}

$Cstcount = 0;
$cst = mysqli_query($conn, "SELECT * FROM `computer_sciencetechnology`");
$Etcount = 0;
$et = mysqli_query($conn, "SELECT * FROM `electronics_enginnering`");
$Eecount = 0;
$ee = mysqli_query($conn, "SELECT * FROM `electrical_engineering`");
$mecount = 0;
$me = mysqli_query($conn, "SELECT * FROM `mechanical_enginnering`");
$civilcount = 0;
$civil = mysqli_query($conn, "SELECT * FROM `civil_enginnering`");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dep = $_GET['department'];
    if ($dep == "cst") {
        $delete = "DELETE FROM `computer_sciencetechnology` WHERE `id`=$id";
        if ($conn->query($delete) === TRUE) {
            header('location: page-list.php');
        }
    }
    elseif ($dep == "et") {
        $delete = "DELETE FROM `electronics_enginnering` WHERE `id`=$id";
        if ($conn->query($delete) === TRUE) {
            header('location: page-list.php');
        }
    }
    elseif ($dep == "ee") {
        $delete = "DELETE FROM `electrical_engineering` WHERE `id`=$id";
        if ($conn->query($delete) === TRUE) {
            header('location: page-list.php');
        }
    }
    elseif ($dep == "me") {
        $delete = "DELETE FROM `mechanical_enginnering` WHERE `id`=$id";
        if ($conn->query($delete) === TRUE) {
            header('location: page-list.php');
        }
    }
    elseif ($dep == "civil") {
        $delete = "DELETE FROM `civil_enginnering` WHERE `id`=$id";
        if ($conn->query($delete) === TRUE) {
            header('location: page-list.php');
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

    <div id="wrapper">

        <?php include 'header.php'; ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-10">
                        <h4 class="m-t-0 header-title"><b>Course List</b></h4>
                    </div>
                    <div class="col-sm-2">
                        <div class="m-t-0 text-right">
                            <a href="page-detail.php" class="btn btn-default waves-effect waves-light" style="background-color: green; color: white;"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Department</th>
                                                <th>Name of Faculty</th>
                                                <th>Designation</th>
                                                <th>Qualification</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($rows = mysqli_fetch_assoc($cst)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo ++$Cstcount; ?></td>
                                                    <td>Computer Science</td>
                                                    <td><?php echo $rows['facultysname'] ?></td>
                                                    <td><?php echo $rows['designation'] ?></td>
                                                    <td><?php echo $rows['qualification'] ?></td>
                                                    <td><?php echo $rows['date'] ?></td>
                                                    <td class="text-center">
                                                        <a href="page-update.php?id=<?php echo $rows['id'] ?>&department=cst" class="edit-row" style="color: #29b6f6;" data-toggle="tooltip" data-placement="top" title="Update Students Information" data-original-title="Update Students Information"><i class="fa fa-edit"></i></a>
                                                        <a href="page-list.php?id=<?php echo $rows['id'] ?>&department=cst" class="remove-row" style="color: #f05050;" data-toggle="tooltip" data-placement="top" title="Delete Students" data-original-title="Delete Students"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Department</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Designation</th>
                                                    <th>Qualification</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php while ($rows = mysqli_fetch_assoc($et)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo ++$Etcount; ?></td>
                                                    <td>Electronics Engineering</td>
                                                    <td><?php echo $rows['facultysname'] ?></td>
                                                    <td><?php echo $rows['designation'] ?></td>
                                                    <td><?php echo $rows['qualification'] ?></td>
                                                    <td><?php echo $rows['date'] ?></td>
                                                    <td class="text-center">
                                                        <a href="page-update.php?id=<?php echo $rows['id'] ?>&department=et" class="edit-row" style="color: #29b6f6;" data-toggle="tooltip" data-placement="top" title="Update Students Information" data-original-title="Update Students Information"><i class="fa fa-edit"></i></a>
                                                        <a href="page-list.php?id=<?php echo $rows['id'] ?>&department=et" class="remove-row" style="color: #f05050;" data-toggle="tooltip" data-placement="top" title="Delete Students" data-original-title="Delete Students"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Department</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Designation</th>
                                                    <th>Qualification</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php while ($rows = mysqli_fetch_assoc($ee)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo ++$Eecount; ?></td>
                                                    <td>Electrical Engineering</td>
                                                    <td><?php echo $rows['facultysname'] ?></td>
                                                    <td><?php echo $rows['designation'] ?></td>
                                                    <td><?php echo $rows['qualification'] ?></td>
                                                    <td><?php echo $rows['date'] ?></td>
                                                    <td class="text-center">
                                                        <a href="page-update.php?id=<?php echo $rows['id'] ?>&department=ee" class="edit-row" style="color: #29b6f6;" data-toggle="tooltip" data-placement="top" title="Update Students Information" data-original-title="Update Students Information"><i class="fa fa-edit"></i></a>
                                                        <a href="page-list.php?id=<?php echo $rows['id'] ?>&department=ee" class="remove-row" style="color: #f05050;" data-toggle="tooltip" data-placement="top" title="Delete Students" data-original-title="Delete Students"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Department</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Designation</th>
                                                    <th>Qualification</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php while ($rows = mysqli_fetch_assoc($me)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo ++$Eecount; ?></td>
                                                    <td>Mechanical Engineering</td>
                                                    <td><?php echo $rows['facultysname'] ?></td>
                                                    <td><?php echo $rows['designation'] ?></td>
                                                    <td><?php echo $rows['qualification'] ?></td>
                                                    <td><?php echo $rows['date'] ?></td>
                                                    <td class="text-center">
                                                        <a href="page-update.php?id=<?php echo $rows['id'] ?>&department=me" class="edit-row" style="color: #29b6f6;" data-toggle="tooltip" data-placement="top" title="Update Students Information" data-original-title="Update Students Information"><i class="fa fa-edit"></i></a>
                                                        <a href="page-list.php?id=<?php echo $rows['id'] ?>&department=me" class="remove-row" style="color: #f05050;" data-toggle="tooltip" data-placement="top" title="Delete Students" data-original-title="Delete Students"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Department</th>
                                                    <th>Name of Faculty</th>
                                                    <th>Designation</th>
                                                    <th>Qualification</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php while ($rows = mysqli_fetch_assoc($civil)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo ++$civilcount; ?></td>
                                                    <td>Civil Engineering</td>
                                                    <td><?php echo $rows['facultysname'] ?></td>
                                                    <td><?php echo $rows['designation'] ?></td>
                                                    <td><?php echo $rows['qualification'] ?></td>
                                                    <td><?php echo $rows['date'] ?></td>
                                                    <td class="text-center">
                                                        <a href="page-update.php?id=<?php echo $rows['id'] ?>&department=civil" class="edit-row" style="color: #29b6f6;" data-toggle="tooltip" data-placement="top" title="Update Students Information" data-original-title="Update Students Information"><i class="fa fa-edit"></i></a>
                                                        <a href="page-list.php?id=<?php echo $rows['id'] ?>&department=civil" class="remove-row" style="color: #f05050;" data-toggle="tooltip" data-placement="top" title="Delete Students" data-original-title="Delete Students"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

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