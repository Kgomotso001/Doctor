<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$user="";


	$db = mysqli_connect('localhost', 'root', '', 'registration');
        if (isset($_POST['create_schedule'])) {
            
            $date = mysqli_real_escape_string($db, $_POST['date']);
            $doctor = mysqli_real_escape_string($db, $_POST['doctor']);
            $name = mysqli_real_escape_string($db, $_POST['name']);
            $sname = mysqli_real_escape_string($db, $_POST['sname']);
            $location = mysqli_real_escape_string($db, $_POST['location']);
            $time = mysqli_real_escape_string($db, $_POST['time']);
            $contact = mysqli_real_escape_string($db, $_POST['contact']);
            
            
                if (empty($date)) { array_push($errors, "Date is required"); }
		if (empty($contact)) { array_push($errors, "Contact is required"); }
		if (empty($doctor)) { array_push($errors, "Doctors identification name is required"); }
                if (empty($location)) { array_push($errors, "Location is required"); }
                if (empty($name)) { array_push($errors, "name is required"); }
                if (empty($sname)) { array_push($errors, "surname is required"); }
                if (empty($time)) { array_push($errors, "Time is required"); }
                
                if (count($errors) == 0) {
			
			$query = "INSERT INTO schedule (date, time,doctor,name,surname,location,contact) 
					  VALUES('$date', '$time', '$doctor','$name','$sname','$location','$contact')";
			mysqli_query($db, $query);
                        header('location: v_schedule.php');

			
			
			
		}
                else {
                    array_push($errors,"Couldnt insert data");
                }
            
        }
        
  ?>