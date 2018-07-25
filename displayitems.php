<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Display Items</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">

<div id="displayitems">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");

$itemid=$_GET["itemid"];

$sql="SELECT * from item"; /*category WHERE item.categoryid=$categoryid AND category.categoryid=$categoryid";*/
$output=mysqli_query($link, $sql);

$getcategory=mysqli_fetch_array($output);
echo "<h3>";
echo $getitem["itemdescription"];
echo "</h3>";

$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
            <td><strong>Image</td>
			<td><strong>Description</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
           $hamperid=$row["itemid"];
		   $image=$row["image"];
		   $itemdesc=$row["itemdescription"];	
echo "<tr>
			<td><img src='$image' width=250 height=200> </td>
			<td>$itemdesc</td>
			</tr>";	
}
echo "</table>"	;
}
else
{
echo "<h3>There are currently no items in this category</h3>";
}
mysqli_close($link);
?>			
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>