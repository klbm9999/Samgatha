<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../../css/workshop/w.css" >
</head>

<body>

<img id="samg" src="../../assets/samg_white_1.png">

<div id="head">
<svg viewBox="0 0 1100 600">
  <symbol id="s-text">
    <text text-anchor="middle" x="25%" y="48%" class="text--line">
      S
    </text>
    <text text-anchor="middle" x="62%" y="48%" class="text--line2">
      AMGATHA
    </text>
    <text text-anchor="middle" x="75%" y="30%" class="text--line3">
      2016
    </text>
  </symbol>

  <g class="g-ants">
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
  </g>


</svg></div>


<div id="dates"><div class="dates">2&nbsp</div><div class="dates">4&nbsp</div><div class="dates"> th&nbsp</div><div class="dates">&nbsp-&nbsp</div><div class="dates">2&nbsp</div><div class="dates">7&nbsp</div><div class="dates">th&nbsp</div> <div class="dates">M&nbsp</div><div class="dates">A&nbsp</div><div class="dates">R&nbsp</div><div class="dates">C&nbsp</div><div class="dates">H&nbsp</div></div>


<div id="nav">
<a href="../../workshop.php"><div id="night" class="lay2"><div id="nightt">WORKSHOPS</div></div></a>
<a href="../../events.php"><div id="event" class="lay2"><div id="eventt">EVENTS</div></div></a>
<a href="../../sponsors.php"><div id="spon" class="lay2"><div id="spont">SPONSORS</div></div></a>
<a href="../../contact.php"><div id="contact" class="lay2"><div id="contactt">REACH US</div></div></a>
<a href="../../nights.php"><div id="about" class="lay2"><div id="aboutt">GALLERY</div></div></a>
<a href="../../login.php"><div id="register" class="lay2"><div id="registert">Sign In/Up</div></div></a>

</div>

<!-- Put your shit here  -->



<div id="h1">
<h1>Gesture Controlled Robot</h1>
</div>

<img id="w_img_1" src="../../assets/w4_bg.jpg" >


<div id="content_parellel">


</div>


<div id="content_scroll">


<div class="content_box">
This workshop is designed to understand all the basic operations required for
building an autonomous robot, with the capability of sensing its surroundings and deciding
its reaction for various operations. The advanced concept of haptic controlled robot will be
implemented in simple and understandable ways with brief discussion on further
enhancements. The sampling of inputs and the control algorithms to be used to filter the
inputs into a usable format will be analyzed in depth. The concepts covered during this
program will be :
</div>

<div class="content_box_small" id="topic_1">

 Microcontroller Family
</div>

<div class="content_box_small" id="topic_2">

Architecture of 8 Bit Microcontrollers
</div>


<div class="content_box_small" id="topic_3">

Analog to Digital Conversion


</div>

<div class="content_box_small" id="topic_4">

Using analog sensors
</div>


<div class="content_box_small" id="topic_5">

Sampling the inputs

</div>

<div class="content_box_small" id="topic_6">

Implementing Filters to avoid noise
</div>
<div class="content_box_small" id="topic_7">

Motor Drivers and its internal architecture
</div>


<div class="content_box_small" id="topic_8">

Dual Motor Direction Control


</div>


<div class="content_box_small" id="topic_9">

Pulse Width Modulation
</div>


<div class="content_box_small" id="topic_10">

Types of gesture detections

</div>
<div class="content_box_small" id="topic_11">
 Controlling robot using gestures
</div>



</div>



<div class="content_contact">


<div class="contact_box">
Workshop Co-ordinators 
<br><br>
Siri : 9789011561
<br><br>

Jeshwanth : 9790564371
</div>



</div>


<!-- don't your shit after here  -->

<footer>

<div id="webops"><webops>webops@samgatha.org</webops></div>
<div id="link1"  class="footer_link" ><a  class="f_l" href="../about.html" traget='_blank'>About Us</a></div>
<div id="link2"  class="footer_link"><a  class="f_l" href="../feedback.html" traget='_blank'>Feedback</a></div>
<div id="link3"  class="footer_link"><a  class="f_l" href="../sponsors.html" traget='_blank'>Sponsors</a></div>
<div id="link4"  class="footer_link"><a  class="f_l" href="../hospi.html" traget='_blank'>Hospitality</a></div>
<div id="link5"  class="footer_link"><a  class="f_l" href="../makeindia.html" traget='_blank'>Make in India</a></div>
<div id="link6"  ><a href="http://www.facebook.com/samgthaatiiitdm" traget='_blank'><img src="../../assets/fb.svg"  width="30px" height="30px"></a></div>
<div id="link7"  ><a href="http://twitter.com/samgatha" traget='_blank'traget='_blank'><img src="../../assets/twit.svg"  width="30px" height="30px"></a></div>
<div id="link8"  ><a href="http://www.youtube.com/user/SamgathaIIITDM/featured" traget='_blank'><img src="../../assets/youtube.svg"  width="30px" height="30px"></a></div>

</footer>


<script src="../../scripts/jquery.min.js"></script>

</body>

</html>