<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Edit Hamper</title>
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

$hamperid=$_POST["hamperid"];
$description=$_POST["description"];
$hampertype=$_POST["hampertype"];
$categoryid=$_POST["categoryid"];
$image=$_POST["image"];


$sql= "UPDATE hamper SET description='$description', hampertype='$hampertype',
categoryid='$categoryid', image='$image' WHERE hamperid=$hamperid";
$retval = mysqli_query( $link, $sql);
if(! $retval)
{
die('Could not update data: ' . mysql_error());
}
else
{
  header("Location: http://localhost/christmasdraw/managehampers.php");
  exit;
  }
  echo "Hamper Updated!";
mysqli_close($link);
?>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>