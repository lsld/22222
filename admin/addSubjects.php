<?php
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php");
}
if($_SESSION['level'] != 'Administrator'){
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../images/favicon.ico" />
    <title>CourseWeb</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">

                <a href="#">
                        <p> Welcome! <?php echo $_SESSION['username']; ?></p>
                 </a>


            </li>


            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="addSubjects.php">Add New Subjects</a>
            </li>

            <li>
                <a href="year.php">Read Subjects</a>
            </li>

            <li style="margin-bottom: 160px !important;">
                <a href="register.php">Register Users</a>
            </li>


            <br/> <br/><br/><br/><br/><br/>
            <p style="color: #5bc0de; font-size: 15px; margin: 0 0 7px 21px;" id="ob1"> Level: <span
                    style="color: antiquewhite;"><?php echo $_SESSION['level']; ?> </span></p>
            <p style="color: #5bc0de; font-size: 15px; margin: 0 0 28px 21px;"> Username: <span
                    style="color: antiquewhite;"><?php echo $_SESSION['username']; ?> </span></p>


            <p><a style="margin: 0 0 0 38px; width: 170px; " href="../logout.php" class="btn btn-primary"
                  onclick="return confirm('sure you want to logout?')">Log out</a></p>




        </ul>


    </div>
    <!-- /#sidebar-wrapper -->


    <br/>
    <br/>

    <div class="container">
        <h2>Add New Subjects</h2>
        <p>Fill the following details to add a subject to the course web:</p>


        <!-- <div class="panel panel-default" style="padding:45px;">-->

        <?php $url =  $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);

             $pieces = explode("/", $url);

             $pieces1 = $pieces[0]."/".$pieces[1]."/process/addnewsubjectprocess.php";



             //echo $pieces1; die;?>

        <form  id="registration-form"  method="post" action="../process/addnewsubjectprocess.php" name="edit_form">



                <div class="form-group green row form-center form_gap">
                    <label class=" col-md-4 control-label" for="email"
                           style="color: #005993!important; font-weight: 600;">Subject Name <span class="star">*</span></label>
                    <div class="col-md-5">
                        <input type="text" onpaste="return false;"
                               class="form-control" name="subject_name" placeholder="Enter the subject name" maxlength="50" required autofocus/>
                    </div>
                </div>



                <div class="form-group green row form-center form_gap">
                    <label class=" col-md-4 control-label" for="email"
                           style="color: #005993!important; font-weight: 600;">Subject Code <span class="star">*</span></label>
                    <div class="col-md-5">
                        <input type="text" onpaste="return false;"
                               class="form-control" name="subject_code" placeholder="Enter the subject code" maxlength="50" required autofocus/>
                    </div>
                </div>




                <div class="form-group green row form-center form_gap">
                    <label class=" col-md-4 control-label" for="email"
                           style="color: #005993!important; font-weight: 600;">Subject Enrollment<span class="star">*</span></label>
                    <div class="col-md-5">
                        <input type="password" onpaste="return false;"
                               class="form-control" name="subject_enrollment" placeholder="Enter the subject enrollment" maxlength="50" required autofocus/>
                    </div>
                </div>

<!-- dropdown lect or student-->
            <div class="form-group row form-center form_gap">
                <label class=" col-md-4 control-label" for="membership"
                       style="color: #005993!important; font-weight: 600;">Enroller <span
                        class="star">*</span></label>
                <div class="col-md-5">
                    <select class="form-control" name="enroller" id="purpose" required autofocus>
                        <option value="0">Enter the subject enroller</option>
                        <option value="1">Lecture</option>
                        <option value="2">Student</option>
                    </select>
                </div>
            </div>



            <div class="form-group row form-center form_gap">
                <label class=" col-md-4 control-label" for="membership"
                       style="color: #005993!important; font-weight: 600;">Year <span
                        class="star">*</span></label>
                <div class="col-md-5">
                    <select class="form-control" name="year" id="purpose" required autofocus>

                        <option value="1">Year 1</option>
                        <option value="2">Year 2</option>
                        <option value="3">Year 3</option>
                    </select>
                </div>
            </div>


            <div class="form-group row form-center form_gap">
                <label class=" col-md-4 control-label" for="membership"
                       style="color: #005993!important; font-weight: 600;">Semester <span
                        class="star">*</span></label>
                <div class="col-md-5">
                    <select class="form-control" name="semester" id="purpose" required autofocus>

                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                    </select>
                </div>
            </div>


                <div class="form-group row form-center" style="height:50px;">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-5"><br/><br/>
                        <button type="submit" class="btn btn-primary pybill" style="position: absolute;
   " name="signin" value="Add new Subject">Submit
                        </button>
                    </div>

                </div>



        </div>

    </div>

</form>
        <div id="confirmation" class="alert alert-success hidden">
            <span class="glyphicon glyphicon-star"></span> Thank you for registering
        </div>
    </div>
</div>
</div>

</div>
<!-- /#wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#registration-form').formValidation({
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: "Please enter the title."
                        },
                        stringLength: {}

                    }
                }

            }
        });


    });
    //hide divs


</script>

<script type="text/javascript">


    function isTextKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return (((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }

    function isTextKeySpace(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 32 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }

    function isCurrencyKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return (charCode == 8 || charCode == 46 || charCode == 31 || (charCode >= 48 && charCode <= 57));
    }

    function isAddress(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 32 || charCode == 47 || charCode == 45 || charCode == 31 || (charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }


    function isEmail(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 47 || charCode == 46 || charCode == 45 || charCode == 64 || charCode == 31 || (charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }

    function isWebsite(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 47 || charCode == 46 || charCode == 45 || charCode == 64 || charCode == 58 || charCode == 31 || (charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }


    $('#id_no').bind('keypress', function (event) {
        var regex = new RegExp("^[vxnVXN0-9\b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

</script>


<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
