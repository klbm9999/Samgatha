<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  ob_start();
 ?><html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>

<body>
<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Dramatics</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Theme</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Dramatics</div>
<div class="line"><hr></div>
<div class="content_home">
<br>
<!--    Home tab text goes here   -->
<p>
Life is a drama, Surfeit of tragedies and happiness, Metaphor of enigma".<br><br>
Every morning when you unwillingly open your eyes to welcome a new day, the 
temporary ecstasy of your dreams last night, crushes you for all the lives that you aren't living.<br><br> All those lives you ardently wanted to live are waiting for you. The only thing that you need to do is to pull up your socks and walk on to the stage. All  Those resplendent costumes and a myriad of roles await you.<br><br>Let the world know what a brilliant actor you are!<br><br>
Here we bring a cause for applause, where you express to impress, to scatter joy and shatter pain!<br>
Draft your script, devise your play, let the spectators behold the mesmerizing blend of fantasy with reality.</p>
</div>
<img id="content_1_img" src="../assets/drama.jpg">
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Theme</div>

<div class="content_format">
<hr>
<!--    Problem Statement text goes here   -->
<p> 
Will be updated soon..!
</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_format">
<hr>
<!--    registration text goes here   -->
<p> 
Will start really soon..! 
</p>
</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">
<hr>
<!--    Rules text goes here   -->
<ul>Language Constraints: Hindi,English,Tamil.</ul>
<ul>Team size: 3-8</ul>
<ul>The decisions made by the Judges will be final.</ul>
<ul>Negative points will be awarded if a team overshoots the time limit given.</ul>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">
<hr>
<!--    Event format text goes here   -->
<ul>Just only one round,So give it your best shot.</ul>
<ul>Time limit: 6-12 mins</ul>
<ul>Participants are required to bring their own soundtracks(if needed) and properties for their performances.</ul>
</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>


<div class="content_format">
<hr>
<!--    FAQ text goes here   -->
<ul>Q1. Forming intercollege team accepted?</ul>
<ul>Ans. Yes.</ul>

<ul>Q2. Will accommodation be provided?</ul>
<ul>A. Yes.</ul></div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">
<hr>
<!--    Prize Money text goes here   -->
<p>
Will be announced soon..!
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>




<div class="contacts">

<!--    Contacts text goes here   -->
<hr>
<table>
<tr><td>Chakshu</td><td>               Cultural Co-ordinator    </td> <td>+91 99413 12695</td></tr>
<tr><td>Amulya </td><td>           Cultural Co-ordinator  </td><td>   +91 82204 78741</td></tr>
<div class="mail">Any queries :<div style="color: blue">dramatics@samgatha.org</div></td></tr><br>
</table>

</div>

</div>








<!-- don't your shit after here  -->

<?php require '../footer.php'; ?>



<script src="../scripts/jquery.min.js"></script>


<script>
$('document').ready(function(){

$('#content_1').addClass('showed');

$("#side_link1").click(function(){


$('.showed').removeClass('showed');

$('#content_1').addClass('showed');







});




$("#side_link2").click(function(){


$('.showed').removeClass('showed');

$("#content_2").addClass('showed');







});


$("#side_link3").click(function(){


$('.showed').removeClass('showed');

$("#content_3").addClass('showed');







});



$("#side_link4").click(function(){


$('.showed').removeClass('showed');

$("#content_4").addClass('showed');







});



$("#side_link5").click(function(){


$('.showed').removeClass('showed');

$("#content_5").addClass('showed');







});




$("#side_link6").click(function(){


$('.showed').removeClass('showed');

$("#content_6").addClass('showed');







});




$("#side_link7").click(function(){


$('.showed').removeClass('showed');

$("#content_7").addClass('showed');







});




$("#side_link8").click(function(){


$('.showed').removeClass('showed');

$("#content_8").addClass('showed');







});


});




</script>

















</body>

</html>