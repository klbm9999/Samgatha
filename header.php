<?php 
	echo '
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


<a href="/basic.php"><img id="samg" src="/assets/samg_white_1.png"></a>

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

<div id="user">';
 echo "Welcome ".$_SESSION['uname']."<br>";
if (isset($_SESSION['samid'])) {
 echo "Samgatha ID : "."SAM16L00".$_SESSION['samid']."<br>";
}
 
echo '</div>

<a href="/workshop.php"><div id="night" class="lay2"><div id="nightt">WORKSHOPS</div></div></a>
<a href="/events.php"><div id="event" class="lay2"><div id="eventt">EVENTS</div></div></a>
<a href="/sponsors.php"><div id="spon" class="lay2"><div id="spont">SPONSORS</div></div></a>
<a href="/contact.php"><div id="contact" class="lay2"><div id="contactt">CONTACT US</div></div></a>
<a href="/gallery.php"><div id="about" class="lay2"><div id="aboutt">GALLERY</div></div></a>';

if($_SESSION['validlogin']==0) {
  echo '<a href="/login.php"><div id="register" class="lay2"><div id="registert">Sign In/Up</div></div></a>';
}
else {
  echo '<a href="/logout.php"><div id="register" class="lay2"><div id="registert">Logout</div></div></a>';
}

echo '</div>';
	
 ?>