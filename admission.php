<?php
session_start();
$insert = 0;
if (isset($_POST['submitTwo'])) {
    include 'connection.php';
    // Collect post variables

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mothername = $_POST['mothername'];
    $fathername = $_POST['fathername'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if ($firstname != null && $lastname != null  && $mothername != null && $fathername != null && $address != null && $gender != null && $pincode != null && $phone != null && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO $db.`admission`(
            `firstname`,
            `lastname`,
            `mothername`,
            `fathername`,
            `address`,
            `gender`,
            `pincode`,
            `phone`,
            `email`,
            `Date`
        )
        VALUES(
            '$firstname',
            '$lastname',
            '$mothername',
            '$fathername',
            '$address',
            '$gender',
            '$pincode',
            '$phone',
            '$email',
            CURRENT_TIMESTAMP()
        );";
        if ($conn->query($sql) === TRUE) {
            $insert = 1;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $insert = 2;
    }
    $conn->close();
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

    <!-- php Code for PopUp Screen -->
    <?php
    if ($insert == 1) {
    ?>

        <body onload="codeAddress();"></body>
    <?php
    } elseif ($insert == 2) {
    ?>

        <body onload="codeAddressFalid();"></body>
    <?php
    }
    ?>

    <?php include 'header.php'; ?>

    <!-- Hero Part -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><span class="color-front" style=margin-left:10px><strong>Home</strong></span></a></li>
            <li class="breadcrumb-item"><a href="admission.php"><span class="color-front" style=margin-left:10px><strong>Admission</strong></span></a></li>
        </ol>
    </nav>

    <section class="h-100 color-front" style="background-color: rgb(255, 255, 255); margin-top: -16px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4 faqcard">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="assets/img/Admission.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <form method="POST" id="admissionForm" name="admissionForm" novalidate="novalidate">
                                    <div class="card-body p-md-5 text-black">
                                        <h4 class="mb-5 text-uppercase">Student registration form</h4>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="firstname" id="firstname" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="lastname" id="lastname" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="mothername" id="mothername" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m1">Mother's
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="fathername" id="fathername" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n1">Father's
                                                        name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="address" id="address" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender :</h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" value="female" />
                                                <label class="form-check-label" for="femaleGender"> Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" value="male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="pincode" id="pincode" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example90">Pincode</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="phone" id="phone" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example99">Mobile Number</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="email" id="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                            <div id='result'></div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" name="submitTwo" class="btn btn-warning btn-lg ms-2">Submit
                                                form</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        const validateEmail = (email) => {
            return email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
        };

        const validate = () => {
            const $result = $('#result');
            const email = $('#email').val();
            $result.text('');

            if (validateEmail(email)) {
                $result.text(email + ' is valid');
                $result.css('color', 'green');
            } else {
                $result.text(email + ' is not valid');
                $result.css('color', 'red');
            }
            return false;
        }
        $('#email').on('input', validate);
    </script>

    <script>
        function codeAddress() {
            swal({
                title: "Successfully Submitted",
                icon: "success",
                button: "Yess!!!",
            });
        }
    </script>

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
</body>

</html>