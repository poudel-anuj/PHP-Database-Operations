<?php

	$con = mysqli_connect('localhost','root','','test');
	function show()
	{
		global $con;
	$query = "SELECT * FROM student";
	$run = mysqli_query($con,$query);

		while($data = mysqli_fetch_assoc($run))
		{
			echo $data['name']."<br>";
			echo $data['email']."<br>";
			echo $data['address']."<br>";
		}
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>View info from database</title>
</head>
<body>
	<?php show(); ?>
</body>
</html>