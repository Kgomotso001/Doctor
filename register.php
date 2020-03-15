<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
</head>
<body>


	<div class="header">
		<h2>Client Registration</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>FullName</label>
			<input type="text" name="fname">
		</div>
		<div class="input-group">
			<label>Surname</label>
			<input type="text" name="surname">
		</div>
		<div class="input-group">
			<label>ID Number</label>
                        <input type="text" name="idNum">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		
		<div class="input-group">
			<label>Gender</label>
                        <input type="text" name="gender" placeholder="e.g Male/Female">
		</div>
                 <div class="input-group">
			<label>Address</label>
                        <input type="text" name="address" placeholder="e.g 1853 Motsumi Street....">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	</form>
        <style>
            
.head{
width: 100%;
	
	color: white;
	background:blue;
	text-align: center;
	border: 2px solid #B0C4DE;
	border-bottom: none;
	border-radius: 0px 00px 0px 0px;
	padding: 10px;
	

}
* {
	margin: 0px;
	padding: 0px;
}
body {
	font-size: 125%;
	 background: url('300.jpeg') no-repeat;
    background-size: cover;
    font-family: Arial;
       
 


}
.backback{
    font-size: 15px;
}

.header {
	width: 25%;
	margin: 50px auto 0px;
	color: white;
	background: blue;
	text-align: center;
	border: 2px solid blue;
	border-bottom: none;
	border-radius: 0px 0px 0px 0px;
	padding: 20px;
}
form, .content {
	color:black;
	font-size:20px;
	width: 25%;
	margin: 0px auto;
	padding: 20px;
	border: 2px solid blue;
	background: white;
	border-radius: 0px 0px 0px 0px;
	
}
.input-group {
	margin: 10px 0px 10px 0px;
	
}

.input-group label {
	display: block;
	text-align: left;
	margin: 5px;
}
.input-group input {
	
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 0px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: blue;
	border: none;
	border-radius: 5px;
        text-align: center;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
        </style>
</body>
</html>