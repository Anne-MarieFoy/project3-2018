<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Hampers</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h3>Manage Hampers</h3>

<a href="addhamper.php">Add a Hamper</a>
<br>
<br>
<a href="admin.php">Return to admin page</a>

<div id="displayhampers">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * from hamper";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>Image</td>
			<td><strong>Hamper Type</td>
			<td><strong>Description</td>
			<td><strong>Edit</td>
			<td><strong>Delete</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
           $hamperid=$row["hamperid"];
		   $hampertype=$row["hampertype"];
		   $image=$row["image"];
		   $description=$row["description"];
           echo "<tr>
			            <td><img src='$image' width=250 height=200> </td>
						<td>$hampertype</td>
			            <td>$description</td>
						<td><a href='edithamper.php?hamperid=$hamperid'>Edit</a></td>
						<td><a href='confirmdeletehamper.php?hamperid=$hamperid'>Delete</a></td>
			        </tr>";		   
}
echo "</table>"	;
mysqli_close($link);
?>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>