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

    if(isset($_POST['id']) && isset($_POST['action'])){
        if($_POST['action']=="update"){
            // update
            $sql="UPDATE `teachers`  SET `name`='".$name."', `email_id`='".$email."', `mobile_number`='".$mobile."' , `joining_date`='".$joining_date."' where id=". $_POST['id'];
            $actionToShow="update";
        }
    }else{
        // create query
        $sql="INSERT INTO `teachers`(`name`, `mobile_number`, `email_id`, `joining_date`) VALUES ('".$name."','".$mobile."','".$email."','".$joining_date."')";
        $actionToShow="create";
    }

    

    if($conn->query($sql)){
        $_SESSION["msg"]="Teacher ".$actionToShow."d Successfully";
        header("Location:index.php");
    }else{
        echo $conn->error;
    }
?>