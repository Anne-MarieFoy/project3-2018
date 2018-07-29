<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Hamper</title>
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
$hamperid=$_GET["hamperid"];
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * FROM hamper WHERE hamperid=$hamperid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$hamperid=$row["hamperid"];
$description=$row["description"];
$hampertype=$row["hampertype"];
$image=$row["image"];
$categoryid=$row["categoryid"];
mysqli_close($link);
?>

<form method="post" action="processedit.php">
<input type="hidden" name="hamperid" value="<?php echo $hamperid; ?>"/>
<table>
<tr>
<td><?php echo "<img src='$image' width=250 height=200>" ?></td>
</tr>
<tr>
<td>Description: </td><td><textarea name="description" rows="8" cols="35"><?php echo $description;
?></textarea></td>
</tr>
<tr>
<td>Hamper Type: </td><td><textarea name="hampertype" ><?php echo $hampertype; ?></textarea></td>
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
<td><input type="submit" name="submit" value="Update Hamper"/></td>
</tr>
</table>
</form>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>