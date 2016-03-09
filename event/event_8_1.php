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


</style>


<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>

<body>

<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Home</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">Da FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Home</div>
<div class="content_format">

<!--    Home tab text goes here   -->
<p>Introduction</p>
<p>
Eloquent is an individual multi round speaking cum debating event with participants speaking and debating on a topic/cue given in every round.The last man <strike>standing</strike> speaking shall be the uncontested champion.
</br></br></br>
Come along to spectate the event if not participate as Eloquent will expand your mind. Liberate yourself from the cliches and conventions of the daily routine. Expose you to a jungle of thoughts, opinions, ideas and the world. 
</p>
</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_home">

<!--    Problem Statement text goes here   -->
<p>Problem statement will be updated soon!!</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_format">

<!--    registration text goes here   -->
<p> 
<li>Eloquent is a pre-registered event. You can either register as a solo participant, or can also win prize money anyway by getting other people to register. All you need to do is register yourself as a non-participant first and make five other people register as participants under your name. If one or more of them win, you get Rs. 500. If you register 10 people and if both winners are from your set, you get to win Rs. 1000.

</li>
</p>
</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<p><ul>
<li>1. The speech of the participants must be only and only in English.</li>
<li>2. Use of cuss words, abusive language and vulgar gestures would result in disqualification.</li>
<li>3. Negative points will be awarded if a participant overshoots the time limit given.</li>
<li>4. Anyone and anything but the decision of the judgement panel can be argued.</li>
<li>5. The rules specific to each round will be announced on spot as the rounds progress. </li>
<li>6. The rules can slightly be tweaked if the moderator/judgement panel wishes to. This will done inform well before the round. </li>
</ul></p>
</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<p>
The format of each round will be announced on the spot as the rounds progress. 
</p>


</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">Da FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->

<p><br><br>
1. If I am a participant and want to register 5/10 other participants to stand a chance at winning the 500-1000 cash prize. Is that allowed?<br>
A. Though it is a conflict of interest, it is allowed. You as a participant can register 5/10 other participants(inclusive of yourself) and stand a chance at winning the 500-1000 cash prize.
<br><br>
2.How long will the event last for?<br>
A. The duration of the event is subject to participation. It will last for a longer time if you are one of the last men/ladies speaking.(About 2hrs)
<br><br>
3. Is this a team event?<br>
A. No it isn’t a team event. But you surely can get your friends to watch you speak and make them participate as an audience.
<br><br>
4. What is the judging criteria? <br>
A. 1. Your thoughts, opinion and ideas.<br>
     2. Your way of speaking, which includes: Confidence, impactfulness and oration.<br>
     3. Humor.<br>
<br><br>
5. What do I do if Eloquent clashes with some other major event?<br>
A. As mentioned earlier, Eloquent if not winning will certainly expand your mind, liberate your soul    and expose you to a jungle of thoughts, opinions and the world.<br>
The choice is yours. It always is. 
<br></p>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p>
  Will be Updated soon!!
</p>

</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->

<pre>VIKAS SRIVASTAVA :  +91 9941312588</pre>
<pre>KRITIKA PRAKASH  :  +91 9952013050</pre>

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