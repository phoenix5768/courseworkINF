<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "", "studassisst");
	// //checking connection
	/*if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
*/

	if(isset($_POST['login'])) {
		$login=$_POST['login'];
	}

	if(isset($_POST['password'])) {
		$pass=$_POST['password'];
	}

	if(isset($_POST['name'])) {
		$name=$_POST['name'];
	}

	if(isset($_POST['email'])) {
		$email=$_POST['email'];
	}

	if(isset($_POST['age'])) {
		$age=$_POST['age'];
	}

	if(isset($_POST['university'])) {
		$university=$_POST['university'];
	}

	if(isset($_POST['course'])) {
		$course=$_POST['course'];
	}

	$sql = "INSERT INTO user (login, password, name, email, age, university, course) VALUES ('$login', '$pass', '$name', '$email', '$age', '$university', '$course')";
	if (mysqli_query($db, $sql)) {
		header("Location: login.php");
	} else {
		"Error: " . $sql . "<br>" . mysqli_error($db);
	}


	mysqli_close($db);
?>
