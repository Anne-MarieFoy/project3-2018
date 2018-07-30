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
<h3>Manage Items</h3>

<a href="addhamper.php">Add an Item</a>
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
$sql="SELECT * from item";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>Image</td>
			<td><strong>Item Description</td>
			<td><strong>Edit</td>
			<td><strong>Delete</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
           $itemid=$row["itemid"];
		   $image=$row["image"];
		   $itemdescription=$row["itemdescription"];
           echo "<tr>
			            <td><img src='$image' width=250 height=200> </td>
			            <td>$itemdescription</td>
						<td><a href='edititem.php?itemid=$itemid'>Edit</a></td>
						<td><a href='confirmdeleteitem.php?itemid=$itemid'>Delete</a></td>
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