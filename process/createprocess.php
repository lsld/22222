<?php

    require_once('../dao/config.php');
    require_once('../dao/crudDAO.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $mob= $_POST['mob'];


    
    
    if(!empty($name) && !empty($email) && !empty($address) && !empty($mob)){
        $create = CrudDAO::create($name,$email,$address,$mob);
        
        if($create == true){
             header ('Location: ../pages/read.php');
        }
    }
    
    else{
        echo "please complete all fields";
    }
?>