<?php
include 'connection.php';
$acess = false;
$popup = false;
if (isset($_POST['submitHeader'])) {
    if (!empty($_POST['RoleType'])) {
        $selected = $_POST['RoleType'];
        if ($selected == '1') {
            $registration_no = $_POST['registration_no'];
            $password = sha1($_POST['password']);

            $result = mysqli_query($conn, "SELECT * FROM `student_tbl`");
            while ($rows = mysqli_fetch_assoc($result)) {
                if ($rows['registration_no'] == $registration_no && $rows['password'] == $password) {
                    $acess = true;
                }
            }
            if ($acess) {
                session_start();
                $_SESSION['registration_no'] = $registration_no;
                header('location: student_login.php');
            } else {
                $popup = true;
            }
        } else {
            $username = $_POST['registration_no'];
            $password = sha1($_POST['password']);

            $result = mysqli_query($conn, "SELECT * FROM `teachers_tbl`");
            while ($rows = mysqli_fetch_assoc($result)) {
                if ($rows['username'] == $username && $rows['password'] == $password) {
                    $acess = true;
                }
            }
            if ($acess) {
                session_start();
                $_SESSION['usernameTeacher'] = $username;
                header('location: teachers_login.php');
            } else {
                $popup = true;
            }
        }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <style type="text/css">
        .navbar-nav>li>.dropdown-menu a:link,
        .navbar-nav>li>.dropdown-menu a:hover {
            background-color: #350cea;
        }

        .navbar-toggler {
            width: 47px;
            height: 34px;
            background-color: #7eb444;
            border: none;
        }

        .navbar-toggler .line {
            width: 100%;
            float: left;
            height: 2px;
            background-color: #fff;
            margin-bottom: 5px;
        }
    </style>

    <title>Berhampore Polytechnic College</title>
</head>

<body>
    <?php
    if ($popup) {
    ?>

        <body onload="codeAddressError();"></body>
    <?php
    }
    ?>

    <!-- Navbar Part -->
    <nav class="navbar navbar-expand-lg navbar navbar navbar navbar-light " style="background-color: #350cea;">

        <span class="navbar-text-white">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-target="#navbarSupportedContent" aria-label="Toggle navigation" data-toggle="collapse" aria-expanded="true">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line" style="margin-bottom: 0;"></span>
            </button>

            <a class="navbar-brand" id="title_message" href="#">
                <span class="text-white">Berhampore Polytechnic College<br>
                    <div class="heading">
                        3/20 GIRJAPARA LANE
                        <br>
                        POST:KHAGRA, Berhampore, West Bengal 742103
                    </div>
                </span>
            </a>
        </span>

        <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><span class="text-white">HOME</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-white">COURSE</span>
                    </a>
                    <div class="dropdown-menu" class="navbar navbar-light" style="background-color: #350cea;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="computer_sciencetechnology.php"><span style="margin-right:10px" class="text-white">Computer
                                Science &
                                Technolog</span></a>
                        <a class="dropdown-item" href="electronics_enginnering.php"><span style="margin-right:10px" class="text-white">Elctronics
                                &
                                Telecommunication</span></a>
                        <a class="dropdown-item" href="electrical_engineering.php"><span style="margin-right:10px" class="text-white">Electrical
                                Engineering</span></a>
                        <a class="dropdown-item" href="mechanical_enginnering.php"><span style="margin-right:10px" class="text-white">Mechanical
                                Engineering</span></a>
                        <a class="dropdown-item" href="civil_enginnering.php"><span style="margin-right:10px" class="text-white">Civil
                                Engineering</span></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="gallery.php"><span class="text-white">GALLERY</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admission.php"><span class="text-white">ADMISSION</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php"><span class="text-white">ABOUT US</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php"><span class="text-white">CONTACT US</span></a>
                </li>
                <?php
                if (isset($_SESSION['registration_no']) && !empty($_SESSION['registration_no'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="student_login.php"><span class="text-white">Student Profile</span></a>
                    </li>
                    <?php if (isset($_SESSION['usernameTeacher']) && !empty($_SESSION['usernameTeacher'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="teachers_login.php"><span class="text-white">Teacher Profile</span></a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="margin-right: 15px;"><i class="text-white fa fa-user"><span class="loginstyle">Logout</span></i></a>
                    </li>

                <?php
                } else if (isset($_SESSION['usernameTeacher']) && !empty($_SESSION['usernameTeacher'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="teachers_login.php"><span class="text-white">Teacher Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="margin-right: 15px;"><i class="text-white fa fa-user"><span class="loginstyle">Logout</span></i></a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#studentloginModal" id="navbarDropdown" role="button" data-toggle="dropdown" data-target="#studentloginModal" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" style="margin-right: 15px;" aria-hidden="true"><span class="loginstyle">Login</span></i>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <!-- Students Login Modal -->
    <div class="modal fade" id="studentloginModal" tabindex="-1" role="dialog" aria-labelledby="studentloginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="section-front modal-title" id="panel_text">Login to Students Panel</h5>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="color-front form-group">
                            <select class="form-control" name="RoleType" required id="Type" onchange="return typetext();" style="border: 0.5px solid black; border-radius: 5px;">
                                <option value="1" selected>Students</option>
                                <option value="2">Teachers</option>
                            </select>
                        </div>
                        <div class="color-front form-group">
                            <label for="exampleInputEmail1" id="user_key">Registration No</label>
                            <input type="text" class="form-control" id="registration_no" name="registration_no" style="border: 0.5px solid black; border-radius: 5px;" aria-describedby="emailHelp">
                            <small class="form-text text-muted" id="user_notice">We'll never share your Registration No
                                with anyone
                                else.</small>
                        </div>
                        <div class="color-front form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" style="border: 0.5px solid black; border-radius: 5px;">
                        </div>
                        <button type="submit" name="submitHeader" class="get-btn-runded btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlight Part -->

    <div>
        <div class="notice-bar">
            <div class="notice-scroll">
                <h5>Highlights</h5>
                <div>
                    <marquee style="margin-top: 13px;">
                        <p style="color: rgb(255, 255, 255);">
                            ADMISSION NOTICE in Engineering & Technology, ADMISSION NOTICE in DIPLOMA ENGINEERING
                            COURSES,Fee Submission Odd Sem-2022, DIPLOMA Admission Notice Session 2022-2025, Fee Payment
                            Notice Even Semester 2022, NOTICE TO ALL HOSTEL BOARDERS
                        </p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function codeAddressError() {
        <?php
        if ($selected == 1) {
        ?>
            swal({
                ttitle: "Invalid Details",
                text: "Invalid Registration No or Password",
                icon: "error",
                button: "Okk!",
            });
        <?php
        } else {
        ?>
            swal({
                ttitle: "Invalid Details",
                text: "Invalid Username or Password",
                icon: "error",
                button: "Okk!",
            });
        <?php
        }
        ?>
    }
</script>

<script>
    function typetext() {
        var Type = document.getElementById('Type').value;
        if (Type == 1) {
            document.getElementById('user_key').innerText = "Registration No";
            document.getElementById('user_notice').innerText = "We'll never share your Registration No with anyone else.";
            document.getElementById('panel_text').innerText = "Login to Students Panel";
        } else {
            document.getElementById('user_key').innerText = "Username";
            document.getElementById('user_notice').innerText = "We'll never share your Username with anyone else.";
            document.getElementById('panel_text').innerText = "Login to Teachers Panel";
        }
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>