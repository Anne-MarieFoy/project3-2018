<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h2>Contact Details</h2>
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
mysqli_select_db($link, "property");
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
<h3>Ask a question</h3>
<p>
<form method="post" action="processquestion.php">
<table>
<tr>
<td>Title: </td>
<td><input type="text" name="title" required = "required" /></td>
</tr>
<tr>
<td>Question: </td>
<td><textarea name="content" rows="8" cols="35" required = "required" ></textarea></td>
</tr>
<td>Your Name: </td>
<td><input type="text" name="author_name" required = "required" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input type="email" name="author_email" required = "required" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Add Question" /></td>
</tr>
</table>
</form>
</div>
<?php include("includes/footer.html");?>
</div>
</html>