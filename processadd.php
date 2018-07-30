<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Add Hamper</title>
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

$description=$_POST["description"];
$hampertype=$_POST["hampertype"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];

$sql_insert="INSERT INTO hamper(description, hampertype, categoryid, image) 
VALUES ('$description', '$hampertype', '$categoryid', '$image')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3>Hamper Added!</h3>";
echo "<a href='managehampers.php'>Return to Manage Hampers page</a>";}
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