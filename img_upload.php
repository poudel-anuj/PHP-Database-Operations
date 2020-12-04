<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
</head>
<body>
	<form action="" method="post">
		<input type="file" name="img" required="required"/>
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
<?php
	if(isset(['submit']))
	{
		$imagename = $_FILES['img']['name'];
		$tempimgname= $_FILES['img']['temp_name'];
		$conn= mysqli_connect('localhost','root','','student') or die(mysqli_error());
		move_uploaded_file($tempimgname,"images/$imagename");
		$query="INSERT INTO 'image' ('image') VALUES ('$imagename')";
		$run=mysqli_query($conn,$query);
		echo "upload sucess";

	}
?>