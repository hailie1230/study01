<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE websComment (";
    $sql .= "commentID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youText varchar(50) NOT NULL,";
    $sql .= "regTime int(15) NOT NULL,";
    $sql .= "PRIMARY KEY (commentID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if( $result ){
        echo "Creat Comment True";
    } else {
        echo "Creat Comment False";
    }

?>
