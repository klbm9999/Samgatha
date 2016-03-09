<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  ob_start();
 ?>
<html>

<head>
<title>About | Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../css/about.css" >
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">


</head>

<body>

<?php require 'header.php'; ?>

<!-- Put your shit here  -->




<div class="content">
    
    <div class="content_bg"></div>


<div id="samg_logo"><img id="samg_img" src="../assets/p1.png"></div>

 <div id="legacy_content">   
<div id="legacy">Our Legacy</div><br><hr/>     
<div id="legacy_text">  <p> Samgatha 2016 is an annual techno-cultural festival of 
IIITDM,Kancheepuram. Since its humble beginnings as an intra-college festival in
 2011, samgatha has blossomed into a fest where the best and the brightest students
  come together. </p>
  <p>
   Aptly named as the Battle of wits, Samgatha is the ultimate shop where you get 
   to experience a technical bonanza and a cultural extravaganza. One gets to   
    witness unrestrained passion, raw talent, incredible finesse and infinite 
    enthusiasm brought to the fore here. Samgatha-16 promises to be truly 
    multicultural and cosmopolitan fest open to all colleges. It will see more 
    than 30 events across 4 unforgettable days with a dazzling display of skills
     and creativity at it enchanting best.
    </p></div>
</div>


<div id="youtube_frame"><iframe width="355" height="200" src="https://www.youtube.com/embed/CIXg6F1Puec" frameborder="0" allowfullscreen></iframe></div>

<div id="youtube_frame2"><iframe width="355" height="200" src="https://www.youtube.com/embed/z-pNHLcut8k" frameborder="0" allowfullscreen></iframe></div>

</div>



<!-- don't your shit after here  -->

<?php require 'footer.php'; ?>

</body>

</html>