<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Add Item</title>
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

$itemdescription=$_POST["itemdescription"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];

$sql_insert="INSERT INTO item(itemdescription, categoryid, image) 
VALUES ('$itemdescription', '$categoryid', '$image')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3>Item Added!</h3>";
echo "<a href='manageitems.php'>Return to Manage Items page</a>";}
else{
       echo"An error occured, try again!";
	   }
	   mysqli_close($link);
	   ?>


</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>