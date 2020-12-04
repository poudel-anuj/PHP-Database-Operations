<?php
include_once("connection.php");
session_start();
if (isset($_SESSION['username'])) {
header("Location: index.php");
}
if (isset($_POST['submit'])) {
extract($_POST);
$sqlquery = "SELECT * FROM student WHERE name = '$uname' && password = '$pword' ";
$result = mysqli_query($conn,$sqlquery);
$lines = mysqli_num_rows($result);
if ($lines == 1) {
 session_start();
 $_SESSION['username'] = $uname;
 header("Location: index.php");
}
else
{
	echo "faile!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="uname" placeholder="username" required>
	<input type="password" name="pword" placeholder="password" required>
	<input type="submit" name="submit" value="login" required>
</form>

</body>
</html>