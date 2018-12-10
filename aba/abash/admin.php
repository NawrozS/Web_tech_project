<?php ?>
<html>
<head>
    <title>Admin Panel</title>
	<link href='css/style.css' rel='stylesheet'>
    
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
	
</head>

<body>


  <?php

$con=mysqli_connect("localhost","root","","ab");
$query="select * from post";
$rs=mysqli_query($con,$query);

$sql="select * from regi";
$res=mysqli_query($con,$sql);
?>
<!--
foreach($rs as $row){
	
	echo "<p>".$row['rent_price']."</p><hr>";
	echo "<h4>Name:".$row['name']."</h4><hr>";
	echo  "<img src=" .$row['image'].">";

	
}
-->


 

<!-- Menu -->


     <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Logout</a></li>	
		</ul>
	 </div>
	 
		<div align="center">
		</br>
		<h1 style="color:green">Admin Panel</h1>
	    </div>
		</br>
	<hr style="border:1px solid green"></hr>
  
  <div class="usercon">
  <h2 style="color:blue">Pending User Request</h2>
  <br/>
  <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No</th>
  </tr>
  
  <?php 
  if ($res->num_rows > 0){
  while($row = $res->fetch_assoc()){?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone_no']; ?></td>
        </tr>
        <?php 
		    }
} else {
    echo "0 results";
}


?> 
		
  
  
  </table>
  
  <input type="button" value="Confirm">
  <input type="button" value="Decline">
  </div>
  
  <div class="postcon">
  <h2 style="color:blue">Pending Posts</h2>
  <br/>
  <table>
      <tr>
    <th>Rent amount</th>
    <th>Name</th>
    <th>Image</th>
  </tr>
  
  <?php 
  if ($rs->num_rows > 0){
  while($row = $rs->fetch_assoc()){?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['rent_price']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['image']; ?></td>
        </tr>
        <?php 
		    }
} else {
    echo "0 results";
}


?> 
		
  
  
  </table>
   
   <input type="button" value="Confirm">
  <input type="button" value="Decline">
  </div>  

  
  
	           
</body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- Bottom -->
	<footer class="footer">
		
		<div>
			<img src="img/logo.png">	
		</div>
	
		
	</footer>

</html>