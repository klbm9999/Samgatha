<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Samgatha Main Quiz';
  require 'set_session_var.php';
  ob_start();
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

<body>

<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">S. M. Q.</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">SAMGATHA MAIN QUIZ</div>
<div class="content_home">

<!--    Home tab text goes here   -->
<p>
The joy of quizzing lies not in knowing facts, but in connecting the dots to get the answer. If something similar to this is your philosophy behind quizzing, you are at the right place.<br> 	If you are a good quizzer, there should be no second thought. If you aren't , we would ensure you become a better quizzer. Samgatha Main Quiz is back this time in association with Walnut Knowledge Solutions, Bangalore to give you a quizzing experience of the highest quality.

</p>

</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_home">

<!--    Problem Statement text goes here   -->
<p>
This is an onspot event..
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
<p>
Rules and Regulations will be given to you during the event.
</p>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<p>
 1.  A written prelims will be conducted during SAMGATHA.<br>
 2.  Full time college students from all disciplines are allowed.<br>
 3.  Maximum team size allowed is 3.<br>

</p>



</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<p>
1. Are there any pre-requisites? <br>
As we said, "Curiosity" and "Never give up" attitude will do and yeah, carrying your own pen would be  appreciated. <br>
2. Are cross-college teams allowed? <br>
Yes. <br>
3. Do I have to register for the event ? <br>
Not necessary. <br>
</p>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p>
  Coming soon!!!
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>




<div class="content_format">

<!--    Contacts text goes here   -->
<pre>CHETANA ROHITH   EVENT CO-ORDINATOR  9941350425</pre>
 <p>

Any Queries:- quiz@samgatha.org

</p>
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