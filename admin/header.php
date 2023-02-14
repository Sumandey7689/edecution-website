<?php
include 'connection.php';
$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location: login.php');
}
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="index.php"><i class="fa fa-home fa-fw"></i>Admin</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">
        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="page-list.php"><i class="fa fa-folder-open fa-fw"></i> Pages</a>
                </li>
                <li>
                    <a href="student-list.php"><i class="fa fa-user-plus fa-fw"></i> Students</a>
                </li>
                <li>
                    <a href="teacher-list.php"><i class="fa fa-user-md fa-fw"></i> Teachers</a>
                </li>
                <li>
                    <a href="contact-list.php"><i class="fa fa-user fa-fw"></i> Contact Us</a>
                </li>
                <li>
                    <a href="admission-list.php"><i class="fa fa-folder-open fa-fw"></i> Admission</a>
                </li>
            </ul>
        </div>
    </div>
</nav>