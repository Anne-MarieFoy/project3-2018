<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Questions</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h3>Manage Questions</h3>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");
$sql="SELECT * from question";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0);
echo "<table>";
echo "<tr>
            <td><strong>Title</td>
			<td><strong>Content</td>
			<td><strong>Author</td>
			<td><strong>Email</td>
			<td><strong>Created</td>
			<td><strong>Status</td>
			<td><strong>Update</td>
			<td><strong>Delete</td>
			</tr>";
while($row=mysqli_fetch_array($result)) {
			$id=$row["id"];
            $title=$row["title"];
			$content=$row["content"];
			$author=$row["author_name"];
			$email=$row["author_email"];
			$created=$row["created_at"];
			$status=$row["status"];
			
echo"<tr>
            <td>$title</td>
			<td>$content</td>
			<td>$author</td>
			<td>$email</td>
			<td>$created</td>
			<td>$status</td>
			<td><a href='updatequestion.php?id=$id     '>Answered</a></td>
			<td><a href='deletequestion.php?id=$id'>Delete</a></td>
			</tr>";
}
echo "</table>";
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