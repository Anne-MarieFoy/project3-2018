<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Item</title>
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
$itemid=$_GET["itemid"];
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * FROM item WHERE itemid=$itemid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$itemid=$row["itemid"];
$itemdescription=$row["itemdescription"];
$image=$row["image"];
$categoryid=$row["categoryid"];
mysqli_close($link);
?>

<form method="post" action="processedititem.php">
<input type="hidden" name="itemid" value="<?php echo $itemid; ?>"/>
<table>
<tr>
<td><?php echo "<img src='$image' width=250 height=200>" ?></td>
</tr>
<tr>
<td>Item Description: </td><td><textarea name="itemdescription" rows="8" cols="35"><?php echo $itemdescription;
?></textarea></td>
</tr>
<tr>
<td>Category ID: </td><td><input type="number" name="categoryid" value="<?php echo
$categoryid; ?>" /></td>
</tr>
<tr>
<td>Image path: </td><td><input type="text" name="image" value="<?php echo $image;
?>"/></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Update Item"/></td>
</tr>
</table>
</form>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>