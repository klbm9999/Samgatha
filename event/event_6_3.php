<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Fix the Wreck';
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





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Fix the Wreck</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         

<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Fix the Wreck</div>
<div class="line"><hr></div>
<div class="content_home">

<p>
Have u ever thought about what was inside of a television? Have you ever considered about how an ic engine works? We all have a little bit of Phunsuk Wangdu (of 3 idiots fame!!)  In all of us. Fix the wreck will satisfy and test your unending curiosity about how day to day objects work. And if broken down into the simplest of fragments, how to put these fragments back together so as to work perfectly? Challenge your reverse engineering skills with his test requiring quick thinking, rational problem solving and most importantly the race against time
If you call yourself a "CAD&nbspExpert", then this is a blessing in disguise to prove it.
</p>
</div>

</div>




<div class="content" id="content_2">

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>
<div class="content_format">
<hr>
This is an onspot event..!




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
<li> Decision of judges is final and binding</li>
<li>This is a team event with about 4 members per team</li>
<li> Assemblies will be evaluated as soon as completed or at 1 ½  hrs from the commencement of the event whichever is earlier</li>
</ul>
</div>
</div>


<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">
<hr><br>This is an on the spot event with a single round. Each team will be given a completely disassembled product. The teams need to assemble the complete product in as less time as possible within 1.5 hrs.<br><br>
Judgment will be based on:<br><br>
1. Completeness of the assembly<br>
2. Time taken to finish the assembly<br>
3. Working condition of assembly<br>
 </div>

</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">Da FAQ</div>

<div class="content_format">
<br>
Q1. What is Fix the Wreck?<br>
It's an event where teams are given an unassembled component and they are expected to assemble it back into a working condition.  
 <br><br>
Q2. Is the event on the spot?<br>
Yes it is on the spot but preference will be given for Pre-registered teams due to limited number of Components being available.
 <br><br>
Q3. What parameters will be judged?<br>
Judgement will be based mainly on the time taken to complete the model, “Completeness” of the assemblyassembly i.e. does the assembly work. 
 <br><br>
Q4. How many members can a team have?<br>

Each team should have 4 members. 

 <br><br>
Q5. Whom to contact for further clarifications?<br>
Please contact  the respective technical co-ordinators of the event.
 <br><br>
Q6. How many assemblies will be given?<br>
Each team will be given the same assembly. It is limited to 1 only..<br><br>
<br><br>
</div>
</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">
  <hr>
  <ul>Allocation  : Rs. 7500/-</ul>
  <ul>First       : Rs. 3500/-</ul>
  <ul>Second      : Rs. 2500/-</ul>
  <ul>Third       : Rs.1 500/-</ul>
</div>



</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>
<div class="content_format">
<hr>

<table>
<tr><td>B. Tej Kiran</td>		<td>Technical co-ordinator</td>         <td>+91 98416 14324</td></tr>
<tr><td>G V Balakrishna</td>		<td>Technical co-ordinator</td>         <td>+91 94454 27699</td></tr>
<tr><td>C Prithvi</td>		<td>Technical co-ordinator</td>         <td>+91 95424 22201</td></tr>


<div class="mail">email :<div style="color: blue">fixthewreck@samgatha.org</div></td></tr><br>

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