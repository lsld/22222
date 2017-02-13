<?php
session_start();
if($_SESSION){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
        function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
            var strcount
            var x = new Date()
            document.getElementById('ct').innerHTML = x;
            tt=display_c();
        }
    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>CourseWeb</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:#eee;
        }
        .row {
            margin:100px auto;
            width:300px;
            text-align:center;
        }
        .login {
            background-color:#fff;
            padding:20px;
            margin-top:20px;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background = "images/bg.png" style="background-repeat: no-repeat; background-size: 100% 150%;">

<div class="container" >
    <div class="row">
        <h2>Log In</h2>
        <div class="login">

            <?php
            if(isset($_POST['login'])) {
                //  include("koneksi.php");
                include('dao/config.php');
                include('dao/crudDAO.php');

                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $level = $_POST['level'];

                CrudDAO::authenticate($username , $password, $level);
            }
            ?>

            <form role="form" action="" method="post">

                <div class="form-group">

                </div>

                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
                </div>
                <div class="form-group">
                    <select name="level" class="form-control" required>
                        <option value="">Select User Level</option>
                        <option value="1">Administrator</option>
                        <option value="2">Lecturer </option>
                        <option value="3">College student</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" style="background-color: purple;" class="btn btn-primary btn-block" value="Log me in" />
                    <p>  <span id='ct' style="color: green; font-size: 20px;" ></span> </p>
                </div>


            </form>
        </div>



    </div>
    <p  style="color: white; left: 567px;position: absolute;top: 599px;"> Copyright © 2016 Courseweb.com </p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>