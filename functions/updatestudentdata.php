<?php 
$student_id = $_POST['s_id'];
$student_name  = $_POST['sname'];
$student_number = $_POST['snumber'];
$student_course = $_POST['student_course'];

$db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
$fetch_query = "SELECT * FROM course WHERE c_id = $student_course";
$course_result = mysqli_query($db,$fetch_query) or die(mysqli_error());
$course = mysqli_fetch_assoc($course_result);
$student_trainer = $course['c_trainer'];

$update_query = "UPDATE student SET s_name ='$student_name',s_number = $student_number, s_course = $student_course , s_trainer = $student_trainer WHERE s_id = $student_id ";

mysqli_query($db,$update_query) or die(mysqli_error());

header("Location: http://localhost/dark_house/home.php");

mysqli_close($db);

?>