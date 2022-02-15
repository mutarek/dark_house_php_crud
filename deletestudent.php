<?php

$sid = $_GET['s_id'];

$db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());

$delete_query = "DELETE FROM student WHERE s_id =$sid";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/dark_house/home.php");

mysqli_close($db);

?>