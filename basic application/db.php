<?php


    //localhost, username, password, DB name
    $connect = mysqli_connect("localhost", "root" , "" , "std_app");
    if( $connect ){
        //echo 'database conneted succussfully';
    }
    else{
        echo 'database connected faild';
    }
?>