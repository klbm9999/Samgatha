<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">O.P.C</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Online Programming Contest</div>
<div class="line"><hr></div>
<div class="content_home">

<!--    Home tab text goes here   -->

<br>
#include <hackers.h>
<br>
void main()
<br>
{
<br>
  printf ("Samgatha welcomes all the top hackers in the country\n");
 <br>
 printf("The race starts\n");
 <br>
 scanf("%s", &the_winner);
<br>
 printf("The winner:%s" ,the_winner);
<br>
 }
<br>

<br>
 Samgatha's Online Programming contest is the platform for the geeks all over India. Participate from wherever you like for the ultimate fun of coding.
<br>
 P.S. : Contest restricted only for frenectic coders.


</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_format">

<!--    Problem Statement text goes here   -->
<hr>
<br>
This is an online event.


</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_format">
<hr>
<br>
<!--    registration text goes here   -->


Registrations can be done online. Where and how of registrations will be announced here..!

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<hr>
<br>
Coming soon.

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<hr>
<br>
<ul>Team event, with the team size of atmost 3 people.<br></ul>
<ul>This is a one round event, the participants will be given a set of questions, which they have to code in the given time.<br></ul>

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<hr>
<br>
Coming soon.

</div>

</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">

<!--    Prize Money text goes here   -->
<hr>
<br>
Will be announced soon.


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


<div class="mail">email :<div style="color: blue">opc@samgatha.org</div></td></tr><br>

</table>

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