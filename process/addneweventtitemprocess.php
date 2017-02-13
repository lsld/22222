<?php




session_start();

if(empty($_SESSION)){
    header("Location: ../index.php");
}
//echo $_SESSION['level'];
//die;

?>
<?php

//show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$event_title= $_POST['event_title'];

$event_place= $_POST['event_place'];

$enrolller= $_POST['enrolller'];


$event_start= $_POST['event_start'];

$event_end= $_POST['event_end'];






//echo $subject; die;



if(!empty($event_title) && !empty($event_place) && !empty($enrolller) && !empty($event_start) && !empty($event_end)){
    $create = CrudDAO::createEventItem($event_title,$event_place,$enrolller,$event_start,$event_end);

    if($create == true){
        header ('Location: ../lecturer/eventsCalendar.php');
        echo "success"; die;
    }
}

else{
    echo "please complete all fields";
}

