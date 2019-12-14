<?php
    //connect database
    $conn = new mysqli("localhost","root","12345678","usedcar-014");
    if($conn->connect_errnr){
        die("connection failed :".$conn->connect_error);
    }
    
?>