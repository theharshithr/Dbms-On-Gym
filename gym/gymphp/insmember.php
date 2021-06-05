<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "gym";

$mmid = $_POST["mid"];
$mmname = $_POST["mname"];
$gender1 = $_POST["gender"];
$dob1 = $_POST["dob"];
$dtype=$_POST["dt"];
$madd=$_POST["ma"];
$cid=$_POST["ct"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into member values('$mmid','$mmname','$gender1','$dob1','$dtype','$madd','$cid')";
$result = mysqli_query($conn,$sql) or die( "could not execute");
$sql1="select * from member";
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

        h2{		
font-size: 50;}
    </style>
    </head>
	<h1><center><font color="white">MUSCLE IMPRESSION</font></center></h1>
<h2><center><font color="white"><font size="5">BE FIT. STAY FIT.</font></center></h2><br>
    <body bgcolor=white>
        
        <h1><marquee>Record Added Successfully</marquee></h1>
		
<a href="trainerfun.php" class="previous">&laquo; Back to Menu</a>

        </body></head></html>
