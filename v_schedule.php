<?php include ('connect.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule </title>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="tbStyle.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
                <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
                
   
</head>
<body>
    <ul class="nav">
            
			
            
            <li><a href="admin_home.php"><<</a></li>
            <li><a href="schedule.php">Create Schedule</a></li>
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
    <div class="header">
		<h2>Schedules</h2>
	</div>
    <br>
<table align="center">
	<thead>
            <tr>
		<th>ID</th>
                <th>Date</th>
                <th>Time</th>
		<th>Name</th>
                <th>Surname</th>
                <th>Doctor</th>
                <th>Contact</th>
                <th>Location</th>
                <th>Action</th>
                
            </tr>
	</thead>
	<tbody>
            <?php  
		$query = $conn->query("SELECT * FROM schedule") or die(mysqli_error());
		while($fetch = $query->fetch_array()){
            ?>
						
                <tr>
                    <td><?php echo $fetch['id']?></td>
                    <td><?php echo $fetch['date']?></td>
                    <td><?php echo ($fetch['time'])?></td>
                    <td><?php echo $fetch['name']?></td>
                    <td><?php echo $fetch['surname']?></td>
                    <td><?php echo ($fetch['doctor'])?></td>
                    <td><?php echo $fetch['contact']?></td>
                    <td><?php echo ($fetch['location'])?></td>
                    <td><center><a class = "btn btn-warning" href = "edit_schedule.php?id=<?php echo $fetch['id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> <a name="delete" class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_schedule.php?admin_id=<?php echo $fetch['id']?>"><i class = "fa fa-trash" aria-hidden="true"></i>  Delete</a></center></td>
							
		</tr>
		<?php
		}
		?>				
	</tbody>
</table>
    
</body>
</html>