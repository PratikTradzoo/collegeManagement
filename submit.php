<?php 
   require("db_coonect.php");
    $name= $_POST['name'];
    $email=$_POST["email"];
    $mobile=$_POST["mobile_number"];
    $joining_date=$_POST["joiningDate"];
    session_start();
    if(empty($name)||empty($email)||empty($mobile)||empty($joining_date)){
                die("Somwething went wrong");
    }

    $sql="INSERT INTO `teachers`(`name`, `mobile_number`, `email_id`, `joining_date`) VALUES ('".$name."','".$mobile."','".$email."','".$joining_date."')";

    if($conn->query($sql)){
        $_SESSION["msg"]="Teacher added Successfully";
        header("Location:index.php");
    }else{
        echo $conn->error;
    }
?>