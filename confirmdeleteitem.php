<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Confirm Delete Item</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">

<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$itemid=$_GET["itemid"];
$sql="SELECT * from item where itemid=$itemid";
$result=mysqli_query($link, $sql);
             echo "<h3>Confirm Delete Item</h3>";
			 echo "<p>";
echo "<table>";
echo "<tr>
             <td><strong>Image</td>
			 <td><strong>Item Description</td>
			 </tr>";
$row=mysqli_fetch_array($result);
             $image=$row["image"];
			 $itemdescription=$row["itemdescription"];	
             echo "<tr>
			              <td><img src='$image' width=100 height=100> </td>
						  <td>$itemdescription</td>
						  </tr>"; 		
echo "</table>";						  
echo "Are you sure you want to delete this item? <p>
			<a href='deleteitem.php?itemid=$itemid'>Delete</a>
			<a href='manageitems.php'>Cancel</a>";

mysqli_close($link);
?>						  

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>