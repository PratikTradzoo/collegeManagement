<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="college";

    $conn=new mysqli($servername,$username,$password,$database);

    if($conn->connect_error){
        echo "NOt Connected". $conn->connect_error;
    }
?>