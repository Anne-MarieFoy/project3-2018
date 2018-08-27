<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h2>Welcome to the Christmas Draw site</h2>
<p>Every year I organise a Christmas Draw to raise money for a local charity. This years beneficiary is the Kevin Bell Repatriation Trust.</p>

<h3>Time until the Raffle</h3>

<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
 var countDownDate = new Date("Dec 20, 2018 16:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
 </script>
 
 <img src="images/Baubles.jpg" width="1175" height="400" >

<h3>Mission Statement</h3>
<h4>To help deserving charities and organisations who are in need of funding to make a change in peoples lives.</h4>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>