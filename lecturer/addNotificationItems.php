<?php
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php");
}
if($_SESSION['level'] != 'Lecturer'){
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

   <!-- assetes for form date picker -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- assetes for form date picker -->


    <!-- Assets for notification -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
    <script src="../notification_assets/f_clone_Notify.js" type="text/javascript"></script>
    <link href="../notification_assets/f_clone_Notify.css" rel="stylesheet" />
    <!-- ------ ----->



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

<!-- notification start--->
<?php



include('../dao/config.php');
include('../dao/crudDAO.php');

global $db; ?>

<?php

function read1()
{
    global $db;

    //$sql = mysqli_query($db, "SELECT  notification_title, notification_description, enroller FROM notifications ");

    $sql = "SELECT * FROM notifications ORDER BY notification_id";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $i = 0;
        $list = "";

        while ($row = $result->fetch_assoc()) {
            $list[$i] = $row;
            $i++;
        }
        return $list;
    } else {
        return false;
    }
}


$list1 = read1();

 foreach ($list1 as $key => $value) {

     $notification_title = $value['notification_title'];

     $notification_description = $value['notification_description'];

     $enroller = $value['enroller'];




     $value = $notification_title. " @ ".$notification_description. " By ".$enroller;
?>




<script type='text/javascript'>
    /*

    sNotify.addToQueue('<?php // echo $value ?>');
    sNotify.alterNotifications('chat_msg');

    */
</script>


<?php

}


?>



<!-- notification end-->



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
                <a href="year.php">Add Subject Items</a>
            </li>


            <li>
                <a href="year1.php">View Subject Items</a>
            </li>

            <li>
                <a href="year2.php">View Submitted Assignments</a>
            </li>


            <li>
                <a href="addEventItems.php">Add Event Items</a>
            </li>

            <li>
                <a href="eventsCalendar.php">View Events Calendar</a>
            </li>

            <li>
                <a href="addNotificationItems.php">Add Notification Items</a>
            </li>
            <li>
                <a href="readNotifications.php">View Notifications</a>
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
        <?php




        ?>



        <h2>Add New Notification Items</h2> <br/>

        <p>Fill the following details to add a notificaton item  to the course web:</p><br/> <br/>


        <!-- <div class="panel panel-default" style="padding:45px;">-->

        <?php $url =  $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);

        $pieces = explode("/", $url);

        $pieces1 = $pieces[0]."/".$pieces[1]."/process/addnewsubjectprocess.php";



        //echo $pieces1; die;?>

        <form  id="registration-form"  method="post" action="../process/addNewNotificationItemProcess.php" name="edit_form" role="form">


                <div class="form-group">
                    <label ffor="dtp_input1" class="col-md-2 control-label">Notification Title:</label>

                    <div class="input-group  col-md-5" >
                        <input type="text" name="notification_title" class="form-control" id="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label ffor="dtp_input1" class="col-md-2 control-label">Notification Venue:</label>

                    <div class="input-group  col-md-5" >


                        <textarea  name="notification_description" class="form-control" placeholer="Message">
                        </textarea>
                    </div>
                </div>


                <?php $enroller = $_SESSION['username'];; ?>
                <input  type="hidden" name="enroller"  value="<?php echo $enroller ?>" id="">







            <?php

            function readSubjects()
            {
                global $db;

                $sql = "SELECT DISTINCT  subject_name FROM subjects ORDER BY id";

                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    $i = 0;
                    $list = "";

                    while ($row = $result->fetch_assoc()) {
                        $list[$i] = $row;
                        $i++;
                    }
                    return $list;
                } else {
                    return false;
                }
            }


            $list_1 = readSubjects();




            ?>

            <div class="form-group row form-center form_gap">
                <label class="  col-md-4 control-label" for="membership"
                       style=" font-weight: 600; margin: 0 0 0 17px;">Relevant Subject : <span
                        class="star">*</span></label>
                <div class="col-md-5">
                    <select class="form-control" name="subject" id="purpose" required autofocus style="margin: 0 0 0 -219px !important;">


                        <?php foreach ($list_1 as $key => $value) {
                            ?>

                            <option value="<?php echo $value['subject_name'];?>"><?php echo $value['subject_name'];?></option>
                            <?php
                        }
                        ?>

                    </select>
                </div>
            </div>


                <br/>





            <div class="form-group">
                <label ffor="dtp_input1" class="col-md-2 control-label"></label>

                <div class="input-group  col-md-5">
                    <button type="submit" class="btn btn-primary pybill" style="position: absolute;
  " name="signin" value="Add new Subject">Submit
                    </button>
                </div>
            </div> <br/> <br/>


            <div class="form-group">
                <label ffor="dtp_input1" class="col-md-2 control-label"></label>

                <div class="input-group  col-md-5">
                   <?php
                   error_reporting(0);

                   $succ_msg = $_GET['succ_msg']; ?>

                    <?php if(!empty($succ_msg)){ ?>

                   <h4 style="color:seagreen;"> <?php echo $succ_msg; ?> </h4>

                    <?php } ?>

                    <?php if(empty($succ_msg)){ ?>

                        <h4 style="color:seagreen;"></h4>

                    <?php } ?>
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

<script type="text/javascript" src="../jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>


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
