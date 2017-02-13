<?php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$id = $_GET['id'];

//-------------------
global $db;

//$id = $_POST['id'];

$query = mysqli_query($db, "SELECT  subject_name FROM subjectitems WHERE id='$id'");
if (mysqli_num_rows($query) == 0) {
    echo "error 0";
    die;
} else {

    // echo "in"; die;
    $row = mysqli_fetch_assoc($query);

   // $enroller = $row['enroller'];

    $subject_name = $row['subject_name'];

}
//--------------------



$delete = CrudDAO::deleteSubjectItems($id);

if($delete == true){
    //echo "success";
   // header ('Location: ../lecturer/readSubjectItems.php');
    header('Location: ../lecturer/readSubjectItems.php?id=' . $id. '&subject_name='.$subject_name);


}
else{
    echo "error";
}
?>
    
    