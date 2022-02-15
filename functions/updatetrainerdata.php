<?php
$t_id = $_POST['tid'];
$t_name = $_POST['tname'];
$t_number = $_POST['tnumber'];
$t_dob = $_POST['tdob'];
$t_address = $_POST['taddress'];

$db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
$update_query = "UPDATE trainer SET t_name ='$t_name', t_number = $t_number, t_dob = '$t_dob',t_address = '$t_address' WHERE t_id = $t_id ";

mysqli_query($db,$update_query) or die(mysqli_error());

header("Location: http://localhost/dark_house/alltrainer.php");

mysqli_close($db);


?>