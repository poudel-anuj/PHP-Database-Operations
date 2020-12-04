<?php
	$con = mysqli_connect('localhost','root','','test');

	function showdata()
	{
		global $con;
		$query="SELECT * FROM student";
		$run = mysqli_query($con,$query);
		if($run == TRUE){
			?>
			<table  width="30%" padding:10px;>
				<tr style="padding:10px;">
					<th>Id</th><th>Name</th><th>Email</th><th>Address</th><th colspan="2";>operations</th>
				</tr>
				<?php
			while ( $data = mysqli_fetch_assoc($run)) {
				?>
				<tr>
					<td><?php echo $data['id']; ?></td><td><?php echo $data['name']; ?></td><td><?php echo $data['email']; ?></td><td><?php echo $data['address']; ?></td>
					<td><a href='update.php?id=<?php echo $data["id"];?>'>Edit</a></td>
					<td><a href='delete.php?id=<?php echo $data["id"]?>'>Delete</a></td>


				</tr>
			<?php } ?>

	</table>

		<?php
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users Data</title>
</head>
<body>
	<style >
		td{
			padding:8px;
		}
	</style>
	
	<?php showdata(); ?>
</body>
</html>