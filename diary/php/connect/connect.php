<?php
    $host = "localhost";
    $user = "hailie01";
    $pass = "jh91941221!";
    $db = "hailie01";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");
        
    // if( mysqli_connect_errno() ){
    //     echo "DATABASE connect False"; 
    // }else {
    //     echo "DATABASE connect True"; 
    // }

?>