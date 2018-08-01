<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Update Comment</title>
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
$id=$_GET["id"];
$sql= "UPDATE question SET status='planned' WHERE id=$id";
$retval = mysqli_query($link, $sql);
if(! $retval )
{
die('Could not update data:' .mysql_error());
}
else
{
header("Location: http://localhost/christmasdraw/managequestions.php");
exit;
}
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>