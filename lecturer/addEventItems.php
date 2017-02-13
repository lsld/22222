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
        sNotify.addToQueue('<?php echo $value ?>');
        sNotify.alterNotifications('chat_msg');
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

       // include('../dao/config.php');
       // include('../dao/crudDAO.php');

        global $db;

     /*   $id = $_GET['id'];

        $query = mysqli_query($db, "SELECT  subject_name, enroller FROM subjects WHERE id='$id'");
        if (mysqli_num_rows($query) == 0) {
            echo "error 0";
            die;
        } else {

            // echo "in"; die;
            $row = mysqli_fetch_assoc($query);

            $enroller = $row['enroller'];

            $subject_name = $row['subject_name'];

        } */


        ?>



        <h2>Add New Event Items</h2> <br/>

        <p>Fill the following details to add a event item  to the course web:</p><br/> <br/>


        <!-- <div class="panel panel-default" style="padding:45px;">-->

        <?php $url =  $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);

        $pieces = explode("/", $url);

        $pieces1 = $pieces[0]."/".$pieces[1]."/process/addnewsubjectprocess.php";



        //echo $pieces1; die;?>

        <form  id="registration-form"  method="post" action="../process/addneweventtitemprocess.php" name="edit_form" role="form">


                <div class="form-group">
                    <label ffor="dtp_input1" class="col-md-2 control-label">Event Title:</label>

                    <div class="input-group  col-md-5" >
                        <input type="text" name="event_title" class="form-control" id="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label ffor="dtp_input1" class="col-md-2 control-label">Event Place:</label>

                    <div class="input-group  col-md-5" >
                        <input type="text" name="event_place" class="form-control" id="" required>
                    </div>
                </div>


                <?php $enrolller = $_SESSION['username'];; ?>
                <input  type="hidden" name="enrolller"  value="<?php echo $enrolller ?>" id="">



                <div class="form-group">
                    <label for="dtp_input1" class="col-md-2 control-label">Start Date / Time:</label>
                    <div class="input-group date form_datetime col-md-5" data-date="2016-09-01T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                        <input class="form-control" size="16" type="text" value="" readonly >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input1" name="event_start" value="" required/><br/>
                </div>



            <div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">End Date / Time:</label>
                <div class="input-group date form_datetime col-md-5" data-date="2016-09-01T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input2">
                    <input class="form-control" size="16" type="text" value="" readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                <input type="hidden" id="dtp_input2" name="event_end" value="" /><br/>
            </div>



          






            <div class="form-group">
                    <label ffor="dtp_input1" class="col-md-2 control-label"></label>

                    <div class="input-group  col-md-5">
                        <button type="submit" class="btn btn-primary pybill" style="position: absolute;
  " name="signin" value="Add new Subject">Submit
                        </button>
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
