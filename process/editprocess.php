<?php

    require_once('../dao/config.php');
    require_once('../dao/crudDAO.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $mob= $_POST['mob'];
    
    if(!empty($name) && !empty($email) && !empty($address) && !empty($mob)){
        $edit = CrudDAO::update($id,$name,$email,$address,$mob);
        
        if($edit == true){
            header('Location: ../pages/read.php');
        }
        
        else{
            echo "failed";
        }
    }
    
    else{
        echo "please complete all fields";
    }
?>