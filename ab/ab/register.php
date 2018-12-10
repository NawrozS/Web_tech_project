
<html>
<head>
    <title>Home</title>
	<link href='css/style.css' rel='stylesheet'>
</head>

<body>
    <header>
	   <div class="row">
		<ul class="main-nav1">
		    
		</ul>
	    </div>
		
		<div class="neon1">
		  <input name="" type="text">
            <input value="Search" type="button">
	    </div>	
	 </header>
	 <div class="logo_menu">
	    <div class="neon">
		    <h3 data="neon">abash.com</h3>
	    </div>
		
		<div class="row">
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">contuct us</a></li>
			<li><a href="login.php">Post ad</a></li>
			<li><a href="login.php">Login</a></li>
			
		</ul>
		</div>
		</div>
		
		<div class="div3">
		    <ul>
			   <li><a href="#">most popular ad</a></li>
			   <li><a href="#">search filter </a></li>>
			   <input name="" type="text">
               <input value="Search" type="button"> 
		</div>
		
		
	      
			
			
			
		<div class="product_area">
				<div class="form_div">
				<div class="title"><h2>Insert Data In Database Using PHP.</h2></div>
   
				<form action="register.php" method="post">    <!-- method can be set POST for hiding values in URL-->
					<h2>Form</h2>
					<label>Name:</label>
					<br />
					<input class="input" type="text" name="name" value="" />
					<br />
					<label>User Name:</label><br />        
					<input class="input" type="text" name="usern" value="" />
					<br />
					<label>Email:</label><br />        
					<input class="input" type="text" name="email" value="" />
					<br />
					<label>Contact:</label><br />
					<input class="input" type="text" name="contact" value="" />
					<br />
					<label>Address:</label><br />
					<textarea rows="5" cols="25" name="address"></textarea>
					<br />
					<label>Password:</label><br />        
					<input class="input" type="Password" name="pasword" value="" />
					<br />
					<input class="submit" type="submit" name="submit" value="Insert" />	

<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "root", "","abash");

	//Selecting Database from Server
	
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $usern=$_POST['usern'];
    $paswrd=md5($_POST['pasword']);
   
   
	$sql = "INSERT INTO regi(name, email,un,address, phone_no,pw) VALUES ('$name', '$email','$usern','$address','$contact', '$paswrd')";
$result = mysqli_query($connection,$sql);
echo $sql;
var_dump($result);
}
?>					
				</form>
			</div>
		</div>	
			

	
	           
</body>


</html>