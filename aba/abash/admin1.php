<?php ?>
<html>
<head>
    <title>Admin Panel</title>
	<link href='css/style.css' rel='stylesheet'>
      
</head>

<body>
<!-- Menu -->

     <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Logout</a></li>	
		</ul>
	 </div>
		<div class="top">
		</br>
		<h1>Admin Panel</h1>
	    </div>
		</br>
	<hr style="border:1px solid green"></hr>
  
  <div class="usercon">
  <?php

$con=mysqli_connect("localhost","root","","ab");
$query="select * from post";

$rs=mysqli_query($con,$query);

foreach($rs as $row){
	
	echo "<p>".$row['rent_price']."</p><hr>";
	echo "<h4>Name:".$row['name']."</h4><hr>";
	echo  "<img src=" .$row['image'].">";

	
}


?>
  </div>  

	           
</body>
</html>