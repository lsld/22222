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



foreach ($list as $key => $value) {


   $event_id  = $value['event_id'];

    //get the full date
    $event_start = $value['event_start'];
    //seperate the date and the time using "T" instead of space
    $event_start = str_replace(' ', 'T', $event_start);
    //   echo $event_start;

    $event_end = $value['event_end'];
    //echo $event_end; die;
     $event_end = str_replace(' ', 'T', $event_end);
    // echo $event_end; die;

    // echo $event_end; die;



    $event_place = $value['event_place'];

    $event_title = $value['event_title'];
    $event_title = $event_title."@".$event_place;




    $event_array[] = array(

        'title' => $event_title,
        'start' => $event_start,
        'end' => $event_end,
        'allDay' => false,
        'color' => 'purple',
        'url' =>  '../lecturer/editevent.php?id='.$event_id.''
    );

  }



echo json_encode($event_array);


exit;


?>
