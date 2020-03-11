<!DOCTYPE html>
<html lang="en">
<head>
 </head>
<body 
<?php 
require_once("db_connect.php");
if(isset($_GET['success']))
{
$viewquery = " select * from student";
$result = mysqli_query($connection,$viewquery);
while($row=mysqli_fetch_array($result))
{
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
}
</style>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Image</th>
</tr>
<tr>
    <td><?php echo $row['Id']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><img src= "<?php echo $row['image'];?>" height="100px" width="100px"></td>
</tr>
</table>
<?php
}
}
else
{
header("location: index.php");
}
?>
 </body>
</html>
