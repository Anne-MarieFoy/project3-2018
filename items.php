<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Items</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">

<div id="content">
<div id="Hamperitems"><h2>Hamper Items</h2></div>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);

mysqli_select_db($link, "christmasdraw");

$categoryid=$_GET["categoryid"];

$sql= "SELECT * FROM item, category WHERE item.categoryid=$categoryid AND category.categoryid=$categoryid";
$result=mysqli_query($link,$sql);

if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>Image</td>
			<td><strong>Description</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
           $categoryid=$row["categoryid"];
		   $Itemid=$row["Itemid"];
		   $ItemDescription=$row["Description"];
		   $image=$row["image"];
		   echo "<tr>
						 <td><img src='$image' width=225 height=200></td>
						 <td>$ItemDescription</td>
					</tr>";
}
echo "</table>";
mysqli_close($link);
?>
<p>
<button onclick="goBack()">Go back to Hampers</button>
<script>
function goBack() {
   window.history.back();
}
</script>
</p>			   
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>