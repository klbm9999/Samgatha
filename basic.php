<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" >
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">
<meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″ />
</head>

<body>

<?php require 'header.php'; ?>

<!-- Put your shit here  -->


<div id="dates"><div class="dates">2&nbsp</div><div class="dates">4&nbsp</div><div class="dates"> th&nbsp</div><div class="dates">&nbsp-&nbsp</div><div class="dates">2&nbsp</div><div class="dates">7&nbsp</div><div class="dates">th&nbsp</div> <div class="dates">M&nbsp</div><div class="dates">A&nbsp</div><div class="dates">R&nbsp</div><div class="dates">C&nbsp</div><div class="dates">H&nbsp</div></div>


<a href="makers/makers.php">
<div id="makers_link">
MAKERS FAIR</div><img id="gear" src="/assets/gear2.png">
</a>



<iframe id="teaser" width="560" height="315" src="https://www.youtube.com/embed/h6BkbgRAgeY" frameborder="0" allowfullscreen></iframe>

<div id="updates">

<div class="update-tab" id="tab1">
<div class="update_text">Problem Statement for Robotics Event Astayanax can now be downloaded from events page</div>
</div>


<div class="update-tab" id="tab2">
<div class="update_text">Account registrations have started !</div>
</div>


<div class="update-tab" id="tab3">
<div class="update_text">Vehicle Overhauling Workshop sponsored by Prigma Edutech Services will be held on 5th and 6th March</div>
</div>

</div>



<!-- don't your shit after here  -->

<?php require 'footer.php'; ?>

</body>

</html>