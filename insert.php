<?php

	 $name = $_POST['username'];
	 $password = $_POST['password'];
	 $email= $_POST['email'];
	 $address = $_POST['address'];

	 $conn = mysqli_connect('localhost','root','','test');
	 $query = " INSERT INTO student (name,email,password,address)VALUES('$name','$email','$password','$address')";
	 $run = mysqli_query($conn,$query);

	 if($run==TRUE)
	 	{
	 	echo "inserted sucessfully";
		}
		
	 
	 else{
	 	echo "error!";	
	 	}
	  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <a href="index.php">click here to insert more </a>;
</body>
</html>