<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>CourseWeb</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
        }

        .row {
            margin: 100px auto;
            width: 300px;
            text-align: center;
        }

        .login {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include('dao/config.php');
include('dao/crudDAO.php');

$id = $_GET['id'];

$enroller1 =  $_SESSION['level'];
//echo $enroller1; die;
//echo $id;

global $db;

///print_r($db); die;

$query = mysqli_query($db, "SELECT  subject_name, enroller FROM subjects WHERE id='$id' and enroller='$enroller1'");
if (mysqli_num_rows($query) == 0) {
    echo "error 0";
    die;
} else {

    // echo "in"; die;
    $row = mysqli_fetch_assoc($query);

   // $enroller = $row['enroller'];

    $subject_name = $row['subject_name'];

    $enroller = $row['enroller'];

    //$enroller = $_SESSION['level'];

    //echo $enroller;

    //echo $subject_name; die;

}
?>


<div class="container">
    <div class="row">
        <p style="font-size: 25px;">Enroll For :</p>
        <p style="font-size: 18px;"> <?php echo " " . $subject_name; ?> </p>

        <p style="font-size: 15px; color: #3c763d; font-weight: 700;">Enroll As: <?php echo $enroller; ?></p>
        <div class="login">

            <?php
            if (isset($_POST['login'])) {
                //  include("koneksi.php");


                $subject_enrollment = md5($_POST['subject_enrollment']);
                //  $password = md5($_POST['password']);
                //  $level = $_POST['level'];


                // CrudDAO::authenticate($username , $password, $level);
                CrudDAO::enroll($id, $subject_enrollment, $enroller);
            }
            ?>

            <form role="form" action="" method="post">

                <div class="form-group">
                    <input type="password" name="subject_enrollment" class="form-control"
                           placeholder="Subject Enrollment" required autofocus/>
                </div>

                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary btn-block" value="Enroll me in"/>
                </div>
            </form>
        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>