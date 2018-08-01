<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Question</title>
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
$title=$_POST["title"];
$content=$_POST["content"];
$author_name=$_POST["author_name"];
$email=$_POST["author_email"];
$sql_insert="INSERT INTO question(title, content, author_name, author_email)
                                     VALUES('$title', '$content', '$author_name', '$email')"; 
									 
if(mysqli_query($link,$sql_insert)) {
echo "<h3>Question Added!</h3>Thank you for your question. Our administrators moderate all questions and it will be attended to shortly<p>";
echo "<a href='contactus.php'>Return to contact us page</a>";}
else {
           echo "An error occured, try again!";
}
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>