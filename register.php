<?php session_start();
  ob_start();
 ?>

<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../css/basic.css">
<link rel="stylesheet" type="text/css" href="../css/register.css">
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require 'header.php'; ?>

<!-- Put your shit here  -->



<div id="register-box">
  <?php
      require 'connection.php';
      if($_SERVER['REQUEST_METHOD']=='POST') {
        if((isset($_POST['enthu_name']))&&(isset($_POST['enthu_email']))&&(isset($_POST['enthu_contact']))&&(isset($_POST['college_name']))&&(isset($_POST['branch']))&&(isset($_POST['pass']))) {

            $var_name = mysql_real_escape_string($_POST['enthu_name']);
            if(!preg_match("/^[a-zA-Z ]*$/",$var_name)) {
                die('Only letters and white spaces allowed in Name<br>');
            }
            $var_email = mysql_real_escape_string($_POST['enthu_email']);
            if(!filter_var($var_email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format<br>");
            }
            $var_contact = mysql_real_escape_string($_POST['enthu_contact']);
            function phoneNumbervalidation($mobile)
            {
             if(preg_match('/^[789]\d{9}$/', $mobile)){
             return true;
             }
             else
             return false;
            }
  
            if(!phoneNumbervalidation($var_contact)) {
              die('Invalid phone number');
            }

            $var_college = mysql_real_escape_string($_POST['college_name']);
            $var_branch = mysql_real_escape_string($_POST['branch']);

            $passwd = mysql_real_escape_string(md5($_POST['pass']));

            $v1 = rand(0,getrandmax());
            $v2 = rand(0,getrandmax());
            $ac_conf = $v1.$v2;
            $ac_conf_hash = md5($v1.$v2);
            $v1 = rand(0,getrandmax());
            $v2 = rand(0,getrandmax());
            $fo_pass = $v1.$v2;

            $query = "insert into student_detail (name,email,phno,college,branch,password,acc_confirm_code,forgot_pass_code)".
                    "values".
                    "('$var_name','$var_email','$var_contact','$var_college','$var_branch','$passwd','$ac_conf','$fo_pass')";

            $retval = mysql_query($query);
            if(!$retval) {
              die('Could not register'.mysql_error());
            }
            $reg_conf_code = "http://samgatha.org/reg_conf.php?acconf=".$ac_conf_hash."&suse=".$var_email;
            $reg_conf = "Please click on the link to activate<br>".$reg_conf_code;

            //$headers = "From: admin@samgatha.org"."\r\n";

            //mail($_POST['enthu_email'],"Samgatha Account Confirmation (no reply) link",$reg_conf,$headers);
            mail($_POST['enthu_email'],"Samgatha Account Confirmation (no reply) link",$reg_conf);

            header('Location: http://samgatha.org/login.php');
          }
          else {
          echo "Please enter details to continue <br>";
        }
      }
     ?>

    Welcome to samgtha registrations. <br>
    Please fill out the following form to participate in samgatha.
    <form id="sam_register" action="register.php" method="post">

      <div class="reg-box-in">
      <label class="i2" id="ii1" for="enthu_name">Name : </label>
      <input class="i1" type="text" name="enthu_name" id="enthu_name"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii2" for="enthu_email">E-mail Address : </label>
      <input class="i1" type="text" name="enthu_email" id="enthu_email"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii3" for="enthu_contact">Phone No : +91</label>
      <input class="i1" type="text" name="enthu_contact" id="enthu_contact" max="10"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii4" for="college_name">Institute : </label>
      <input class="i1" type="text" name="college_name" id="college_name"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii5" for="branch">Branch : </label>
      <input class="i1" type="text" name="branch" id="branch"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii6" for="password">Password : </label>
      <input class="i1" type="text" name="pass" id="pass" maxlength="30"> <br>
      </div>

      <div class="reg-box-in">
      <button type="submit" name="register">Register</button> <br>

    </form>     </div>

</div>





<!-- don't your shit after here  -->

<?php require 'footer.php'; ?>

</body>
<?php ob_end_flush(); ?>
</html>
