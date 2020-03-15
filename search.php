<?php
     $conn = new mysqli("localhost", "root", "", "appointment") or die(mysqli_error());

    $output = '';
    
    //collect
    if(isset($_POST['search']))
    {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^09a-z]#i", "", $searchq);

       $query = mysqli_query($conn, "SELECT * FROM user WHERE name LIKE '%$searchq%' OR surname LIKE '%$searchq%' OR id_num LIKE '%$searchq%' OR gender LIKE '%$searchq%' ") or die("Could not search");
        $count = mysqli_num_rows($query);
        if($count == 0)
        {
            $output = 'There was no search result!';
        }
        else
        {
            while($row = mysqli_fetch_array($query))
            {
                $fname = $row['name'];
                $lname = $row['surname'];
                $id = $row['id'];
                $idNum = $row['id_num'];
                $gender = $row['gender'];

                //$output .= '<div> ' .$fname. ' '.$lname. '</div>';
                $output .= "<tr><td>". $id ."</td><td>" . $fname . "</td><td>". $lname . "</td><td>". $gender . "</td><td>".$idNum."</td></tr>";

                
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
  <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		 <link rel="stylesheet" type="text/css" href="xCSS/css/all.css"> 
</head>

<body class="bg">
 
    <ul class="nav">
        <div class="head1">
         <h2>Doctors Appointment System</h2>
        </div>
        <li><a href="admin_home.php"><i class="fas fa-home"></i>  Home</a></li>
	<li><a href="admin_view_bookings.php"><i class="fas fa-clipboard-list"></i>View All Bookings</a></li>
        <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li> 
     </ul>
    
    <form class= "example" action="search.php" method="post">
    <style>

            body {
                font-family: Arial;
                }

                * {
                box-sizing: border-box;
                }

                .example{
                    margin-top: 100px;
                }

                form.example input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
                }

                form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                }

                form.example button:hover {
                background: #0b7dda;
                }

                form.example::after {
                content: "";
                clear: both;
                display: table;
                }
        </style>

        <input type = "text" name = "search" placeholder = "Search for Patients"> 
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        
    <table bgcolor="powderblue">
        <?php
            print("$output");
        ?>
    </table>

     <style>
        /* Table Style */
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 90%;
            margin: 100px;
            align: center;
            position: auto;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: white;
            }



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
	
	/*border-bottom: none; */
	font-size:20px;


	float:left;
	

}
body{
	font-size: 125%;

	/*background:white; 
    background-image: url("300.jpeg");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100px; */
}
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("200.jpeg");
    
  /* Full height */
  height: 100%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
   background-size: cover;
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

