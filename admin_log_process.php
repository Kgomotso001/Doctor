<?php

    session_start();

	$username = "";
	$password    = "";
	$errors = array(); 
	
	$db = mysqli_connect('localhost', 'root', '', 'appointment');
	
	if (isset($_POST['admin_log'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		
		//-------------------------------------------

		if (count($errors) == 0) {
			
			$query = "SELECT * FROM adminuser WHERE ad_username='$username' AND ad_pass='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: admin_home.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	

?>

