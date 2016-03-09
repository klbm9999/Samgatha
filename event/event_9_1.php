<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Samgatha Business Challenge';
  require 'set_session_var.php';
  ob_start();
 ?><html>
<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>
<body>
<?php require '../header.php'; ?>
<!-- Put your shit here -->




<a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">About</div></div> </a>
<a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Introduction</div></div> </a> 
<a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div> </a> 
<a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Terms and Conditions</div></div> </a> 
<a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div> </a>
<a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ& EC</div></div></a>
<a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div> </a>
<a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Contact</div></div> </a>




<div class="content" id="content_1"> <!-- Home tab Contents -->
<div class="content_bg"></div>
<div class="content_heading">Samgatha Business Challenge</div>
<div class="content_home">
<!-- Home tab text goes here -->

<p>
"Sell me this pen!" - Remember this line that DiCaprio says in The Wolf of Wall Street?<br><br>
Transforming innovations into economic goods - that's the theme of entrepreneurship. And the crucial traits required to become a successful entrepreneur? Team-building, leadership, management, ability to create value. Want to have an experience of a "startup" and becoming an entrepreneur? Then come give a shot at SBC. Grab the opportunity to learn and engage in marketing and acknowledge the role of entrepreneurship in economic development.

</p>

</div>



<img id="content_1_img" src="../assets/sbc.png">

</div>




<div class="content" id="content_2"><!-- Problem Statement -->
<div class="content_bg"></div>
<div class="content_heading">Introduction</div>
<div class="content_home">
<!-- Problem Statement text goes here -->
<p>
Samgatha Business Challenge (SBC) is one of the most awaited events, organized by the Entrepreneurship & Investment Club of the college. The registrations for the event are open, so do register as soon as possible. The event requires the participants (teams each of 3-5 members) to submit their business plans at the initial stage. The selected people would be given an amount to set up a stall within the premises, run it and make profits.

</p>

</div>

<img id="content_1_img" src="../assets/sbc2.png">

</div>

<div class="content" id="content_3">
<div class="content_bg"></div>
<div class="content_heading">Registration</div>
<div class="content_home">
<!-- registration text goes here -->
<hr>

<?php require 'generate_reg_form.php'; ?>

</div>


</div>

<div class="content" id="content_4">
<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">
<!-- Rules text goes here -->
<p>
<li>1.Teams must consist of members from same college only. <br>
<li>2.Games and gambling as basis of the business is not permitted. <br>
<li>3.Stall timings must be strictly followed i.e (9pm to 4pm). <br>
<li>4.Both the given investment and 50% of the profits should be returned. <br>
<li>5.In case of the business losses,the above rule is not applicable. <br>
<li>6.Only the given investment must be utilized. <br>
<li>7.No quitting once the stall is setup. <br>
<li>8.Team once formed cannot be changed. <br>
      *T&Cs are subject to change at the venue.

</div>
</p>


</div>


<div class="content" id="content_5">
<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format">
<!-- Event format text goes here -->
<p>
<li>ROUND 1: <br>
Post registration,a TDP(team description paper) form will be mailed to the respective teams,which is to be filled and sent back before the deadline. <br>
.(20th March) <br>
<li>ROUND 2: <br>
Selected teams need to present their ideas through available means(Oral,PPTs,charts.. etc ) at the venue. <br>
<li>ROUND 3: <br>
Shortlisted teams will be given the investment to setup their stalls inside the campus (25th, 26th ,27th March)
</div>
</p>

</div>



<div class="content" id="content_6">
<div class="content_bg"></div>
<div class="content_heading">FAQ & Evalution criteria</div>

<div class="content_format">
<!-- FAQ text goes here -->
<p>
Frequently Answered Questions (FAQ)<br>
<br>
1. How much is the investment?<br>
A. An amount of 1000/- will be given.<br><br>
2.Do I need to come to the campus for every round? <br>
A.For Round 1- NO (Its completely online)  <br>
n          Round 2&3- Yes<br><br>
3.Do I need to return the investment if I run into losses? <br>
A.No <br><br>
4.Can I participate in any other event of the fest while participating in SBC? <br>
A.YES, but it is mandatory for that there need to be atleast 2 members of your team at the stall.<br><br>
Evaluation Criteria (EC):<br>
<ul>
<li>1. Qualitative usage of the investment.<br></li>
<li>2. Smartness of the business idea.<br></li>
<li>3. Profits </li>
               </ul>                                                                                                                                                   
</p>
</div>


</div>



<div class="content" id="content_7">
<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>
<div class="content_home">
<!-- Prize Money text goes here -->
<p>
Will be updated soon!!
<p>
</div>



</div>


<div class="content" id="content_8">
<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>



<div class="content_format">
<!-- Contacts text goes here -->
<pre>AKHILA         EVENT CO-ORDINATOR    9710383247</pre>
<pre>RAMTHEERTH     EVENT CO-ORDINATOR    8019689716</pre>
Any queries: sbc@samgatha.org


</div>
</div>







<!-- don't your shit after here -->
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