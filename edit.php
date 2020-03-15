<?php 

    $conn = new mysqli("localhost", "root", "", "appointment") or die(mysqli_error());

    if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        $res = mysqli_query($conn, "SELECT * FROM booking WHERE book_id='$id'");
        $fetch = mysqli_fetch_array($res);

    }

    if(isset($_POST['newStatus']))
    {
        $newStatus = $_POST['newStatus'];
        $id = $_POST['id'];
        $sql = "UPDATE booking SET status = '$newStatus' WHERE book_id='$id'";
        $res = mysqli_query($conn, $sql ) or die("Could not update status".mysqli_error());
        echo "<meta http-equiv='refresh' content = '0;url=admin_view_bookings.php'>";
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule </title>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
	
        <link rel="stylesheet" type="text/css" href="tbStyle.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel = "stylesheet" type = "text/css" href = "styleX.css" />
		<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
                <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <ul class="nav">
            
			
            
            <li><a href="admin_home.php"><<</a></li>
            
            
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          
        </ul>
    <div class="header">
		<h2>Appointment list</h2>
	</div>
    <br>
   
<table align="center" >
	<thead>
            <tr>
		        <th>ID</th>
                <th>Time</th>
                <th>Date</th>
                <th>ID Number</th>
		        <th>Name</th>
                <th>Surname</th>
                <th>Contact</th>
                <th>Purpose</th>
                <th>Status</th>
		<th>Prescriptions</th>
            </tr>
	</thead>
	<tbody>
        <tr>
            <td><?php echo $fetch['book_id']?></td>
            <td><?php echo $fetch['b_time']?></td>
            <td><?php echo $fetch['b_date']?></td>
            <td><?php echo ($fetch['b_id'])?></td>
            <td><?php echo $fetch['b_name']?></td>
            <td><?php echo $fetch['b_surname']?></td>
            <td><?php echo $fetch['b_contact']?></td>
            <td><?php echo ($fetch['purpose'])?></td>
            <td >
                <form action = "edit.php" method="POST" style="clear">
                <input type="text" name = "newStatus" value = "<?php echo $fetch[8]; ?>">
                <input type="hidden" name = "id" value = "<?php echo $fetch[0]; ?>">
                   
                       
                    
                </form>
            </td>
		
		 <td >
                <form action = "edit.php" method="POST" style="clear">
           
  		<input type="text" id="lname" name="lname"><br><br>
                    <button type = "submit">
                        <i class="fas fa-save"></i>
                    </button>
                </form>
            </td>




					
		</tr>       
	</tbody>
</table>
     <style>
            .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: green;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        }
        .button2{
            
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
    
</body>

</html>