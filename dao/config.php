<?php
 
    $config = array( 'host' => 'localhost', 'username' => 'root','password' => 'root','database' => 'database01');

    $db = new mysqli($config['host'],$config['username'],$config['password'],$config['database']);
    
    if(mysqli_connect_errno()){
        
        echo "error connect to database";
    }
    
?>