<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Dance Wars';
  require 'set_session_var.php';
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Dance Wars</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Theme</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">Note</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Dance Wars</div>
<div class="content_home">
<hr><br><br>
A team gets formed when there is a connection and co-ordination among the members.Test the telepathy among your team members on the grand stage of DANCE WARS.
'Tell a story or not' that's your choice .All we  ask of you is this, add a hip to your hop and tap those feet fast.Make the audience groove with your team,with
longing in their hearts to be a part.

<!--    Home tab text goes here   -->


</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Theme</div>

<div class="content_home">

<!--    Problem Statement text goes here   -->
<p>
	Both theme and non theme dances are encouraged..
</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_home">

<!--    registration text goes here   -->
<hr>

<?php require 'generate_reg_form.php'; ?>

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<p><br>
	<li>MINIMUM NUMBER OF PARTICIPANTS PER TEAM IS  6<br>
	<li>PARTICIPANTS SHOULD GET THEIR OWN PROPERTIES IF REQUIRED<br>
	<li>SOUNDTRACKS SHOULD BE SUBMITTED AT LEAST AN HOUR BEFORE THE EVENT IN A PENDRIVE<br>
	<li>WATER, FIRE AND HEAVY OBJECTS ARE NOT ALLOWED ON THE STAGE<br>
	<li>DURING THE EVENTS THE PARTICIPANTS ARE REQUIRED TO TAKE CARE OF THEIR BELONGINGS<br>
	<li>PARTICIPANTS SHOULD PRODUCE THEIR SAMGATHA ID  AT THE TIME OF REGISTRATION<br>
	<li>PARTICIPANTS NOT READY AT THE START OF THE EVENT WILL STAND DISQUALIFIED<br>
	<li>THE ORGANISING TEAM HOLDS THE RIGHT TO CHANGE THE RULES  ANY TIME<br>

	
</p>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<p>
<pre>
<li>THIS IS A SINGLE ROUND COMPETITION
<li>THERE WILL BE BROWNIE POINTS FOR THEME,COORDINATION,etc.
<li>TIME DURATION 5-8Mnts
<li>TEAMS THAT EXCEED THE TIME DURATION WILL HAVE NEGATIVE POINTS
<li>ALL TYPES OF DANCE FORMS ARE ALLOWED EXCEPT PURE CLASSICAL
<li>JUDGES DECISION WOULD BE FINAL

</pre>
</p>
</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">NOTE</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<pr><br>
<li>ACCOMODATION WILL BE PROVIDED FOR THE PARTICIPANTS IF REQUIRED<br><br>
<li>INTER COLLEGE TEAMS ARE ALLOWED<br><br>
<li>ANY NUMBER OF TEAMS FROM A COLLEGE CAN PARTICIPATE<br><br>
<li>BOTH THEME AND NON THEME DANCES ARE ENCOURAGED<br>
</pr>


</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p>
  Coming Soon
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->
<pre>DIVYA                EVENT CO-ORDINATOR     9941210593</pre>
<pre>SWAMINATH            EVENT CO-ORDINATOR     8978878338</pre>
<pre>ARUN TEJ             EVENT CO-ORDINATOR     9551920115</pre>
<pre>POOJITHA MANDAVA     EVENT CO-ORDINATOR     9941313529</pre><br>
email : nrithya@samgatha.org<br>
</div>

</div>








<!-- don't your shit after here  -->

<?php require '../footer.php'; ?>





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