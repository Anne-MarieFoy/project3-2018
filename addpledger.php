<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add a Pledger</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">

<div id="content">
<h3>Add Pledger</h3>
<p>
<div id="addpledger">
<form method="post" action="processpledger.php">
<table>
<tr>
<td>First Name: </td>
<td><textarea type="text" name="firstname" required="required"/></textarea></td>
</tr>
<tr>
<td>Last Name: </td>
<td><textarea type="text" name="lastname" required="required"/></textarea></td>
</tr>
<tr>
<td>Phone No.: </td>
<td><input type="text" name="phoneno" required="required"/></td>
</tr>
<tr>
<td>Email: </td>
<td><textarea type="text" name="email" required="required"/></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Add Pledger"/></td>
</tr>
</table>
</form>
</div>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>