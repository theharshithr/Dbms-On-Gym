<?php
?>
<html>
<head>
<style>
body {
    background-image: url("g.jpg");
}
</style>
</head>
<h1><center><font color="white">MUSCLE IMPRESSION</font></center></h1>
<h2><center><font color="white"><font size="5">BE FIT. STAY FIT.</font></center></h2><br>
<body>
<h1><font color="white"><center>COURSE LIST</center></h1></font><br>

<form method="POST" action="inscourse.php">
<fieldset>
<legend><font color="white" size="6"><CHOOSE YOUR WORKOUT HERE></legend>
 <font color="white" size="6"> COURSE ID:<br></font>
  <input type="text" name="cid" placeholder="enter the id">
  <br><br>
  <font color="white" size="6">DIET ID:<br></font>
  <input type="radio" name="did" value="d1"> D1<br>
  <input type="radio" name="did" value="d2"> D2<br>
  <input type="radio" name="did" value="d3"> D3<br>
  <br><br>
  
  <font color="white" size="6">COURSE AMOUNT:<br></font>
  <input type="radio" name="camt" value="3000">3000<br>
  <input type="radio" name="camt" value="6000">6000<br>
  <input type="radio" name="camt" value="8000">8000<br>
  <input type="radio" name="camt" value="15000">15000<br>
  <br><br>
  
  <font color="white" size="6">WORKOUT TYPE:<br></font>
  <input type="radio" name="wtype" value="Aerobics">Aerobics<br>
  <input type="radio" name="wtype" value="Zumba">Zumba<br>
  <input type="radio" name="wtype" value="Weight Lifting">Weight Lifting<br>
  <br><br>
  
  <font color="white" size="6">COURSE DURATION:<br></font>
  <input type="radio" name="cdur" value="3 months"> 3 MONTHS<br>
  <input type="radio" name="cdur" value="6 months"> 6 MONTHS<br>
  <input type="radio" name="cdur" value="12 months"> 12 MONTHS<br>
  <br><br>
  
 <font color="white" size="6"> TRAINER ID:<br></font>
  <input type="text" name="tid" placeholder="enter the id">
  <br><br>
  
  <input type="submit" value="Submit">
  </fieldset>
  
</form> 

</body>
</html>
