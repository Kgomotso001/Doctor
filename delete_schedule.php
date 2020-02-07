<?php
	 require_once 'connect.php';
         if(isset($_Post['delte']))
         {
             $id=$_Post['delete'];
	 $conn->query("DELETE FROM schedule WHERE id = $id") or die(mysqli_error());
	 header('location: v_schedule.php');
         }