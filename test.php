<?php 
include('Teacher.php');
$teacher = new Teacher();
echo $teacher->create();
// print_r($teacher->create());
?>