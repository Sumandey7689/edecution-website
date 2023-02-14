<?php
include 'connection.php';
session_start();
$mecount = 0;
$result = mysqli_query($conn, "SELECT * FROM `mechanical_enginnering`");
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

    <?php include 'header.php'; ?>

    <!-- Hero Part -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><span class="color-front" style=margin-left:10px><strong>Home</strong></span></a></li>
            <li class="breadcrumb-item"><a href="course.php"><span class="color-front" style=margin-left:10px><strong>Course</strong></span></a></li>
            <li class="breadcrumb-item"><a href="mechanical_enginnering.php"><span class="color-front" style=margin-left:10px><strong>Mechanical Engineering</strong></span></a></li>
        </ol>
    </nav>

    <!-- Page Title Part -->
    <div class="page_name">
        <h2>Mechanical Engineering</h2>
        <img src="assets/img/line.png">
    </div>

    <!-- Our Faculties member-->
    <div class="table-responsive">
        <strong>
            <table class="table table-bordered">
                <tr class="table_header">
                    <td style="width:10%;">Serial No</td>
                    <td style="width:40%;">Name of Faculty</td>
                    <td style="width:15%;">Designation</td>
                    <td style="width:15%;">Qualification</td>

                </tr>
                <?php while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo ++$Eecount; ?></td>
                        <td><?php echo $rows['facultysname'] ?></td>
                        <td><?php echo $rows['designation'] ?></td>
                        <td><?php echo $rows['qualification'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </strong>
    </div>

    <div class="important">
        <p>* The credit points assigned for extracurricular and or co-curricular activities shall be given by & bpc;the
            colleges and the same shall be submitted to the University. The criteria to acquire this credit point shall
            be defined by the colleges from time to time.<br /><br>
            * This (Extracurricular/ Co curricular activities) credit point will be awarded to the student who will
            qualify the MAR(Mandatory Additional Requirement).<br />

        <p><strong>NOTES : --------------</strong><br /><br>
            <strong>1. Academic (Program) Committee</strong> The Diploma program shall have an Academic (Program)
            Committee constituted by the Head of the institution.
        </p>
        <p><strong>2. Project work</strong> All the students shall undertake a project under the supervision of a
            teacher and submit a report. The area of the project shall be decided by the supervisor in consultation with
            the student. The project may be carried out in group not exceeding 3 in number. The internal and external
            examiner appointed by the University shall evaluate the project at the time of the Practical examinations of
            other semester(s).</p>
        <p><strong>3.</strong> <strong>Industrial training (Desirable)</strong> Every candidate shall be required to
            work for at least 150 hours spread over four weeks in a Industry.After the Semester &ndash; VI and before
            the commencement of Semester &ndash; III, and shall submit satisfactory report of such work and certificate
            duly signed by the authority of training organization to the head of the institute.</p>
        <p><strong>4.</strong> <strong>Practice School </strong>In the V semester, every candidate shall undergo
            practice school for a period of 150 hours evenly<br />
            distributed throughout the semester. The student shall opt any one of the domains for practice school
            declared by the academic (program) committee from time to time.<br />
            At the end of the practice school, every student shall submit a printed report (in triplicate) on the
            practice school he/she attended (not more than 25 pages). Along with the exams of semester VII, the report
            submitted by the student. The knowledge and skills acquired by the student through practice school
            shall<br />
            be evaluated by the subject experts at college level and grade point shall be awarded.</p>
    </div>

    <!-- FAQ Part -->
    <div class="container" style="margin-top: 60px; margin-bottom: 40px; cursor: pointer;">
        <h1 class="down-head" style="color: #000000"><strong>Frequently Asked Questions</strong></h1>
        <div class="accordion" id="accordionExample">
            <div class="card my-1 faqcard ">
                <div class="card-header collapsed dropdown-toggle" id="faq-1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong>Can I Join as a Mechanical Engineer After 10th?</strong>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="faq-1" data-parent="#accordionExample">
                    <div class="card-body">
                        Yes, you can do Mechanical Engineering after 10th…. You have to give a JEXPO exam and according
                        to
                        your rank you will get admission in engineering college.
                    </div>
                </div>
            </div>
            <div class="card my-1 faqcard">
                <div class="card-header collapsed dropdown-toggle" id="faq-2" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>How Many Years does it take to Complete a Polytechnic Course after 10th?</strong>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="faq-2" data-parent="#accordionExample>
                    <div class=" card-body">
                    Polytechnic is a 3-year course which has an extensive and rigorous teaching plus training
                    process.
                    Students after completing their polytechnic courses would have the privilege to take admissions
                    via lateral entry i.e directly to the second year of the engineering program.
                </div>
            </div>
        </div>
        <div class="card my-1 faqcard">
            <div class="card-header dropdown-toggle" id="faq-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong>B.tech is necessary after diploma?</strong>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="faq-3" data-parent="#accordionExample">
                <div class="card-body">
                    No its Not necessary
                </div>
            </div>
        </div>
        <div class="card my-1 faqcard">
            <div class="card-header dropdown-toggle" id="faq-4" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <strong>How much can I earn after completing this course ?</strong>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="faq-4" data-parent="#accordionExample">
                <div class="card-body">
                    It depends on the company and for the post you are working on. Average salary lies between 2-3
                    LPA.
                </div>
            </div>
        </div>
        <div class="card my-1 faqcard">
            <div class="card-header dropdown-toggle" id="faq-5" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <strong>What Jobs can I get after diploma?</strong>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="faq-5" data-parent="#accordionExample">
                <div class="card-body">
                    Today, diploma holders are employed as Junior Engineers, Assistant Engineers, executives in
                    hotels,
                    BPO sector and many public and private organizations. The Central and State Government of India
                    provides a large number of opportunities to diploma holders.
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>