<?php
include 'connection.php';
session_start();
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}
$result = mysqli_query($conn, "SELECT * FROM `admission`");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM `admission` WHERE `id`=$id";
    if ($conn->query($delete) === TRUE) {
        header('location: admission-list.php');
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
                        <h4 class="m-t-0 header-title"><b>Admission List</b></h4>
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
                                                <th>Id</th>
                                                <th>Full Name</th>
                                                <th>Mother's name</th>
                                                <th>Father's name</th>
                                                <th>Gender</th>
                                                <th>Pincode</th>
                                                <th>Mobile Number</th>
                                                <th>Email ID</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($rows = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $rows['id'] ?></td>
                                                    <td><?php echo $rows['firstname'] . ' ' . $rows['lastname'] ?></td>
                                                    <td><?php echo $rows['mothername'] ?></td>
                                                    <td><?php echo $rows['fathername'] ?></td>
                                                    <td><?php echo $rows['gender'] ?></td>
                                                    <td><?php echo $rows['pincode'] ?></td>
                                                    <td><?php echo $rows['phone'] ?></td>
                                                    <td><?php echo $rows['email'] ?></td>
                                                    <td><?php echo $rows['Date'] ?></td>
                                                    <td class="text-center">
                                                        <a href="admission-list.php?id=<?php echo $rows['id'] ?>" class="remove-row" style="color: #f05050;" data-toggle="tooltip" data-placement="top" title="Delete Students" data-original-title="Delete Students"><i class="fa fa-trash"></i></a>
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