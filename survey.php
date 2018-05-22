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

		<div class= "container">

	        <div class="box">
	        	
			<h2>Fill the survey for a free premium version</h2>


	    	<form method="post" action="submit.php">
			<label>Name</label>
			<input type="text" class="form-control" name="name"><br>

			
	        <label>Email</label>
	        <input type="text" class="form-control" name="email"><br>

	        <label>Profession</label>
	        <input type="text" class="form-control" name="profession"><br>

			<div class="form-group">
		        <button type="submit" class="push_button" id="sendMessageButton">Submit</button>
		    </div>

		</form>
	</div>
		</div>

<?php include('inc/footer.inc');?>

</body>
</html>
