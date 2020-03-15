<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$user="";


	$db = mysqli_connect('localhost', 'root', '', 'appointment');

	if (isset($_POST['reg_user'])) {
		
		$username = mysqli_real_escape_string($db, $_POST['username']);
               
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$name=mysqli_real_escape_string($db, $_POST['fname']);
                $surname=mysqli_real_escape_string($db, $_POST['surname']);
                $address=mysqli_real_escape_string($db, $_POST['address']);
                $id_num=mysqli_real_escape_string($db, $_POST['idNum']);
                $gender=mysqli_real_escape_string($db, $_POST['gender']);
		
		

		
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
                if (empty($id_num)) { array_push($errors, "ID number is required"); }
                if (empty($name)) { array_push($errors, "name is required"); }
                if (empty($surname)) { array_push($errors, "surname is required"); }
                if (empty($address)) { array_push($errors, "Address is required"); }
                if (empty($gender)) { array_push($errors, "Gender is required"); }


		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if( strlen($id_num)!=13 ||!is_numeric($id_num))
                {
                    array_push($errors, "Invalid ID number entered,valid ID consists of 13 digits");
                }
                
		
		$query1 = "SELECT * FROM user WHERE `username` = '$username'";
$result1 = mysqli_query($db,$query1);

if ($result1) {

    if (mysqli_num_rows($result1) == 1) {
        while($row = mysqli_fetch_array($result1)) {
            $user=$row['username'] ;


        }
    }
}
if($username==$user)
{
    array_push($errors, "Username Number already exist, try Again.."); 
}
		//------------------------------------------------
		$password=$password_1;
		//----------------------------------------
		if (!preg_match("#[0-9]+#", $password)) {


    array_push($errors, "Password must include at least one number! ");
}

if (strcspn($password, '') != strlen($password)) {

    array_push($errors, "Password must include at least one letter! ");
}

if (!preg_match("#[A-Z]+#", $password)) {

    array_push($errors, "Password must include at least one CAPS! ");
}

if (!preg_match("#\W+#", $password)) {

    array_push($errors, "Password must include at least one symbol! ");
}
//--------------------------------------------


		

	
		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "INSERT INTO user (username, email, password,name,surname,address,gender,id_num) 
					  VALUES('$username', '$email', '$password','$name','$surname','$address','$gender','$id_num')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			
			header('location: home.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		//----------------------------------------
		if (!preg_match("#[0-9]+#", $password)) {


    array_push($errors, "Password must include at least one number! ");
}

if (strcspn($password, '') != strlen($password)) {

    array_push($errors, "Password must include at least one letter! ");
}

if (!preg_match("#[A-Z]+#", $password)) {

    array_push($errors, "Password must include at least one CAPS! ");
}

if (!preg_match("#\W+#", $password)) {

    array_push($errors, "Password must include at least one symbol! ");
}
		//-------------------------------------------

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


?>