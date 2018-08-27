<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Pledger</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h3>Edit Pledger</h3>

<?php
$server="localhost";
$dbuser="root";
$password="";
$pledgerid=$_GET["pledgerid"];
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * FROM pledger WHERE pledgerid=$pledgerid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$pledgerid=$row["pledgerid"];
$firstname=$row["firstname"];
$lastname=$row["lastname"];
$phoneno=$row["phoneno"];
$email=$row["email"];
mysqli_close($link);
?>

<form method="post" action="processeditpledger.php">
<input type="hidden" name="pledgerid" value="<?php echo $pledgerid; ?>"/>
<table>
<tr>
<td>First Name: </td><td><textarea type="text" name="firstname" ><?php echo $firstname; ?></textarea></td>
</tr>
<tr>
<td>Last Name: </td><td><textarea type="text" name="lastname" ><?php echo $lastname; ?></textarea></td>
</tr>
<tr>
<td>Phone No: </td>
<td><input type="number" name="phoneno" value="<?php echo $phoneno; ?>"/></td>
</tr>
<tr>
<td>Email: </td><td><textarea name="email" cols="35"><?php echo $email; ?></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Update Pledger"/></td>
</tr>
</table>
</form>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>