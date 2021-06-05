<?php
?>

<html>
<title>Harshith.R</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body { 
    background:url("g.jpg");
}


.button {
    position: relative;
    background-color: white;
    border: none;
    font-size: 28px;
    color: black;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: powderblue;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
</style>
</head>
<h1><center><font color="white">MUSCLE IMPRESSION</font></center></h1>
<h2><center><font color="white"><font size="5">BE FIT. STAY FIT.</font></center></h2><br>




<div class="container">
                                
  <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
     
    
      <div class="item">
        <img src="yy.jpg" >
      </div>

       <div class="item">
        <img src="xx.jpg" >
      </div>
	  
	  <div class="item">
        <img src="zz.jpg" >
      </div>

<div class="item active">
        <img src="ww.jpg" >
      </div>



    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<center>
<p> 
 <a href="type.php"><button class="button">ENTER</button></a>.
</p>
</center>



</body>
</html>
