<?php

if(isset($_FILES['file'])){

   $file =  $_FILES['file'];

    //file properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

   //work out the file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    //specify allowable file extensions/formats
    $allowed = array('pdf' , 'txt', 'docx');

    if(in_array($file_ext, $allowed)){
        if($file_error == 0){
                //file size less than or equal to 2mb
                if($file_size <= 2097152){

                        //generate unique name
                        $file_name_new = uniqid('', true).'.'.$file_ext;

                        $file_destination = 'uploads/'.$file_name_new;

                       // echo $file_name_new;

                        if(move_uploaded_file($file_tmp, $file_destination)){
                                echo  $file_destination;
                        }
                }
        }

    }
}