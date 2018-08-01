<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Edit Item</title>
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

$itemid=$_POST["itemid"];
$itemdescription=$_POST["itemdescription"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];


$sql= "UPDATE item SET itemdescription='$itemdescription',
categoryid='$categoryid', image='$image' WHERE itemid=$itemid";
$retval = mysqli_query( $link, $sql);
if(! $retval)
{
die('Could not update data: ' . mysql_error());
}
else
{
  header("Location: http://localhost/christmasdraw/manageitems.php");
  exit;
  }
  echo "Item Updated!";
mysqli_close($link);
?>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>