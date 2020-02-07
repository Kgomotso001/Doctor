<?php include ('connect.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>my bookings </title>
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
            
			
            
        <li><a href="home.php"><<</a></li>
            
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
      
    <div class="hello">
        CONGRATULATIONS.......<br><br>
        
    </div>
    <div class="hello2">
        Be sure to arrive in time<br>
        Thanks for using our system to make appointment<br>
    </div>
    <style>
        .hello{
            font-size: 38px;
            color: green;
            text-align: center;
        }
         .hello2{
            font-size: 28px;
            color: green;
            text-align: center;
        }
        
        form{
            border: none;
        }
        .filter input{
            height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 0px;
	border: 1px solid gray;
        
        }
        .filter button{
            padding: 10px;
	font-size: 15px;
	color: white;
	background: black;
	border: none;
	border-radius: 5px;
        text-align: center;
        }
         .msg{
           color:green;
           font-size:20px;
           width: 45%;
           margin: 0px auto;
           padding: 20px;
           border: 2px solid black;
           background: black;
           border-radius: 0px 0px 0px 0px;
              }
    </style>
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

    
</body>
</html>