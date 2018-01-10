<?php
	include('getDB.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$q = "INSERT INTO `info`(`email`, `password`) VALUES ('$email','$password')";
	$result = mysqli_query($con, $q);

	/*while($row = mysqli_fetch_array($result)){

	}*/
	if($result)
		header('location: xyz.php');
	else
		echo "Not Success";
?>