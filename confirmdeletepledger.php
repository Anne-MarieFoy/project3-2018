<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Confirm Delete Pledger</title>
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
$pledgerid=$_GET["pledgerid"];
$sql="DELETE FROM pledger WHERE pledgerid=$pledgerid";

$retval = mysqli_query( $link, $sql);
if(! $retval)
{
die('Could not delete data: ' . mysql_error());
}
else
{
  header("Location: http://localhost/christmasdraw/managepledgers.php");
  exit;
}
mysqli_close($link);
?>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>