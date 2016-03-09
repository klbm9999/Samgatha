<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  ob_start();
 ?><html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../../css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require '../header.php'?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">The Comedy Inn</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Judging Criteria</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registrations</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">Da FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">The Comedy Inn</div>
<div class="content_home">

<!--    Home tab text goes here   -->

The improv, sometimes it works, sometimes it doesn't, but when it does, it's like open-field running<br> - Robin Williams
<br><br>
Spontaneity is the essence of this competition, and humor is the limb on which it rests. Bring out the comic inside you and make the audience burst into peals of laughter.<br><br> Be creative, be witty, be spontaneous and improvise.


</div>
<img id="content_1_img" src="../assets/fun_in.png" >

</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Judging Criteria</div>

<div class="content_format">

<!--    Problem Statement text goes here   -->
<br>
<ul>
<li>Acting</li>
<li>Humour</li> 
<li>Spontaneity</li>
<li>Screenplay</li>
<li>Overall impact</li>
</ul>

</div>


</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_home">

<!--    registration text goes here   -->


pre registrations



</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<br>

<ul><li>Team size: 3-4  </li></ul>
<p>
A moderator will be present to control the overall flow of the performance. The moderator holds the power to pause or stop the performance anytime he wishes. No arguments against the moderator will be entertained. His decision will be final and binding. 
</p>
<p>
<ul>

<li> No blackouts are allowed.</li>
<li>No production material and props are allowed.</li>
<li>No pre-recorded music is allowed.</li>
<li>Obscenity (at the discretion of the judges) of any kind is not allowed and will lead to immediate disqualification.</li>
<li>Inappropriate content, blasphemy or content defaming any political or religious group is strictly prohibited.</li>
<li>Any kind of fluid, live animals, flame, heavy object or any material which has a possibility of damaging the stage is prohibited.</li>
<li>Time Limit should be followed. Participants will be penalized by judges for not doing so.</li>
<li>The time duration for prelims and finals includes performance time and stage setting time. The given time duration is from empty stage to empty stage.</li>
<li>The decision of the judges will be final and binding.</li>
</ul>

</p>
</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<br>
Round 1 - Your Skit Your Script
<br><br><br>
Round 2 - Spontaneous Round

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">Da FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->

</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
coming soon
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->
NAVEEN	- 8331879382<br><br>
YESWANTH - 9941319146	

</div>

</div>








<!-- don't your shit after here  -->

<?php require '../header.php'?>

<script src="/scripts/jquery.min.js"></script>


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