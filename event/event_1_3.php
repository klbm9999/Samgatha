<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Hexagon';
  require 'set_session_var.php';
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../../css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Hexagon</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Hexagon</div>
<div class="line"><hr></div>
<div class="content_home">

<!--    Home tab text goes here   -->

<br>
This is the flagship event of coding in Samgatha. In this event the participants will be tested in 6 aspects of coding, Data Structures and Algorithms,Theory of Computation,Web & app development,Object Oriented programming, DBMS and computer Networks. 
<br>

</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_format">

<!--    Problem Statement text goes here   -->
<hr><br>
This is an onsite event.


</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_format">

<!--    registration text goes here   -->
<hr><br>

<?php require 'generate_reg_form.php'; ?>

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<hr><br>
Coming soon..!

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<hr><br>
<li>Team event, with the team size of atmost 3 people.<br><br></li>
 <li>This event consists of 3 rounds.<br><br></li>
 <li>The first round is a pen and paper round where the participants will be given a set of questions from all these 6 topics. The teams which qualify the first round will proceed to the second round.<br></li>
 <li>The second round is a coding round where the participants will be given a set of programs from any of these topics. They have to code these in the given time. The teams which qualify the second round will proceed to the final round.<br><br></li>
 <li>The final round is a quiz round. The qualifying teams will be provided with a buzzer environment and the questions will be displayed on the screen. The teams should solve the questions as fast as possible, and the team which answers first will get the points for the question.<br><br></li>
 <li>In every round the teams will be awarded with some points. The teams with high points will share the spotlight.<br></li>
	 
	 

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<hr><br>
Coming soon..!

</div>

</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">

<!--    Prize Money text goes here   -->
<hr><br>
Will be announced soon..!


</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>




<div class="contacts">

<!--    Contacts text goes here   -->
<hr>

<table>
<tr><td>Roopesh Reddy</td>		<td>Technical co-ordinator</td>         <td>+91 95518 70869</td></tr>
<tr><td>Hari Krishna</td>		<td>Technical co-ordinator</td>         <td>+91 90422 36173</td></tr>


<div class="mail">Any queries :<div style="color: blue">opc@samgatha.org</div></td></tr><br>

</table>

</div>
</div>

</div>








<!-- don't your shit after here  -->

<?php require '../footer.php'; ?>



<script src="../../scripts/jquery.min.js"></script>


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