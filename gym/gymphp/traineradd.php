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
<h1><font color="white"><center>TRAINER FORM</center></h1></font><br>

<form method="POST" action="instrainer.php">
<fieldset>
<legend><font color="white" size="6"><ADD HERE></legend>

   <font color="white" size="6"> TRAINER ID:<br></font>
  <input type="text" name="tid" placeholder="enter the id">
  <br><br>
  <font color="white" size="6">ENTER PASSWORD:<br></font>
  <input type="password" name="tpwd" placeholder="create your password">
  <br><br>
  <font color="white" size="6">NAME:<br></font>
  <input type="text" name="tname" placeholder="enter the name">
  <br><br>
  <font color="white" size="6">GENDER:<br></font>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>
  
  <br><br>

  <font color="white" size="6">DATE OF BIRTH:<br></font>
  <input type="text" name="dob" placeholder="enter the phone number">
  <br><br>

  
  <font color="white" size="6">QUALIFICATION:<br></font>
  <input type="text" name="qual" placeholder="enter the qualification">
  <br><br>
  <font color="white" size="6">ADDRESS:<br></font>
  <input type="text" name="add" placeholder="enter the address"><br><br>
  

  
  
  <br><br>
  
  <input type="submit" value="Submit">
  </fieldset>
  
</form> 

</body>
</html>
