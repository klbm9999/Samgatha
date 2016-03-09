<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Dance Wars';
  require 'set_session_var.php';
  ob_start();
 ?><html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>

<body>
<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">IMPULSE</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Theme</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">Note</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">IMPULSE</div>
<div class="line"><hr></div>
<div class="content_home">
<br><br>
When you are alone, you always act on impulse. And that is exactly what is going to happen here. <br><br>Let loose those frozen limbs and dance to save your life for there is going to be you and only you for the audiences to hold on to, as you groove to the beats and stay afloat. <br><br>Dance or Die!
<!--    Home tab text goes here   -->


</div>
<img id="content_1_img" src="../assets/impulse.jpg">
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Theme</div>

<div class="content_format">
<hr>
<!--    Problem Statement text goes here   -->
<p>Will be updated soon..!
</p>
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
<hr>
<!--    Rules text goes here   -->
<p>
<li>Soundtracks for both prelims and finals should be submitted at least 
    an hour before the event in a pendrive.</li>
<li>Any objects that are harmful  are not allowed on the stage.</li>
<li>The organising team is not responsible of any belongings of the participants.</li>
<li>Participants should produce their samgatha id  at the time of registration.</li>
<li>Any participant  not ready at the start of the event will stand disqualified.</li>
<li>The organising team holds the right to change the rules  any time.</li>
	
</p>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">
<hr>
<!--    Event format text goes here   -->
<p>
<li>There are two rounds in this event (prelims & finals).<br>
<li>Maximum time duration  4minutes.<br>
<li>Screening will be done on the basis of performance in prelims.<br>
<li>Soundtracks of prelims & finals  should be different.<br> 
<li>Judges decision would be final.<br>

</p>
</div>



</div>

<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">NOTE</div>


<div class="content_format">
<hr>
<!--    FAQ text goes here   -->
<br>
  <li>Accomodation  will  be provided for the participants  if needed.<br>
  <li>All  types of dance forms are allowed  except pure classical.<br>
  <li>Participants  should bring their own properties if required.<br>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">
<hr>
<!--    Prize Money text goes here   -->
<p>
<br>
<br>
Will be announced soon..!
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Contact Us</div>




<div class="contacts">
<hr>
<!--    Contacts text goes here   -->
<table>
<tr><td>Divya</td><td>               Cultural Co-ordinator    </td> <td>+91 99412 10593</td></tr>
<tr><td>Swaminath </td><td>           Cultural Co-ordinator  </td><td>   +91 89788 78338</td></tr>
<tr><td>Arun tej </td><td>            Cultural Co-ordinator   </td><td>  +91 95519 20115</td></tr>
<tr><td>Poojitha mandava </td><td>    Cultural Co-ordinator  </td><td>   +91 99413 13529<br></td></tr>
<div class="mail">Any queries :<div style="color: blue">nrithya@samgatha.org</div></td></tr><br>
</table>
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