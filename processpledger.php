<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Pledger</title>
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

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$phoneno=$_POST["phoneno"];
$email=$_POST["email"];
$sql_insert="INSERT INTO pledger(firstname, lastname, phoneno, email)
                         VALUES('$firstname', '$lastname', '$phoneno', '$email')";

if(mysqli_query($link, $sql_insert)) {
echo "<h3>Pledger added</h3><p>";
echo "<a href='admin.php'>Return to Administrator Area</a>";}
else {
            echo "An error occured, try again!";
}
mysqli_close($link)
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>