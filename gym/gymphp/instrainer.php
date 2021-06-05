<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "gym";

$ttid = $_POST["tid"];
$pwd = $_POST["tpwd"];
$name = $_POST["tname"];
$gender1 = $_POST["gender"];
$dob1 = $_POST["dob"];
$qual1=$_POST["qual"];
$tadd=$_POST["add"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into trainer values('$ttid','$pwd','$name','$gender1','$dob1','$qual1','$tadd')";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$sql1="select * from trainer";
if($result1 = mysqli_query($conn,$sql1))
{
$rowcount=mysqli_num_rows($result1);
}
?>
<html>
    
<head>
    <style type="text/css">
html, 
body {
height: 100%;
}

body {
background-image: url(g.jpg);
background-repeat: no-repeat;
background-size: 100%;
}

        h2{font-size: 50;}
    </style>
    </head>
	<h1><center><font color="white">MUSCLE IMPRESSION</font></center></h1>
<h2><center><font color="white"><font size="5">BE FIT. STAY FIT.</font></center></h2><br>
    <body bgcolor=white>
        
        <h1><marquee>Record Added Successfulyy</marquee></h1>
		
<a href="adminfun.php" class="previous">&laquo; Back to Menu</a>

        </body></head></html>
