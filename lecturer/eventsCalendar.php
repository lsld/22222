<?php
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php");
}
if($_SESSION['level'] != 'Lecturer'){
    header("Location: ../index.php");
}

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');
?>


<?php

$enroller = $_SESSION['username'];

function readEvents($enroller)
{
    global $db;

    $sql = "SELECT * FROM events WHERE enrolller='{$enroller}'";

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

$list = readEvents($enroller);


/*foreach ($list as $key => $value) {

    //get the full date
    $event_start = $value['event_start'];
    //seperate the date and the time using "T" instead of space
  $event_start = str_replace(' ', 'T', $event_start);


    $event_end = $value['event_end'];
  $event_end = str_replace(' ', 'T', $event_end);


    $event_place = $value['event_place'];

    $event_title = $value['event_title'];
   $event_title = $event_title."@".$event_place;



}*/




?>




<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset='utf-8' />
    <link href='../calendar_assets/fullcalendar.css' rel='stylesheet' />
    <link href='../calendar_assets/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='../calendar_assets/lib/moment.min.js'></script>
    <script src='../calendar_assets/lib/jquery.min.js'></script>
    <script src='../calendar_assets/fullcalendar.min.js'></script>








    <script>




        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
               // defaultDate: '2014-11-12',
                editable: true,
                eventLimit: true, // allow "more" link when too many events



                events: 'myfeed.php'





            });

        });

    </script>






    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>


    <!--calendar -->



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

    <div class="container" style="margin: 15px 0 0 -98px;">
        <div id='calendar'></div>
    </div>
</div>
</div>

</div>
<!-- /#wrapper -->




</body>

</html>
