<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Relay CAD';
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Relay CAD</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>



<div class="content" id="content_1">

<div class="content_bg"></div>
<div class="content_heading">Relay CAD</div>
<div class="line"><hr></div>
<div class="content_home">
<p>
It's all about the Need for Speed in this event! CAD plays a prominent role to shape the future of an engineer. Here is an event where students get an opportunity to test their skills and to prove their expertise in CAD with a time limit. Creative thinking and innovation is a forte of this enthralling event. Get your team (2-3 members) fired up for this gruelling relay race wherein you take turns to design and model the product as fast as possible.
If you call yourself a "CAD Expert", then this is a blessing in disguise to prove it.
</p>
</div>

</div>




<div class="content" id="content_2">

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>
<div class="content_format">
<hr>

No specific problem statement required. 




</div>
</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>


<div class="content_format">
<hr>
<?php require 'generate_reg_form.php'; ?>
</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>

<div class="content_format">
<hr>
<ul>

<li> Software and workstation will be provided on the spot</li><br>
<li> Decision of judges will be final and binding</li><br>
<li> Models submitted after allocated time in the event will not be considered.</li><br>
<li> Each team must strictly be composed of 4 members.</li><br>
<li> Copying, PLAGIARISM of any kind will lead to disqualification</li><br>
</ul>
</div>
</div>


<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format">
<br>
<hr>
A 3x15min relay of modeling real-life objects in Autodesk Inventor.<br><br>
The models will be evaluated based on:<br><br>
1. Completeness of the design (Higher level of detail)<br><br>
2. Time taken to finish the model<br><br>
5 minutes : Discussion about the Statement<br>
15 minutes :  Member 1<br>
5 minutes : Break<br>
15 minutes : Member 2<br>
5 minutes : Break<br>
15 minutes : Member 3<br>
</div>

</div>




<div class="content" id="content_6">

<div class="content_faq"></div>
<div class="content_heading">FAQ</div>
<div class="content_format">
<br>
<hr>
Q1. What is Relay CAD?<br>
Relay CAD is similar to a relay race except that here it is CAD Modeling. It will be a 3 member  team event with each team is given 5 minutes to discuss, each member given 15 minutes to model with 5 minutes in between each member for discussion.<br>
 
5 minutes – Discussion about the Statement
15 minutes – Member 1
5 minutes – Break
15 minutes – Member 2
5 minutes – Break
15 minutes – Member 3
 <br><br>
Q2. Is it an individual event?<br>
No. Each team must strictly be composed of 4 members. Teams with less or more are expected to make adjustments before start of the event.
 <br><br>
Q3. What parameters will be judged?<br>
Judgement will be based mainly on the time taken to complete the model, “Completeness” of the assembly.
 <br><br>
Q4. What if I finish before my 15 minutes?<br>
Each member can model any number of parts within his/her 15 minutes. However only the time at which the final assembly is submitted will be considered. In case the final member finishes his assembly in 12 minutes then the time of completion for the team will be specified as 12 minutes provided the member leaves his workstation.
 <br><br>
Q5. Do I need to bring anything?<br>
No, all the materials will be provided on the spot including Workstation.
 <br><br>
Q6. Which software will be used?<br>
Autodesk Inventor.<br><br>
 
Q7. Whom to contact for further clarifications?<br>
Please contact relaycad@samgatha.org<br><br>
 
Q8. Is it an on the spot event?<br>
Yes it is on the spot but preference will be given for Pre-registered teams due to limited number of workstations available.
<br><br>
</div>
</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>
<div class="content_format">
<hr>
<ul>1     : worth Rs. 3500/-</ul>
<ul>2      : worth Rs. 2500/-</ul>
<ul>3       : worth Rs. 1500/-</ul>

</div>



</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>
<div class="line"><hr></div>
<div class="contacts">

<!--    Contacts text goes here   -->

<table>
<tr><td>B. Tej Kiran</td>		<td>Technical co-ordinator</td>         <td>+91 98416 14324</td></tr>
<tr><td>G V Balakrishna</td>		<td>Technical co-ordinator</td>         <td>+91 94454 27699</td></tr>
<tr><td>C Prithvi</td>		<td>Technical co-ordinator</td>         <td>+91 95424 22201</td></tr>


<div class="mail">Any queries :<div style="color: blue">relaycad@samgatha.org</div></td></tr><br>

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