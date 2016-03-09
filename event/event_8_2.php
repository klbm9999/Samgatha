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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Resonance</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Topic</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">Da FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Resonance</div>
<div class="content_format">

<!--    Home tab text goes here   -->
<p>Event Overview</p>
<p><br>
Resonance is a multi round writing event with participants pouring their hearts on several cues/topics given to them. <br><br>

If you believe you are a good writer, participate. If you believe you are not a good writer, participate as we admire anything which is raw and honest.<br><br>

Come along just to pour yourself in and vent your emotions out, if not winning. 
</p>

</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_home">

<!--    Problem Statement text goes here   -->
<p>
  The topics will be revealed on spot as the rounds progress.
</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_home">

<!--    registration text goes here   -->
<p>
<li>Just walk in. </li>
</p>
</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<p><br><ul>
<li>The writing must be only and only in english.</li>
<li>All participants must adhere to the time limit specific to each round. </li>
<li>Use of cuss words and abusive language will result in disqualification.</li>
<li>The rest of the rules if any will be told before every round. </li>
</ul>
</p>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<p>
The event format will be revealed on spot as the rounds progress..
</p>

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">Da FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->

<p><br><br>
1. Is it a team event?<br>
A. No. You write solo.<br><br>


2. What is the judging criteria.<br>
A. The judging criteria is subject to the nature of the cue/topic given. It could be anything from depth, humor, creativity, narrative style, but not grammar.
<br><br>
3. I am not so great at English but I wish to write and pour out myself?<br>
A. Grammar and the technicalities of the English language do not hold high priority in judging the write up. <br><br>

4. How long will the event last for?<br>
A. The event will last for about an hour. There is no filtering or elimination in any of the rounds.<br><br>

</p>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p>
Will be updated Soon!!
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->

<pre>Vikas Srivastava : +91 9941312588</pre>
<pre>Kritika Prakash  : +91 9952013050</pre>

Any Queries:- eloquent@samgatha.org
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