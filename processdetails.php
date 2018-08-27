<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Details</title>
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
						 
/*$hamperid=$_POST["hamperid"];
$itemid=$_POST["itemid"];
$pledgerid=$_POST["pledgerid"];*/
$quantity=$_POST["quantity"];
/*$sql_insert="INSERT INTO quantity(hamperid, itemid, pledgerid quantity)
                         VALUES('$hamperid', '$itemid', '$pledgerid', 'quantity')";*/
$sql2_insert="INSERT INTO quantity(quantity)
                         VALUES('quantity')"	;					 

if(mysqli_query($link, $sql_insert)) {
echo "<h3>Details added</h3><p>";
echo "<a href='displayitems.php'>Move to pledge item area</a>";}
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