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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Home</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">TOPIC</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">Da FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Home</div>
<div class="content_home">

<!--    Home tab text goes here   -->
<p>Introduction</p>
<p>
As the name suggests, the event is about writing an abstract on a given cue/topic within the word limit and submitting it online. The one who expresses his/her creativity and imagination in the most powerful and elegant way wins.
</p>
</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">TOPIC</div>

<div class="content_home">

<!--    Problem Statement text goes here   -->
<p>
Write an abstract in not more than 1500 on the following cue:
Will be revealed soon.
Your write up is subject to your own interpretation of the cue
</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_home">

<!--    registration text goes here   -->
<p> 
<li>Will be updated Soon!!</li>
</p>
</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<p>
  1. The content of your writing must not deviate from the given cue. All unrelated pieces would result in disqualification.
2. Word Limit: 1500
3. The abstract should be only and only in English.
4. Your abstract can be written in any writing genres of prose: Fiction, Non-fiction, Drama, Satire etc;
6. The judging criterion will be Depth,Story,Narrative style,Creativity and Imagination.
7. Submission will be online by attaching your word docs to the following mail-id.
8. The last date for submission is 23rd of March 11:59 PM
</p>
</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<p>
Register yourself. Write your abstract in the desired genre. Submit it online before the deadline.
</p>

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">Da FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<p>
Mail us at eloquent@samgatha.org
</p>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p>
Will be updated Soon!!!
</p>

</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->
<pre>VIKAS SRIVATSAVA   LITERATURE CLUB CORE   9941312588</pre>
<pre>KRITIKA PRAKASH    LITERATURE CLUB CORE   9952013050</pre>

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