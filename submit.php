<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "survey";
	$dbpass = "coffee";
	$dbname = "survey";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	// You really should escape all strings
	
	$name = Trim(stripslashes($_POST['name'])); 
	$email = Trim(stripslashes($_POST['email'])); 
	$profession = Trim(stripslashes($_POST['profession'])); 
	
	// 2. Perform database query
	$query  = "INSERT INTO survey(name, email, profession) VALUES ('$name','$email','$profession')";
	$result = mysqli_query($connection, $query);
?>


<?php include('inc/html-top.inc');?>

<body class = "content">

			<header>
			<div class="container">
				<div class = "primary">
					<a href="index.php"><img src="images/home.png" alt="Home"></a>
				</div>
				
				<div class="strong">
				<h3><a href="login.php" target="_blank"><em>Log-in</em></a></h3>
			</div>

			</div>
		</header>

		<div class="container"> <!--container to keep the content from the margins-->

		<div class="thanks">
			
			<h2>Enjoy your free premium version!!!</h3><br><br>

		
		</div>

		</div>
		
<?php include('inc/footer.inc');?>

</body>

</html>


<?php
	
	mysqli_close($connection);
?>