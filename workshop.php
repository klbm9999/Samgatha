<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
 ?>
<html>

<head>
<title>Workshops | Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" >
<link rel="stylesheet" type="text/css" href="css/workshop.css">
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">
</head>

<body>

<?php require 'header.php'; ?>

<!-- Put your shit here  -->

<div id="workshop_heading">
    <div id="w-head">Workshops</div>
    <div id="workshop_nav">
   <a href="#"><div class="workshop_tabs" id="t1"><div id="tt1">Multi Touch and Augmented Reality</div>
   
    <div class="w-content" id="w1-content">
    This workshop is based on two technologies, 1st is touch technology , other is gesture controlling technology 
   <br><br><br> Workshop Successfully Completed on 31st Jan 2016</div>
   
   </div></a>
   <a href="#"> <div class="workshop_tabs" id="t2"><div id="tt2">Vehicle Overhauling Workshop</div>
   
   <div class="w-content" id="w2-content">
   Prigma Edutech Services is going to conduct a two day workshop on the topic "Vehicle Overhauling" in our campus.
   <br><br><br> Date: 5th & 6th March 2016 <br> Workshop Successfully Completed
   </div>
   </div></a>
   <a href="#"> <div class="workshop_tabs" id="t3"><div id="tt3">CYNOSURE</div>
   
   <div class="w-content" id="w3-content">
   Cynosure-our T-shirt making workshop<br>
   Enliven your t-shirts by suffusing with colours to make exuberant patterns and take home your adorable piece of creation.
Flavour your wardrobe this March and get envied for your swag!
<br><br>Group:2-3 members.<br>Entry fee: 100/- bucks per team!
<br>Time Duration: 3 hours.


   </div>
   
   </div></a>
   <a href="workshop/workshop/w4.php"> <div class="workshop_tabs" id="t4"><div id="tt4">Gesture Controlled Robots</div>
   
   <div class="w-content" id="w4-content">
   
   SP Robotic Works is conducting a workshop on 'Gesture Controlled Robots'. 
<br><br>
Venue: IIITDM Kancheepuram
<br>
Dates: 19th and 20th March
<br>
Time: 9:00 AM to 5:00 PM
<br>
Entry fee is Rs. 4800/- per team (Max 4 members per team)
<br><br>
** A take away kit will be provided for the team**
   
   
   
   </div>
   
   
   </div></a>
    </div>



	</div>



<!-- don't your shit after here  -->

<?php require 'footer.php'; ?>

</body>

</html>