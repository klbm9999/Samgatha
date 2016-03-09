<html>
<head>
	<title>Change password</title>
	<link rel="stylesheet" type="text/css" href="/css/basic.css">
	<link rel="stylesheet" type="text/css" href="/css/change-pass.css">
	<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>
<body>
<?php require 'header.php'; ?>
<?php 
	ob_start();
	require 'connection.php';
	$var = $_GET['use'];
	if(isset($_POST['enthu_pass'])&&(isset($_POST['enthu_c_pass']))) {
		$var1 = $_POST['enthu_pass'];
		$var2 = $_POST['enthu_c_pass'];
		if ($var2!=$var1) {
			die('Both the passwords should be same<br>');
		}
		$var1=md5($var1);
		echo $var1;
		$query = "update student_detail set password = '$var1' where email='$var'";
		$retval = mysql_query($query);
		if(!$retval) {
			die('Could not query'.mysql_error());
		}
		$query = "update student_detail set updated_at = now() where email='$var'";
		$retval = mysql_query($query);
		if(!$retval) {
			die('Could not query updated_at'.mysql_error());
		}
		$va1 = rand(0,getrandmax());
        $va2 = rand(0,getrandmax());
        $va3 = $v1.$v2;
        $query = "update student_detail set forgot_pass_code = '$va3' where email='$var'";
		header('Location: http://samgatha.org/login.php');
	}
 ?>
<div id="change-pass-box">
<form method="POST">
	<label for="enthu_pass" id="pass-id">Password : </label>
    <input type="text" name="enthu_pass" id="enthu_pass"> <br><br>
    <label for="enthu_c_pass" id="cpass-id">Confirm Password : </label>
    <input type="text" name="enthu_c_pass" id="enthu_c_pass"> <br><br><br>
    <button type="submit" name="change_pass">Change Passsword</button> <br>
</form>
</div>	
<?php require 'footer.php'; ?>
</body>
<?php ob_end_flush(); ?>
</html>