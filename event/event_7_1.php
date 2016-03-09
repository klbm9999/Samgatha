<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Spark';
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Spark</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Spark</div>
<div class="line"><hr></div>
<div class="content_home">



<p>
<br><br>
"Making a circuit is a skill, Building a circuit is a talent".<br>

Have you got the zeal for circuit building and code breaking?<br><br>
Are you among the people who just love to go out of the ordinary to design a circuit?<br>
Then Spark is the right competition for you!!<br><br>
Come participate and let your design creativity overflow in getting solutions to these mind boggling problems.<br>

<br>


</p>


</div>


<img id="content_1_img" src="../assets/spark.jpg">

</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>
<div class="line"><hr></div>
<div class="content_format">

<!--    Problem Statement text goes here   -->

<br>You can get the problem statement <a href="spark.pdf" target="_blank">here</a><br>


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

<li> Registrations must be done strictly before the deadline mentioned. No extension of 
deadline will be provided under any circumstances.</li><br>

<li>While designing/building your circuit, please adhere to the limit mentioned for usage of 
particular components if mentioned, in the problem statement.</li>

For example, if it is mentioned in the problem statement that you can use only 2 MUX 
maximum, please do not exceed 2<br><br>
<li>The decision taken by the co-ordinators of the event in shortlisting participants/teams 
is final.</li><br>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format">
<hr>
<!--    Event format text goes here   -->
<br>Spark is a pre-registered event. Registrations have to be done using the link provided with a team size of maximum 4 members. Registered teams have to make the prototypes as per the problem statement and should be submitted on the day of event.
<br>
</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>

<div class="content_format">
<hr>
<!--    FAQ text goes here   -->

<ul>Q1.How many members in a team?</ul>
<ul>Ans:A Team comprises of maximum 4 members.</ul>
<ul>Q2.Do we get participation certificate?</ul>
<ul>Ans: yes,if you do atleast one module.</ul>
<ul>Q3.What is the evaluation scheme?</ul>
<ul>Ans:Innovation in your design and minimisation of circuit will fetch you more points.</ul>

</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>
<div class="content_format">
<hr>
<!--    Prize Money text goes here   -->
<br>Will be announced soon..<br>

</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>




<div class="contacts">
<hr>
<!--    Contacts text goes here   -->

<table>
<tr><td>Rajesh</td>		<td>Technical co-ordinator</td>         <td>+91 72998 25439</td></tr>
<tr><td>Asritha</td>		<td>Technical co-ordinator</td>         <td>+91 95515 42767</td></tr>
<tr><td>Likith</td>		<td>Technical co-ordinator</td>         <td>+91 99622 86804</td></tr>


<div class="mail">Any queries :<div style="color: blue">spark@samgatha.org</div></td></tr><br>

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