 <html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" >
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>

<body>
<div id="sky2"> 
<div class="star2" id="s2tar1"> </div>
<div class="star2" id="s2tar2"> </div>
<div class="star2" id="s2tar3"> </div>
<div class="star2" id="s2tar4"> </div>
<div class="star2" id="s2tar5"> </div>
<div class="star2" id="s2tar6"> </div>
<div class="star2" id="s2tar7"> </div>
<div class="star2" id="s2tar8"> </div>
<div class="star2" id="s2tar9"> </div>
<div class="star2" id="s2tar10"> </div>
<div class="star2" id="s2tar11"> </div>
<div class="star2" id="s2tar12"> </div>
<div class="star2" id="s2tar13"> </div>
<div class="star2" id="s2tar14"> </div>
<div class="star2" id="s2tar15"> </div>
<div class="star2" id="s2tar16"> </div>
<div class="star2" id="s2tar17"> </div>

</div>

<div id="sky1">
<div class="star1" id="s1tar1"></div>
<div class="star1" id="s1tar2"></div>
<div class="star1" id="s1tar3"></div>
<div class="star1" id="s1tar4"></div>
<div class="star1" id="s1tar5"></div>
<div class="star1" id="s1tar6"></div>
<div class="star1" id="s1tar7"></div>
<div class="star1" id="s1tar8"></div>
<div class="star1" id="s1tar9"></div>
<div class="star1" id="s1tar10"></div>
<div class="star1" id="s1tar11"></div>
<div class="star1" id="s1tar12"></div>
<div class="star1" id="s1tar13"></div>
<div class="star1" id="s1tar14"></div>
<div class="star1" id="s1tar15"></div>
<div class="star1" id="s1tar16"></div>
<div class="star1" id="s1tar17"></div>
</div>

<div id="sky3">
<div class="star3" id="s3tar1"></div>
<div class="star3" id="s3tar2"></div>
<div class="star3" id="s3tar3"></div>
<div class="star3" id="s3tar4"></div>
<div class="star3" id="s3tar5"></div>
<div class="star3" id="s3tar6"></div>
<div class="star3" id="s3tar7"></div>
<div class="star3" id="s3tar8"></div>
<div class="star3" id="s3tar9"></div>
<div class="star3" id="s3tar10"></div>
<div class="star3" id="s3tar11"></div>
<div class="star3" id="s3tar12"></div>
</div>



<div id="sky4">
<div class="star4" id="s4tar1"></div>
<div class="star4" id="s4tar2"></div>
</div>


<img id="samg" src="../assets/p1.png">

<div id="head">
<svg viewBox="0 0 1100 600">
  <symbol id="s-text">
    <text text-anchor="middle" x="25%" y="48%" class="text--line">
      S
    </text>
    <text text-anchor="middle" x="62%" y="48%" class="text--line2">
      AMGATHA
    </text>
    <text text-anchor="middle" x="75%" y="30%" class="text--line3">
      2016
    </text>
  </symbol>

  <g class="g-ants">
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
  </g>


</svg></div>

<div id="nav">
<div id="night" class="lay2"><div id="nightt">WORKSHOPS</div></div>
<div id="event" class="lay2"><div id="eventt">EVENTS</div></div>
<div id="spon" class="lay2"><div id="spont">SPONSORS</div></div>
<div id="contact" class="lay2"><div id="contactt">REACH US</div></div>
<div id="about" class="lay2"><div id="aboutt">ABOUT US</div></div>
<div id="register" class="lay2"><div id="registert">Sign In/Up</div></div>

</div>

<!-- Put your shit here  -->



<div id="h1">
    <?php 
    require 'connection.php';
    $var1 = $_GET['suse'];
    $var2 = $_GET['acconf'];
    $retval = mysql_query("select acc_confirm_code from student_detail where email = '$var1'");
    if(!$retval) {
      die('Could not query'.mysql_error());
    }
    $row = mysql_fetch_row($retval);
    if(empty($row)) {
      echo "<h1>Your Email is not registered</h1><br>";
    }
    $check_var = md5($row[0]);
    if($check_var==$var2) {
        $retval = mysql_query("update student_detail set confirm_bit=1 where email = '$var1'");
        echo "<h1>Account Activation Successful<h1>";
        header('Location: http://localhost/erf.php');
    }


 ?>
 <h3 style="color:white; "><br>Go back to <a href="basic.html">home</a></h3>
</div>





<!-- don't your shit after here  -->

<footer>

<div id="webops"><webops>webops@samgatha.org</webops></div>
<div id="link1"  class="footer_link" ><a  class="f_l" href="#">About Us</a></div>
<div id="link2"  class="footer_link"><a  class="f_l" href="#">Feedback</a></div>
<div id="link3"  class="footer_link"><a  class="f_l" href="#">Sponsors</a></div>
<div id="link4"  class="footer_link"><a  class="f_l" href="#">Hospitality</a></div>
<div id="link5"  class="footer_link"><a  class="f_l" href="#">Make in India</a></div>
<div id="link6"  ><a href="http://www.iiitdm.ac.in" ><img src="../assets/fb.svg"  width="30px" height="30px"></a></div>
<div id="link7"  ><a href="http://www.iiitdm.ac.in" ><img src="../assets/twit.svg"  width="30px" height="30px"></a></div>

</footer>

</body>

</html>
