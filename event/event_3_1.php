<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  $_SESSION['event_name']='Art Marathon';
  require 'set_session_var.php';
 ?><html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="/css/basic.css" >
<link rel="stylesheet" type="text/css" href="/css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>

<body>
<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Art Marathon</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Theme</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">  <!--    Home tab Contents    -->

<div class="content_bg"></div>
<div class="content_heading">Art Marathon</div>
<div class="content_format">

<!--   Home Tab text goes here   -->
<p>
There exist two kinds of people in the world: <br><br>
1.	The Artistes: The ones who live art, breathe art, dream art. <br>
2.	Those unfortunate souls who are not privy to the splendour of art.<br><br>
If you belong to the former, contain your elation. If you are a part of the latter, let us be your light in shining armour!
We invite every one of you to discover magic with our two very special events:<br><br>
1.	ART OF SYMMETRY<br>
2.	GLASS PAINTING<br><br>
So, come be a part of our fascinating events and discover (or rediscover) the enigma called art!<br>
</p>
</div>
</div>




<div class="content" id="content_2"><!--    Problem Statement    -->

<div class="content_bg"></div>
<div class="content_heading">Theme</div>

<div class="content_format">
<hr>
<!--    Problem Statement text goes here   -->
<p>Theme will be provided to you on spot</p>

</div>



</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>

<div class="content_home">
<hr>
<?php require 'generate_reg_form.php'; ?>

</div>



</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>
<div class="content_format">

<!--    Rules text goes here   -->
<p>
 Coming soon!!
</p>

</div>




</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>

<div class="content_format">

<!--    Event format text goes here   -->
<hr>
<p>
Group: It's a group event for 2-3 members.<br>
Entry fee: No entry fee!<br>
Time Duration: 3 hours.<br>
Theme: On spot theme.<br>
</p>

</div>



</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">Da FAQ</div>


<div class="content_format">

<!--    FAQ text goes here   -->
<p>

1.Do we need to bring our own material?<br>

Ans: No, we will be providing you with all the material. Your enthusiasm is all what you have to carry along.<br>

2. Is the compulsion that there should be a group?<br>

Ans: Absolutely not. You are welcome to come alone and make new friends.<br>

3.What is the evaluation criteria?<br>

Ans:<br>
<li>How close the art work is to the theme given?</li>
<li>The depth of the art work.</li>
<li>Fineness and detailing along with the proper usage of colours provided.</li>

</p>
</div>



</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_home">

<!--    Prize Money text goes here   -->
<p>
Coming soon!!!
</p>
</div>




</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to contact</div>




<div class="content_home">

<!--    Contacts text goes here   -->
<hr><br>
<pre>TANMAYEE       -  7401310109</pre>
<pre>UDA SAI KUMAR  -   9494460337</pre>
Any queries:  artmarathon@samgatha.org

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