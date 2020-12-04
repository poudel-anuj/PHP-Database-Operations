<?php
error_reporting(0);
include_once("connection.php");
require("search.php");
extract($_POST);

$username = $_POST['searchname'];
if (isset($_POST['search'])) {
$number = 1;
$sqlquery = "SELECT * FROM student WHERE name LIKE '%".$username."%' ";
$result = mysqli_query($conn,$sqlquery);
echo "<table style='border:1px solid black'>
      <tr>
      <th>SN</th>
      <th>name</th>
      <th>Email</th>
      <th>Adress</th>
      <th>Photo</th>
      </tr>";
while($row = mysqli_fetch_assoc($result)){
echo"
      <tr>
      <td>".$number."</td>
      <td>".$row['name']."</td>
      <td>".$row['email']."</td>
      <td>".$row['address']."</td>
      <td><img src='".$row['image']."' style='width:100px;height:100px;'></td>
      </tr>
      
";
$number++;
}
echo "</table>";
}
else
{
	echo "No data found!";
}
?>