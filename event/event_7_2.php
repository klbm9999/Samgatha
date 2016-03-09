<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Electromania';
  require 'set_session_var.php';
  ob_start();
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>

<body>
<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Electromania</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading"> Electromania </div>
<div class="line"><hr></div>
<div class="content_home">

<!--    Home tab text goes here   -->
<p><br>Overview:<br></p>
<p>Electronic gadgets are all around us and have penetrated every sphere of our lives. <br>
The building and working of these marvelous gadgets have never failed to amaze us.<br>
</p>
If trivia is your cup of tea, then Electromania is just the right teabag for you to soak up in.<br>
Quiz is just the first round.<br> 
Further rounds will also be testing your skills in circuit building and logic breaking knowledge.<br> 



Electromania is an event for people who are just crazy about all the electronics around them.<br>



</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>
<div class="line"><hr></div>
<div class="content_format">

<!--    Problem Statement text goes here   -->
<ul>Electromania is an on-spot event. It has 2 rounds.</ul>

<ul>First one is a quiz and the next round will be testing you in your circuit building skills and 

how good your logic skills are.</ul>

<ul>Second round will be a software based round.</ul>

<ul>In third you will be asked to build a circuit using hardware.</ul>

</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>
<div class="content_format">
<hr>
<!--    registration text goes here   -->

<?php require 'generate_reg_form.php'; ?>

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">
<hr>
<!--    Rules text goes here   -->

<li>For round 1,answers must be clear and to the point.</li><br>

<li>In round 2, while designing/building your circuit, please adhere to the limit mentioned for 
usage of particular components if mentioned, in the problem statement.</li><br>

For example, if it is mentioned in the problem statement that you can use only 2 MUX`s 
maximum, please do not exceed 2.<br>

<li>For both rounds, please adhere to the time limit given. No extra time will be allowed.</li><br>

<li>The decision taken by the judges of the event in selecting the winners is final and will not 
be changed under any circumstances.</li><br>


</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format">
<hr>
<!--    Event format text goes here   -->
<p>
  <br>Will be updated soon...<br>
</p>
</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>
<div class="line"><hr></div>

<div class="content_format">

<!--    FAQ text goes here   -->


<ul>Q1.How many members in a team?</ul>
<ul>Ans: A Team comprises of a maximum 2 members.</ul>
<ul>Q2.What will be type of questions in quiz?</ul>
<ul>Ans: It will be based on basics of electronics.</ul>
<ul>Q3.What are the basic softwares we need to be aware of to participate in the event?</ul>
<ul>Ans: You need to be aware of Multisim.</ul>

</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>
<div class="line"><hr></div>
<div class="content_format">

<!--    Prize Money text goes here   -->
<p>
<br>Will be announced soon.<br>
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>
<div class="line"><hr></div>



<div class="contacts">

<!--    Contacts text goes here   -->

<table>
<tr><td>Rajesh</td>		<td>Technical co-ordinator</td>         <td>+91 72998 25439</td></tr>
<tr><td>Asritha</td>		<td>Technical co-ordinator</td>         <td>+91 95515 42767</td></tr>
<tr><td>Likith</td>		<td>Technical co-ordinator</td>         <td>+91 99622 86804</td></tr>


<div class="mail">Any queries :<div style="color: blue">electromania@samgatha.org</div></td></tr><br>

</table>

</div>
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