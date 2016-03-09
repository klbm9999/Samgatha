<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
 ?>

<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >

<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>

<body>

<?php require'../header.php'?>

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
<div class="content_heading">Arz Kiya Hai! </div>
<div class="content_home">

<!--    Home tab text goes here   -->
<p style="color:#4682C3;font-size:28;text-align:left">
Arz Kiya hai is The Kavi Sammelan of Samgatha. A mehfil, A poetic ambiance, An event  belonging to all the Kavis and Shayari lovers.     Ek shaam, kavita ke naam.  
</p>
</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_home">

<!--    Problem Statement text goes here   -->
<p style="text-align:center;color:green;font-size:40">Problem statement will be updated soon!!</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_home">

<!--    registration text goes here   -->
<p style="font-size:25;color:orange;text-align:left">  
Arz Kiya Hai! is a pre-registered event. 
</p>
</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<pre style="color:grey;font-size:25;text-align:left;font-family: Arial, Helvetica, sans-serif">
1. Though the poem and the competition is only in Hindi, usage of Urdu words is permitted. 
2. Negative marks will be awarded for using words of English or any other language.
3. Overshooting of the time limit will result in negative points. 
4. Poems submitted past the deadline will not be considered.
5. Any plagiarism if identified will result in disqualification of the participant. The poems ought to be  original and written by the participants themselves.
6.The decision of the judge is final and binding 
</pre>
</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<p style="color:#3BF8E2;font-size:30">
The event will comprise of Three rounds:     Zeroth round: The participants who wish to participate will have to register and submit online, a  poem of not more than 10 lines on a given topic before a deadline. The poets of the top 20 poems  will be invited to IIITD&M to participate in the finals. The participants must submit their poems via  the following mail ID  
First round: The invited participants will have to recite a poem on a common theme which would  be given a week before the finals. A maximum of 5 minutes will be given to each participant to  present his/her recitation.  
Second round: Each participant will be given 3 words to write and recite a Shayari in not more  than 1 minute. The words will be given on spot following a 10 minute break to construct the  Shayari.   
Third Round: Based on the points from the first, second and the online round, top 5 poets will  battle out by reciting a poem of their own.     The participants need to be prepared with a poem of their own to present, incase they qualify to  the top5 
 Topics:  The topic for the Zeroth round is ‘Yatra’  Submit the poem in not more than 10 lines to the following mail ID.    </p>


</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ's</div>


<div class="content_format">

<!--    FAQ text goes here   -->

<p style="font-size:22;color:orange">
for any quaries contact
hospitality@samgatha.org
</p>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p style="color:#777C7C;font-size:35">
  Will be Updated soon!!
</p>

</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->

<pre style="color:#B23424;font-size:25">
  
  VIKAS SRIVATSAVA   KRITIKA PRAKASH   

  9941312588         9952013050

</pre>
<p style="font-size:25;color:#B10DDA;text-align:left">
Any Queries:- eloquent@samgatha.org
</p>
</div>

</div>








<!-- don't your shit after here  -->

<?php require'../footer.php'?>





<script src="/scripts/jquery.min.js"></script>


<script>
$('document').ready(function(){

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