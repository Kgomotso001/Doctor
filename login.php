<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system </title>
	<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
			<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
</head>
<body>
   
  
    <br>
	<div class="header">
		<h2>Patient Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label><i class="fas fa-user fa-1x cust" aria-hidden="true"></i> Username</label>
			<input type="text" name="username" ></i>
		</div>
		
		<div class="input-group">
			<label><i class="fas fa-lock fa-1x cust" aria-hidden="true"></i> Password</label>
			<input type="password" name="password" id="myInput">
		</div>
		<div>
		<input type="checkbox" onclick="myFunction()">show password
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
            <div class="backback">
		<p>
			Not yet a member? <a href="register.php"> Sign up</a>
		</p>
                <p>
                    Login as Admin click<a href="admin_login.php"> Admin Login</a>
                </p>
            </div>
	</form>
	
	<script>
	function myFunction()
	{
		var x=document.getElementById("myInput");
		if(x.type=="password")
		{
			x.type="text";
		}
		else
		{
			x.type="password";
		}
	}
	
	</script>
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