<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
</head>

<body>
 <ul class="nav">
            <div class="head1">
			<h2>Doctors Appointment System</h2>
			</div>
     <li><a href="admin_home.php"><i class="fas fa-home"></i>  Home</a></li>
               <li><a href="search.php"><i class="fas fa-clipboard-list"></i>Search Bookings</a></li>
            	<li><a href="admin_view_bookings.php"><i class="fas fa-clipboard-list"></i>View All Bookings</a></li>
            
      
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
    
    <img src="300.jpeg" width="100%">
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
    <img src="200.jpeg" width="50%" height="15%" >
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
	<script type="text/javascript" src="script/jquery.min.js"></script>
    <script type="text/javascript" src="script/materialize.min.js"></script>
	<script>

          function addZero(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }

            setInterval(() => {
                var d = new Date();
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var days = ["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"];

                var h = addZero(d.getHours());
                var m = addZero(d.getMinutes());
                var s = addZero(d.getSeconds());

                time = h + ":" + m + "." + s

                var day = "<b>" + days[d.getDay()] + "</b> - " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear();
                $('#time').html(time);
                $('#day').html(day);
            }, 1000);
        });
    </script>
	</body>


</html> 

