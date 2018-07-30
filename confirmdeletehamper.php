<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Confirm Delete Hamper</title>
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
$hamperid=$_GET["hamperid"];
$sql="SELECT * from hamper where hamperid=$hamperid";
$result=mysqli_query($link, $sql);
             echo "<h3>Confirm Delete Hamper</h3>";
			 echo "<p>";
echo "<table>";
echo "<tr>
             <td><strong>Image</td>
			 <td><strong>Hamper Type</td>
			 <td><strong>Description</td>
			 </tr>";
$row=mysqli_fetch_array($result);
             $image=$row["image"];
			 $hampertype=$row["hampertype"];
			 $description=$row["description"];	
             echo "<tr>
			              <td><img src='$image' width=100 height=100> </td>
						  <td>$hampertype</td>
						  <td>$description</td>
						  </tr>"; 		
echo "</table>";						  
echo "Are you sure you want to delete this hamper? <p>
			<a href='deletehamper.php?hamperid=$hamperid'>Delete</a>
			<a href='managehampers.php'>Cancel</a>";

mysqli_close($link);
?>						  

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>