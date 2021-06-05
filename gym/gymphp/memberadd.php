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
<h1><font color="white"><center>MEMBER FORM</center></h1></font><br>

<form method="post" action="insmember.php">
<fieldset>
<legend><font color="white" size="6"><ADD HERE></legend>
 <font color="white" size="6">MEMBER ID:<br></font>
  <input type="text" name="mid" placeholder="enter the id">
  <br><br>
  <font color="white" size="6">NAME:<br></font>
  <input type="text" name="mname" placeholder="enter the name">
  <br><br>
  <font color="white" size="6">GENDER:<br></font>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>
    <br><br>
  <font color="white" size="6">DATE OF BIRTH:<br></font>
  <input type="text" name="dob" placeholder="DATE OF BIRTH">
  <br><br>
  <font color="white" size="6">DIET TYPE:<br></font>
  <input type="radio" name="dt" value="d1"> Veg<br>
  <input type="radio" name="dt" value="d2"> Non-veg<br>
  <input type="radio" name="dt" value="d3"> Mix<br>
  <br><br>
  
  <font color="white" size="6">ADDRESS:<br></font>
  <input type="text" name="ma" placeholder="enter the address"><br><br>
  <br><br>
  <font color="white" size="6">COURSE ID:<br></font>
  <input type="radio" name="ct" value="c1"> cardio<br>
  <input type="radio" name="ct" value="c2"> strength<br>
  <input type="radio" name="ct" value="c3"> fitness<br>
  <br><br>
  
  <input type="submit" value="Submit">
  </fieldset>
  
</form> 

</body>
</html>
