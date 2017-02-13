<?php

//show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email =  $_POST['email'];
$level = $_POST['level'];


if($level == 1 ) {
    $nama = "Administrator";
}
if($level == 2 ) {
    $nama = "Lecturer";
}
if($level == 3) {
    $nama = "College student";
}



if(!empty($username) && !empty($password) && !empty($nama) && !empty($email) && !empty($level)){
    $create = CrudDAO::register($username,$password,$nama , $email, $level);

    if($create == true){
        //header ('Location: ../pages/read.php');
        echo "success";

        $message = "User " . $username . " Successfully Created!";

        header ('Location: ../admin/register.php?message='.$message);

    }
}

else{
    echo "please complete all fields";
}
?>