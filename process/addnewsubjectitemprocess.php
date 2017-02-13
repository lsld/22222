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

$item_name = $_POST['item_name'];


$item_description	 = $_POST['item_description'];





$item_type = $_POST['item_type'];

if($item_type == 0 ) {
    $item_type = "No Type";
}

if($item_type == 1 ) {
    $item_type = "Assignment";
}
if($item_type == 2 ) {
    $item_type = "Lecture";
}
if($item_type == 3 ) {
    $item_type = "Lab";
}
if($item_type == 4 ) {
    $item_type = "Tutorial";
}

if($item_type == 5 ) {
    $item_type= "Notice";
}

//file upload
if(is_array($_FILES)) {


    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

      //  echo "in"; die;

        $sourcePath = $_FILES['userImage']['tmp_name'];
        $targetPath = "../lecturer/images/".$_FILES['userImage']['name'];
        if(move_uploaded_file($sourcePath,$targetPath)) {
            ?>
            <?php

            $item_url = $targetPath;

            //------------------------
            global $db;

            $id = $_POST['id'];

            $query = mysqli_query($db, "SELECT  subject_name, enroller FROM subjects WHERE id='$id'");
            if (mysqli_num_rows($query) == 0) {
                echo "error 0";
                die;
            } else {

                // echo "in"; die;
                $row = mysqli_fetch_assoc($query);

                $enroller = $row['enroller'];

                $subject_name = $row['subject_name'];

            }

            $username = $_SESSION['username'];


            if(!empty($item_name) && !empty($item_description) && !empty($item_url) && !empty($subject_name) && !empty($item_type) && !empty($username)  && !empty($enroller)){

                $create = CrudDAO::addSubjectitems($item_name,$item_description,$item_url,$subject_name,$item_type,$username, $enroller);

                if($create == true){
                    //header ('Location: ../pages/read.php');
                    echo "success";

                    //header ('Location: ../lecturer/readSubjects.php?id=' . $id );
                    if ($_SESSION['level'] == 'Lecturer'){
                        header('Location: ../lecturer/year.php?id=' . $id );
                    }
                    if ($_SESSION['level'] == 'Student'){
                        header('Location: ../student/year.php?id=' . $id );
                    }
                    else{
                        echo "in"; die;
                    }


                }
            }

            else{
                echo "please complete all fields";
            }




            //--------------------------

           ?>
            <?php
        }
    }
}


else{
    echo "error"; die;
}
//




?>