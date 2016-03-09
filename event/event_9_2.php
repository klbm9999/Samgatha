<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Wat an Idea Sirji';
  require 'set_session_var.php';
  ob_start();
 ?><html>
<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>
<body>
<?php require '../header.php'; ?>
<!-- Put your shit here -->




<a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Introduction</div></div> </a>
<a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div> </a> 
<a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div> </a> 
<a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Gallery</div></div> </a> 
<a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div> </a>
<a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ & EC</div></div></a>
<a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div> </a>
<a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div> </a>




<div class="content" id="content_1"> <!-- Home tab Contents -->
<div class="content_bg"></div>
<div class="content_heading">What an Idea SIRji</div>
<div class="content_home">
<!-- Home tab text goes here -->
<p>
WHAT AN IDEA SIRji  is a competition being organised by Samgatha as a tool to bringout and acknowledge the business whack in today's  young minds. <br>
This competition revolves around the strategies adopted by a company when it is at stake. <br>
After all, it is all such decisions that often help in stabilizing a company.<br>
Interesting, huh? Well,all you need to get an experience of this is to register and just think out of the box to get yourself out of a critical situation.
</p>

</div>


<img id="content_1_img" src="../assets/wis.png">

</div>




<div class="content" id="content_2"><!-- Problem Statement -->
<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>
<div class="content_home">
<!-- Problem Statement text goes here -->
<p>
 No prior questions (on-spot event).
</p>

</div>


</div>

<div class="content" id="content_3">
<div class="content_bg"></div>
<div class="content_heading">Registration</div>
<div class="content_home">
<!-- registration text goes here -->
<hr>

<?php require 'generate_reg_form.php'; ?>

</div>


</div>

<div class="content" id="content_4">
<div class="content_bg"></div>
<div class="content_heading">Gallery</div>
<div class="content_format">
<!-- Rules text goes here -->

<img id="content_1_img_g" src="../assets/wis_g1.JPG">


<img id="content_2_img_g" src="../assets/wis_g2.JPG">


</div>

</div>
<div class="content" id="content_5">
<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format">
<!-- Event format text goes here -->
<p>
Participants (teams each of 4 members) will be given 5 questions to think over and come up with a written solution in a span of 10 minutes per question.
P.S - Questions once displayed will not be displayed again.<br>
Venue & Timings of the event will be updated soon.

</div>
</p>

</div>



<div class="content" id="content_6">
<div class="content_bg"></div>
<div class="content_heading">FAQ & Evaluation criteria</div>

<div class="content_format">
<!-- FAQ text goes here -->
<p>
Frequently Answered Questions <br>
1. Should we come to the campus for the event? <br>
A. Yes <br>
2. Can we register On-spot? <br>
A. Yes, both pre-registrations and On-spot registrations are welcome. <br>
3. Do we have to bring anything along? <br>
A. No <br>
4. What is the duration of the event? <br>
A. One hour.<br> <br>
Evaluation Criteria <br>
1. Thinking out of the box. <br>
2. Limiting yourself to the given constraints in the problem statement. <br>


</p>
</div>


</div>



<div class="content" id="content_7">
<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>
<div class="content_home">
<!-- Prize Money text goes here -->
<p>
will be updated soon!!
</p>
</div>



</div>


<div class="content" id="content_8">
<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>



<div class="content_format">
<!-- Contacts text goes here -->
<pre>AKHILA         EPIC CLUB CORE   9710383247</pre>
<pre>RAMTHEERTH     EPIC CLUB CORE   8019689716</pre>
Any queries:-sbc@samgatha.org

</div>
</div>







<!-- don't your shit after here -->
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
