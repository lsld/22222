<?php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$id = $_GET['id'];

$delete = CrudDAO::deleteSubjects($id);

if($delete == true){
    header ('Location: ../admin/readSubjects.php');
}
else{
    echo "error";
}
?>
    
    