<?php
//Start the Session
session_start();
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "christmasdraw");

//if the form is submitted
if (isset($_POST['adminname']) and isset($_POST['password'])){
	
//Assigning posted values to variables.
$username = $_POST['adminname'];
$password = $_POST['password'];

//checking the values are existing in the database or not
$query = "SELECT * FROM administrator WHERE adminname='$username' and
password='$password'";
$result = mysqli_query($link, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

//if the posted values are equal to the database values. the session will be created for the user.

if($count == 1){
$_SESSION['username'] = $username;	
	header("Location:admin.php");
	exit;
}
else
//if the login credentials doesn't match, show an error message and return to the login page to retry.
{
$_SESSION['errors'] = array('Your username or password was incorrect');
header("Location:adminlogin.php");
}
}
?>