<!DOCTYPE html>
<html>
<head>
	<title>Schedule </title>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
   
</head>
<body>
    <ul class="nav">
            
			
            
            <li><a href="admin_home.php"><<</a></li>
            <li><a href="v_schedule.php">View Schedule's</a></li>
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
    <div class="header">
        <h2>Update Schedule</h2>
	</div>
    <br>
    <form method="post" action="schedule.php">
        
                <div class="input-group">
			<label>Date</label>
                        <input type="date" name="date">
		</div>
    
                <div class="input-group">
			<label>Available Doctor</label>
			<input type="text" name="doctor">
		</div>
    
                <div class="input-group">
			<label>Location</label>
			<input type="text" name="location">
		</div>
                 <div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
                <div class="input-group">
			<label>Surname</label>
			<input type="text" name="sname">
		</div>
                <div class="input-group">
			<label>Contact</label>
			<input type="text" name="contact">
		</div>
                <div class="input-group">
			<label>Time</label>
                        <input type="time" name="time">
		</div>
                <div class="input-group">
			<button type="submit" class="btn" name="create_schedule">Create Schedule</button>
		</div>
        <script>alert'("Successfully submitted")';</script>
        
    </form>
    
</body>
</html>