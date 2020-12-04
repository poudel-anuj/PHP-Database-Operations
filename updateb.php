<?php
$conn = mysqli_connect('localhost','root','','project');
extract($_POST);
$filename=$_FILES["uploadimage"] ["name"];
	 $tempname=$_FILES["uploadimage"] ["tmp_name"];
	$folder = "images/".$filename;
	//echo $folder;
	move_uploaded_file($tempname,$folder);

$query="UPDATE `student` SET `id` = '$id', `name` = '$username', `email` = '$email', `password` = '$password', `address` = '$address', `image` = '$folder' WHERE `student`.`id` = '$id' ";
$data = mysqli_query($conn,$query);
header("Location: viewdata.php");
if($data==TRUE)
{
	echo "success";
}
else
{
	echo "error";
}
?>