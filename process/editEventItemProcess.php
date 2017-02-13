<?php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');


$event_id = $_GET['id'];




$event_title= $_POST['event_title'];




$event_place= $_POST['event_place'];

$enrolller= $_POST['enrolller'];


$event_start= $_POST['event_start'];

$event_end= $_POST['event_end'];

/*

echo $event_id;

echo $event_title;

echo $event_start;

echo $event_end;

echo $event_place; */




if(!empty($event_title) && !empty($event_place) && !empty($enrolller) && !empty($event_start) && !empty($event_end) && !empty($event_id)){
    $edit = CrudDAO::updateEvents($event_title,$event_place,$enrolller,$event_start,$event_end, $event_id);

    if($edit == true){
        $event_success_message = 1;
        header('Location: ../lecturer/editEventForm.php?event_success_message='.$event_success_message);
    }

    else{
        echo "failed";
    }
}

else{
    echo "please complete all fields";
}
?>