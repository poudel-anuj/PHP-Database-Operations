<?php
include_once("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Data</title>
</head>
<body>
<form action="searchback.php" method="post">
<input type="text" name="searchname" placeholder="search">
<input type="submit" name="search" value="search">	
</form>
</body>
</html>