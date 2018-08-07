<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Pledger Details</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h2>Pledger Details</h2>
<img src="images/baubles.jpg" width="1175" height="550" >
<table>
<tr>
<th><h3>Address</h3></th>
<p>
<td>Ballybofey, Co. Donegal</td></p>
<th><h4>Phone Number</h4></th>
<p>
<td>074 91 30369</td></p>
<th><h4>Mobile Number</h4></th>
<p>
<td>087 9975707</td></p>
<th><h4>Email Address</h4></th>
<p>
<td>annemariefoy1974@gmail.com</td></p>
</tr>
</table>

<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
/*$sql="SELECT * from comment where status = 'planned'";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>Title</td>
			<td><strong>Content</td>
			<td><strong>Author</td>
			<td><strong>Created</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
            $title=$row["title"];
			$content=$row["content"];
			$author=$row["author_name"];
			$created=$row["created_at"];
echo"<tr>
            <td>$title</td>
			<td>$content</td>
			<td>$author</td>
			<td>$created</td>
			</tr>";
}*/
mysqli_close($link);
?>
<div id="addquestion">
<h3>Please fill in your details</h3>
<p>
<form method="post" action="processdetails.php">
<table>
<tr>
<td>First Name: </td>
<td><input type="text" name="firstname" required = "required" /></td>
</tr>
<tr>
<td>Last Name: </td>
<td><input type="text" name="lastname" required = "required" /></td>
</tr>
<td>Email: </td>
<td><input type="email" name="email" required = "required" /></td>
</tr>
<tr>
<td>Phone Number: </td>
<td><input type="phoneno" name="phoneno" required = "required" /></td>
</tr>
<tr>
<td>Quantity: </td>
<td><input type="text" name="quantity" required = "required" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Add Details" /></td>
</tr>
</table>
</form>
</div>
<?php include("includes/footer.html");?>
</div>
</html>