<?php 
	session_start(); 

	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">

   
</head>
<body>
   
	<ul class="nav">
            <div class="head1">
			<h2>Max Pharmacy Appointment System</h2>
			</div>
			
               
                        <li><a href="login.php"><i class="fas fa-user"></i> Login</a></li>
						<li><a href="register.php"><i class="fas fa-user"></i> Register</a></li>
						<li><a href="login.php"><i class="fas fa-user"></i> About Us</a></li>
						<li><a href="login.php"><i class="fas fa-user"></i> Notice Board</a></li>
               
        </ul>
    <style>
        .img{
    text-align: center;
    background-color: black;
 
    position: relative;
}


.Logged{
	font-family:calibri;
	font-weight:bold;
	font-size:26px;
	color:white;
	background-color:green;
	padding:8px;
}
.cust{
	position:absolute;
	background:#fff;
	margin-right:18px;
	
}
.head1{


	color: white;
	background: blue;
	text-align: left;
	
	border-bottom: none;
	font-size:20px;


	float:left;
	

}
body{
	font-size: 125%;

	background:white;
}


.nav{
	color:white;
    background:blue;
 
    
    list-style: none;
    text-align: right;
    padding: 19px ;
	
   
        
}
.nav>li{
    
    display: inline-block;
    padding: 0 10px 0 10px;
	font-family:calibri;
	text-align:right;
	font-size:18px;
	margin-left:5px;
	line-height:20px;
	height:20px;
	
      
}
.nav>li>a{
    text-decoration: none;
    color:white;
	text-align:right;
	float:right;
	display:block;
	padding-right:8px;
	padding-left:8px;

}
.nav>li>a:hover{
    color: white;
    background-color: black;
	

	margin-top:0px;
	border-radius: 20px 20px 20px 20px;
	padding: 8px;
	top:50%;
   
      
}




.image{
  position: relative;
    
}
.text-block{
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: transparent;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
    
 
}
    </style>
<div class="bookIMG1">
    <img src="200.jpg" width="50%" height="15%" >
		</div> 
    <style>
        .bookIMG1{
        text-align: center;
        }
    </style>
    
 
   
    <div class="date">	
	<?php

echo '<br>';
$now=new DateTime();
echo $now->format('D M j Y');

?>
        
       
        <hr>
    </div>
    <style>
        .date{
            text-align: center;
            font-size: 25px;
        }
    </style>
    <br>
    <br>
    <div class="message">
         To make a booking for your appointment just click the link below or login <br>
         know  that you our working hours is 24/7,<br>
         Thank you for visiting us!!!<br>
         <a href="login.php">Click Here</a>
        </div>
<br>	
<footer>&COPY;Copyrights reserved to Max Pharmacy(PTY)LTD</footer>
 <style>
        .message{
            text-align: center;
            font-size: 20px;
          
        }
        footer{
            text-align: right;
            font-weight: bold;
        }
    </style>
    
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>