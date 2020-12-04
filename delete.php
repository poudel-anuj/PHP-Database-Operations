<?php
	include_once("connection.php");
	echo $id = $_POST['delete']; 
	$del = $_POST['delete']; 

	$query = "DELETE FROM student WHERE id = '$del' ";
	$run=mysqli_query($conn,$query);
	if($run == TRUE)
	{
	header("Location: viewdata.php");
	}
	else
	{
		echo "error!";
	}
?>