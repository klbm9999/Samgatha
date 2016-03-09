<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Code Art';
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Code Art</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Code Art</div>
<div class="line"><hr></div>
<div class="content_home">

<!--    Home tab text goes here   -->

<br><br>
As the name suggests, code art is all about coding an art.<br>

We welcome u to rejuvenate the art of coding. <br>Bring out the artist in the coder.<br> Experience a new style of coding 

that pulls out the creative side of your codes.<br> It is time for several lines of codes to compile and 

transform into the thousand words unique format: The big picture.<br> You got it right- the CodeArt.

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

<hr>
<?php require 'generate_reg_form.php'; ?>

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<hr><br>
Will be updated soon..!

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<hr><br><br>
<li>Team event, with the team size of atmost 3 people.<br><br></li>
<li>The event consists of 2 rounds. <br><br></li>
<li>In the first round the participants will be given a set of shapes which they have to code using ASCII Characters only. The languages that can be used are c,c++,java,perl,python or any web-languages like html,javascript etc.<br><br></li>
<li>The teams shortlisted from the first round will proceed to second round. In the second round the participants will be given some themes, on which they have to code an art. Based on the art, points will be awarded to each team.<br><br></li>
<li>The teams with high scores will share the spotlight.<br></li>

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<hr>
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


<div class="mail">Any queries :<div style="color: blue">codeart@samgatha.org</div></td></tr><br>

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