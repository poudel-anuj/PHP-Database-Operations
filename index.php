<!DOCTYPE html>
<html>
<head>
	<title>Insert into the database</title>
</head>
<body>
	<form action="insert.php" method="post">
		<table align="center" style="margin-top: 100px";>
			<tr>
				<td >Name</td>
				<td><input type="text" name="username" required="required"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" required="required"></td>
			</tr>

			<tr>
				<td>password</td>
				<td><input type="password" name="password" required="required"></td>
			</tr>

			<tr>
				<td>Address</td>
				<td><input type="text" name="address" required="required"></td>
			</tr>

			<tr>
			
				<td colspan="4" align="center"><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>