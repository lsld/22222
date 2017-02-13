
<?php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$id = $_GET['id'];

//echo $id; die;

$delete = CrudDAO::deleteEvents($id);

if($delete == true){
    header ('Location: ../lecturer/eventsCalendar.php');
}
else{
    echo "error";
}
?>