<?php 

$course_name = $_POST['cname'];
$course_trainer = $_POST['c_trainer'];
$course_price = $_POST['cprice'];
$course_duration = $_POST['cduration'];

$db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
$insert_query = "INSERT INTO course (c_name,c_price,c_duraion,c_trainer) VALUES 
('$course_name',$course_price,$course_duration,$course_trainer)";
mysqli_query($db,$insert_query) or die(mysqli_error());

header("Location: http://localhost/dark_house/allcourse.php");
mysqli_close($db);

?>