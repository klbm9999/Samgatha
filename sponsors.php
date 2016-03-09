<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
?>

<html>

<head>
<title>Sponsors | Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" href="/css/sponsors.css">
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>

<body>
<?php require 'header.php'; ?>
<!-- Put your shit here  -->



<div id="spons_head">
    <div id="s_head">SPONSORS</div>
    

  <div id="title-spons"><div id="s_title">TITLE SPONSOR</div><a href="#" ><img class="spon-img" id="img1" src="/assets/lock.png" /></a></div>


  <div id="ass-spons1"><div id="s_title">ASSOCIATE SPONSOR</div><a href="#" ><img class="spon-img" id="img2_1" src="/assets/lock.png" /></a></div>

  <div id="ass-spons2"><div id="s_title">ASSOCIATE SPONSOR</div><a href="#" ><img class="spon-img" id="img2_2" src="/assets/lock.png" /></a></div>


  <div id="co-spons1"><div id="s_title">CO-SPONSOR</div><a href="http://www.creativepolypack.com/" target="_blank"><img class="spon-img" id="img3_1" src="/assets/appl.jpg" /></a></div>


  <div id="co-spons2"><div id="s_title">CO-SPONSOR</div><a href="http://www.ozonegroup.com/" target="_blank"><img class="spon-img" id="img3_2" src="/assets/ozone.png" /></a></div>


  <div id="event-spons1"><div id="s_title">EVENT SPONSORS</div><a href="http://srushty.com/" target="_blank"><img class="spon-img" id="img4_1" src="/assets/logo-big.png" /></a></div>


  <div id="event-spons2"><a href="#" target="_blank"><img class="spon-img" id="img4_2" src="../assets/lock.png" /></a></div>


  <div id="event-spons3"><a href="http://www.prigma.co.in" target="_blank"><img class="spon-img" id="img4_3" src="/assets/lock.png" /></a></div>

  <div id="ops-spons"><div id="s_title">ONLINE SHOPPING PARTNER</div><a href="http://www.ebay.in/" target="_blank"><img class="spon-img" id="img5" src="/assets/ebay.gif" /></a></div>

  <div id="mob-spons"><div id="s_title">MOBILITY PARTNER</div><a href="http://www.uber.com" target="_blank"><img class="spon-img" id="img6" src="/assets/uber-logo.png" /></a></div>

  <div id="wsh-spons1"><div id="s_title">WORKSHOP PARTNER</div><a href="http://www.prigma.co.in" target="_blank"><img class="spon-img" id="img7_1" src="/assets/prigma.jpg" /></a></div>

  <div id="wsh-spons2"><a href="#" target="_blank"><img class="spon-img" id="img7_2" src="/assets/lock.png" /></a></div>

  <div id="wsh-spons3"><a href="#" target="_blank"><img class="spon-img" id="img7_3" src="/assets/lock.png" /></a></div>




  <div id="omp-spons"><div id="s_title">SOCIAL MEDIA PARTNER</div><a href="http://www.chennaimemes.in/" target="_blank"><img class="spon-img" id="img8" src="/assets/ch_meme.jpg" /></a></div>

  <div id="op-spons"><div id="s_title">HOSPITALITY PARTNER</div><a href="http://www.indian-bank.com/
" target="_blank"><img class="spon-img" id="img9" src="/assets/Indian-Bank.jpg" /></a></div>

  


</div>


<!-- don't your shit after here  -->
<?php require 'footer.php'; ?>

</body>

</html>