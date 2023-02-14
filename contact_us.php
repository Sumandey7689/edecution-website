<?php
$insert = 0;
session_start();
if (isset($_POST['submitTwo'])) {
    include 'connection.php';
    // Collect post variables
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if ($fullname != null && $email != null && filter_var($email, FILTER_VALIDATE_EMAIL) && $subject != null && $message != null) {
        $sql = "INSERT INTO $db.`contact_us`(
            `Full_Name`,
            `Email`,
            `Subject`,
            `Message`,
            `Date`
        )
        VALUES(
            '$fullname',
            '$email',
            '$subject',
            '$message',
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <li class="breadcrumb-item"><a href="contact_us.php"><span class="color-front" style=margin-left:10px><strong>Contact Us</strong></span></a></li>
        </ol>
    </nav>

    <!-- Page Title Part -->
    <div class="page_name">
        <h2>Contact Us</h2>
        <img src="assets/img/line.png">
    </div>

    <section class="ftco-section color-front" style="margin-top: -15px; background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters faqcard">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                    <div id='result'></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="submitTwo" value="Send Message" class="btn get-btn-runded">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch color-front faqcard">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3" style="color: rgb(255, 255, 255);">
                                            <p><span>Address:</span> 3/20 Girija Para Lane, Khagra, Berhampore,
                                                Murshidabad, West Bengal, PIN Code-742103
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class=" d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://+91 9434071442">9434071442<br>
                                                    8170057060 / 9333147958</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="mailto:somen.bhb@gmail.com">somen.bhb@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
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