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

$notification_title= $_POST['notification_title'];

$notification_description= $_POST['notification_description'];

$enroller =  $_POST['enroller'];

$subject = $_POST['subject'];





if(!empty($notification_title) && !empty($notification_description) && !empty($enroller) && !empty($subject)){
    $create = CrudDAO::createNotificationItem($notification_title,$notification_description, $enroller , $subject);

    if($create == true){

        $succ_msg = "Your Notification SuccessFully Created!!";
        header ('Location: ../lecturer/addNotificationItems.php?succ_msg='.$succ_msg);

    }
}

else{
    echo "please complete all fields";
}

