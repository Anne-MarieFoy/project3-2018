<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add an Item</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">

<div id="content">
<h3>Add an Item</h3>
<p>
<div id="additem">
<form method="post" action="processadditem.php">
<table>
<tr>
<td>Item Description: </td>
<td><textarea name="itemdescription" rows="8" cols="35" required="required"/></textarea></td>
</tr>
<tr>
<td>Category ID: </td>
<td><input type="number" name="categoryid" required="required"/></td>
</tr>
<td>Image Path:</td>
<td><input type="text" name="image" required="required"/></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Add Item"/></td>
</tr>
</table>
</form>
</div>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>