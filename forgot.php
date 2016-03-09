<?php session_start();
	ob_start();
 ?>
<html>

<head>
<title>Forgot password</title>
<link rel="stylesheet" type="text/css" href="../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../css/forgot.css" >
<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require 'header.php'; ?>

<!-- Put your shit here  -->



<div>

<?php
	if (isset($_POST['email'])) {
	require 'connection.php';
	$var_email = $_POST['email'];
	$query = "select forgot_pass_code from student_detail where email = '$var_email'";
	$retval = mysql_query($query);
	if(!retval) {
		die('Could not query'.mysql_error());
	}
	$row = mysql_fetch_row($retval);
	if(empty($row)) {
		die('Email not registered<br>');
	}
	$var = md5($row[0]);
	//echo $var."This is sent to mail<br>";
	$forgot_pass = "http://samgatha.org/forgot_pass.php?fconf=".$var."&suse=".$var_email;
	mail($var_email, 'Forgot Password', $forgot_pass);
	header('Location:http://samgatha.org/forgot_ack.php');
	}
	else {
		echo "Please enter your email<br>";
	}
 ?>

<div id="forgot-box">
 	<form method="POST">
 		<label id="f-label">Enter your email : </label>
 		<input id="f-inp" type="email" name="email"><br><br>
 		<input type="submit">
 	</form>
 </div>

</div>





<!-- don't your shit after here  -->

<?php require 'footer.php'; ?>

</body>
<?php ob_end_flush(); ?>
</html>
