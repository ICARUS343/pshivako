  <?php  
	$connect = mysqli_connect('localhost', 'survey', 'coffee', 'survey');
	$sql = "DELETE FROM survey WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>