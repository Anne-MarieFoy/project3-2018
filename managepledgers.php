<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Pledgers</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h3>Manage Pledgers</h3>

<a href="addpledger.php">Add a Pledger</a>
<br>
<br>

<div id="displaypledgers">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * from pledger";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>First Name</td>
			<td><strong>Last Name</td>
			<td><strong>Phone No.</td>
			<td><strong>Email</td>
			<td><strong>Edit</td>
			<td><strong>Delete</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
            $pledgerid=$row["pledgerid"];
			$firstname=$row["firstname"];
			$lastname=$row["lastname"];
			$phoneno=$row["phoneno"];
			$email=$row["email"];
			echo "<tr>
			             <td>$firstname</td>
						 <td>$lastname</td>
						 <td>$phoneno</td>
						 <td>$email</td>
			             <td><a href='editpledger.php?pledgerid=$pledgerid'>Edit</a></td>
						 <td><a href='confirmdeletepledger.php?pledgerid=$pledgerid'>Delete</a></td>
					</tr>";
}
echo "</table>" ;
mysqli_close($link);
?>
<p>
<button onclick="goBack()">Go back to Admin</button>
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