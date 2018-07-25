<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">

<h3>Administrator Area</h3>
<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hi " . $username . "!" . " ";
echo "Choose one of the menu options to Manage Hampers, Items, Pledgers or Questions. &nbsp;
&nbsp;";
echo "<a href='logout.php'>Logout</a>";
echo "<p><a href='managehampers.php'>Manage Hampers</a>
<p><a href='manageitems.php'>Manage Items</a>
<p><a href='managepledgers.php'>Manage Pledgers</a>
<p><a href='managequestions.php'>Manage Questions</a>";
}
?>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>