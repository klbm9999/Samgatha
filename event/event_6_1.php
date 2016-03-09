<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Designception';
  require 'set_session_var.php';
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../../css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../vassets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Designception</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">

<div class="content_bg"></div>
<div class="content_heading">Designception </div>
<div class="line"><hr></div>
<div class="content_home">
<p>
Todays world is full of problems of ever increasing complexity. It is up to our generation to solve these day to day problems with innovation and design.
So, do you have the zest to decipher real world problems?</p>
<p></p>
If so, then DESIGNCEPTION is the perfect platform for you. Come and put your designing skills to the ultimate test against some of the greatest innovators in this event. Solve the problem by designing and prototyping your solution.</p>

<p style="color:#fff; font-size:15px;">
*Last date for submission of TDP is 10th March 2016 
</p>
</div>

</div>




<div class="content" id="content_2">

<div class="content_bg"></div>
<div class="content_heading">Problem Statement</div>
<div class="content_format">
<hr>
<!--    Problem Statement text goes here   -->
<p>
<ul>You can get the (updated) problem statement <a href="design_problem.pdf" target="_blank">here</a><br></ul>
<ul>You can get the (updated) TDP form <a href="design-tdp.doc" target="_blank">here</a><br></ul>
</p>
<br><br>
<p style="color:#fff; font-size:15px;">
*Last date for submission of TDP is 10th March 2016 
</p>
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
<li> All engineering streams are welcome to participate.</li><br>
<li> A maximum of 5 members are allowed in a team.</li><br>
<li> Any accepted CAD software can be used. Eg: Solid works, Catia, CREO, Autodesk Inventor, etc. For detailed analysis, software such as Ansys, Fluent, MSC Adams, etc. can also be used if necessary.</li><br>
<li> Participants have to upload their Team Description Papers (TDP) for the preliminary round in the Samgatha website. The selection for the finals would be based on this. The format of the TDP can be found here. (Link will be placed here)</li><br>
<li> Failure to turn up a working model in the final round will lead to instant rejection.</li><br>
<li> The designs can be altered for the finals with reasonable explanation for the deviation.</li><br>
<li> Decision of judges is final and binding.</li>
</ul>

</div>
</div>


<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format">
<hr>
<p>
                                 Round 1: <br>

1. In this round all participating teams will need to submit a Team Description 

Paper (TDP). Teams with appropriate TDP will be selected for the second round.<br> 

2. Those teams whose TDP's are submitted after the normal deadline will be  

informed if they are directly through to the finals. They will not get mentoring for <br><br>  

                                 Mentoring:<br> 

1. A mentor will be assigned who will guide the design and help in ideas related to 

prototyping. This will be done via Skype or Google Hangouts. <br> 

2. It is only to help in developing design. Teams will be allotted mentors on first-

come-first-serve basis.<br> 

3. The teams are expected to do thorough groundwork regarding the concepts 

used before the beginning of Round 2.<br> 
</pr><br>
<pr>
Round 3: <br>

1. The finalists will be asked to demonstrate their mechanism live in front of the 

panel of judges as well as audience in a suitable location. <br>

2. They will also have to give a 5-10 minute presentation explaining details of 

their design and its features to the jury. <br>

3. The teams are expected to perform analysis regarding their design. It may 

include time of flight calculation, material considerations etc. In addition they 

also need to include details of their previous designs/prototypes if any in the 

presentation and also explain in detail the evolution of present concept. <br>

4.  The parameters that will be judged in this round: Live demonstration, Time of 

fall, automatic trigger, brain-storming reports.<br>
 </p>

</div>

</div>




<div class="content" id="content_6">

<div class="content_faq"></div>
<div class="content_heading">FAQ</div>
<div class="line"><hr></div>
<div class="content_format">

<br>
Q1. What is Designception?<br>

A)Designception is combination of Design + Inception. It is an event in which different 

teams compete with each other in order to solve a design problem with different 

tactics.  <br><br>

Q2. What is a TDP?<br>

A)TDP is Team Description Paper which should contain details about the concept. The 

format for TDP can be found at this site. Please follow all the instructions in that.<br><br> 

Q3. How many members can a team have?<br>

A)Atleast 2 and atmost 5.It is not mandatory but recommended to have members from 

various departments <br><br>

Q4. Where should the TDP's be mailed?<br>

A)Your TDP should be mailed to designception@samgatha.org before the deadline <br><br>

Q5. Can I change my design after TDP Submission?<br>

A)Yes you are allowed to change your design after TDP submissions. But please make it 

a point that your presentation needs to mention the changes of your design as well as 

the need for it. This is only in case of drastic changes. For minor tweaks, it is safe to 

ignore. <br><br>

Q6. Should I do a live demonstration of my concept on the event day?<br>

A)Yes you are expected to do a live demonstration in front of a panel of judges. <br><br>

Q7. What if the live demonstration fails?<br>

A)In case live demonstration fails, you may present the video of a previous 

demonstration which was successful. You will be judged accordingly. <br><br>

Q8. What are important dates for the event?<br>

A)18th February 2016 - Announcement of Competition <br>

10rd March 2016 - Last date for submission of TDP's for Mentor Round<br>

11th March 2016 - Announcement of Results of Round 1<br>

12th March 2016 - Beginning of Round 2 <br>

20th March 2016 - End of Round 2<br>

24th March 2016 - Finals<br><br>

 *Finals Dates are subjective to change. Participants will be intimated regarding any 

changes by email, but we insist you to check the event details our website regularly. <br> <br>

Q9. Will participation certificates be provided?<br>

A)Only winners will be given certificates <br><br>

Q10. What about accommodation?<br>

A)Samgatha team will ensure that teams from other cities are housed for the event. <br><br>

Q11. Whom to contact for further clarifications?<br>

A)Please contact designception@samgatha.org<br><br>
</div>
</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>
<div class="line"><hr></div>
<div class="content_home">
  
<pre>First       : worth Rs. 7000/-</pre>
<pre>Second      : worth Rs. 5000/-</pre>
<pre>Third       : worth Rs. 3000/-</pre>

</div>



</div>




<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact</div>
<div class="contacts">
<hr>
<!--    Contacts text goes here   -->

<table>
<tr><td>B. Tej Kiran</td>		<td>Technical co-ordinator</td>         <td>+91 98416 14324</td></tr>
<tr><td>G V Balakrishna</td>		<td>Technical co-ordinator</td>         <td>+91 94454 27699</td></tr>
<tr><td>C Prithvi</td>		<td>Technical co-ordinator</td>         <td>+91 95424 22201</td></tr>


<div class="mail">Any queries :<div style="color: blue">designception@samgatha.org</div></td></tr><br>

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