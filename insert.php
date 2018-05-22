<?php  
$connect = mysqli_connect('localhost', 'survey', 'coffee', 'survey');
	$sql = "INSERT INTO survey(name, email, profession) VALUES
	('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["profession"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>