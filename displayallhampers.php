<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Display All Hampers</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h2>All Hampers</h2>
<div id="displayhampers">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * from hamper";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>Image</td>
			<td><strong>Hamper Type</td>
			<td><strong>Description</td>
			<td><strong>Items</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
           $hamperid=$row["hamperid"];
		   $image=$row["image"];
		   $hampertype=$row["hampertype"];
		   $hamperdesc=$row["description"];
           echo "<tr>
			            <td><img src='$image' width=250 height=200> </td>
			            <td>$hampertype</td>
						<td>$hamperdesc</td>
						<td><a href='displayitems.php'?hamperid=$hamperid'>Items</a></td>
			        </tr>";		   
}
echo "</table>"	;
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>