<?php

//show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    require_once('../dao/config.php');
    require_once('../dao/crudDAO.php');
    
    $subject_name = $_POST['subject_name'];
//echo $subject_name;

    $subject_code = $_POST['subject_code'];
//echo $subject_code;
    $subject_enrollment = $_POST['subject_enrollment'];
//echo $subject_enrollment;
    $enroller = $_POST['enroller'];
if($enroller == 1 ) {
    $enroller = "lecturer";
}
if($enroller == 2) {
    $enroller = "student";
}



$year = $_POST['year'];
if($year == 1 ) {
    $year = "1";
}
if($year == 2 ) {
    $year = "2";
}
if($year == 3 ) {
    $year = "3";
}


$semester = $_POST['semester'];
if($semester == 1 ) {
    $semester = "1";
}
if($semester == 2 ) {
    $semester = "2";
}



if(!empty($subject_name) && !empty($subject_code) && !empty($subject_enrollment) && !empty($enroller)  && !empty($year) && !empty($semester) ){
        $create = CrudDAO::addSubjects($subject_name,$subject_code,$subject_enrollment,$enroller, $year, $semester);
        
        if($create == true){
             //header ('Location: ../pages/read.php');
            echo "success";
            header ('Location: ../admin/readSubjects.php');
        }
    }
    
    else{
        echo "please complete all fields";
    }
?>