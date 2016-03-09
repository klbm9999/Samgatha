<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  ob_start();
 ?>

<html>

<head>
<title>Login Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="css/basic.css" >
<link rel="stylesheet" type="text/css" href="css/login.css" >
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require 'header.php'; ?>

<!-- Put your shit here  -->



<div id="login-box">
  <?php
  require 'connection.php';
  if(isset($_POST['uname'])) {
    $name = $_POST['uname'];
    $retval = mysql_query("select password , sam_id, confirm_bit from student_detail where email='$name'");
    //echo "$name<br>";
    if(!$retval) {
      die('Could not query'.mysql_error());
    }
    $row = mysql_fetch_row($retval);
    if (empty($row)) {
      echo "Username does not exist<br>";
    }
    //echo "$row[0]"; This is the password.
    if (isset($_POST['pass'])) {
      $passwd = $_POST['pass'];
      $passwd = mysql_real_escape_string(md5($passwd));
      //echo "$passwd";
      if ($row[2]==0) {
        die('Please activate your account<br>');
      }
      if($passwd == $row[0]) {
        //echo "Login Successful, welcome $name";
        $_SESSION["uname"] = $name;
        $_SESSION["validlogin"] = 1;
        $_SESSION['samid'] = $row[1];
        header('Location: basic.php');
      }
      else {
        echo "Login failed";
      }
    }
    else {
      echo "Please enter the password";
    }
  }
  else {
    echo "Please enter username";
  }
?>
<form action="login.php" method="POST">
      
      <div class="login-box-in">
      <label for="uname">Username: </label>
      <input type="text" name="uname" id="username" placeholder="Your email"><br>
      </div>

      <div class="login-box-in">
      <label for="pass">Password: </label>
      <input type="password" name="pass" id="password" ><br>
      </div>
      
      <div class="login-box-in" id="login-button"><button id="b1" type="submit" name="login">Login</button></div>
      
      <div id="reg-link" class="login-box-in"><a href="register.php">Register</a>
      </div>
      <div id="fgps" class="login-box-in">
      <a href="forgot.php" >Forgot Password</a><br>
      </div>


    </form>
</div>





<!-- don't your shit after here  -->

<?php require 'footer.php'; ?>

</body>
<?php ob_end_flush(); ?>
</html>
