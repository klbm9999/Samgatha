<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Astayanax';
  require 'set_session_var.php';
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Astyanax</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Astyanax</div>
<div class="line"><hr></div>
<div class="content_home">

<!--    Home tab text goes here   -->

<p>
</p>
Are you fascinated by robots that play vital role in rescue operations and become super heroes of the day?<br>
Make your super hero robot and show it to  the world. Amaze every one with your bot making skills.<br>
Astyanax is where you can show how your bot can multitask a complex situation and work accordingly especially in rescue operations.

</div>

<img id="content_1_img" src="../assets/robo_in.jpg">
</div>




<div class="content" id="content_2">
  <!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>

<div class="content_format">
<!--    Problem Statement text goes here   -->
<hr>
<p>
<ul>You can get the problem statement <a href="ASTAYANAX .pdf" target="_blank">here</a><br><br></ul>
<ul>You can get the TDP form <a href="tdp.docx" target="_blank">here</a><br></ul>
</p>
</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_format">
<?php require 'generate_reg_form.php'; ?>

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">
<hr>
<!--    Rules text goes here   --><p><li> Person who is controlling the bot-M is not allowed to touch the bot.<br></li>
</p>
<p>
<li>Bots should not damage the arena.</li>
</p>


</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">
<hr>
<!--    Event format text goes here   --><p>1.Two matches will be conducted ,first one is practice match and the second is the main battle.<br></p>
<p>
2.First(practice) match will not be carrying any points,where as for the second match points will be given as mentioned.<br></p>
<p>
3.Negative marks will also be given as mentioned.<br></p>
<p>
4.The team which scores more points will be declared as winner.
</p>
</div>



</div>




<div class="content" id="content_6">

<div class="content_faq"></div>
<div class="content_heading">FAQ</div>


<div class="content_format">
<hr>
<!--    FAQ text goes here   -->
<ul>Q1. Are we allowed to destroy the obstacle in order to enter  into the block?</ul>
<ul>A. No, any damage to the arena is not entertained.</ul>
<ul>Q2. Can any part of the robot detach from itself?</ul>
<ul>A. Detachment is not allowed once the   game starts.</ul>
<ul>Q3. Are there any prerequisites to register  for  this event?</ul>
<ul>A. No. Students from any college or university can participate.</ul>
<ul>Q4. Will there be any registration fee?</ul>
<ul>A. No.</ul>
<ul>Q5.  How many members are allowed to participate in a group?</ul>
<ul>A. A max of 5 can form a group</ul>
<ul>Q6. Is there any facility for charging our equipment at the venue?</ul>
<ul>A. Yes.</ul>
<ul>Q7. Will there be given   other chance if the bot stopped working in the middle of the arena due to some loose connections?</ul>
<ul>A. A trail will be given before starting the event .Second chance will not be given during evaluation.</ul>
<ul>Q8. Can a team have persons from different colleges?</ul>
<ul>A. Yes, cross college teams are allowed.</ul>
<ul>Q9. What should I do if I have a question unanswered?</ul>
<ul>A. Contact us.</ul>
<ul>Q10. Will I get a participation certificate?</ul>
<ul>A. Yes.</ul>
<ul>Q11.Can Bot-M Save people before Bot-A detect people.</ul>
<ul>A. No, Bot-A should detect the people first only then Bot-M should rescue people and that too in the detected order by Bot-A</ul>
<ul>Q12.Will any facility for charging our equipment be given at the venue?</ul>
<ul>A. Yes, 220V power supply with extension cords will be given.</ul>
<ul>Q13.Can students from different colleges be a part of the same team?</ul>
<ul>A. Yes students from different colleges can form a team.</ul>
<ul>Q14.Can I use a ready-made kit?</ul>
<ul>A. No. You are supposed to design and build your own bots. If you are found to have used ready-made kits, you will be disqualified.</ul>
<ul>Q15.Can the rules, event format or scoring change?</ul>
<ul>A. While we try our best not to change anything we have mentioned, anything about the event may change if we find a flaw. You are advised to keep checking the website for updates. In Any Disputes Organizers Decision Will be final</ul>
<ul>Q16.Can I use more than one battery?</ul>
<ul>A. Yes. But you have to ensure that the voltage at any two points in the circuit should not exceed 12V.</ul>


</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">

<!--    Prize Money text goes here   -->
<hr>
<p>Will be announced soon...!
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>

<div class="contacts">

<!--    Contacts text goes here   -->
<hr>

<table>
<tr><td>Shiva Kumar</td>		<td>Technical co-ordinator</td>         <td>+91 99415 27046</td></tr>
<tr><td>K S Durga Prasad</td>		<td>Technical co-ordinator</td>         <td>+91 94929 47527</td></tr>
<tr><td>Deepika</td>		<td>Technical co-ordinator</td>         <td>+91 99520 35154</td></tr>


<div class="mail">email :<div style="color: blue">astayanax@samgatha.org</div></td></tr><br>

</table>

</div>
</div>




</div>








<!-- don't your shit after here  -->


<?php require '../footer.php'; ?>


<script src="../scripts/jquery.min.js"></script>


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