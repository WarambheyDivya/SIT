<?php
	include('getDB.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$q = "SELECT * FROM `info` WHERE `email` = '$email' AND `password` = '$password'";
	$result = mysqli_query($con, $q);
	//var_dump($result);
	//var_dump($q);
	$row = mysqli_fetch_array($result);
	if($row)
		echo "Success";
	else
		echo "Not";
?>