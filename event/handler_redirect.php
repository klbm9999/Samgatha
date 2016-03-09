<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
 ?>
<html>
<head>
	<title>Samgatha 2016</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css">
	<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">
</head>
<body>
<?php require '../header.php'; ?>

<style type="text/css">
	#fail-box {
		position: absolute;
		top: 280px;
		width: 400px;
		height: 200px;
		left: 27pc;
		color: #fff;
		font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
		font-size: 20px;
		text-align: center;
	}
</style>

<div id="fail-box">
	<?php 
		if ($_SESSION['fail_id']==1) {
			echo "Entered ID's are not valid<br>";
		}
		else if ($_SESSION['fail_reg']==1) {
			echo "One of your entered members has already registered for the event<br>";
		}
		else if ($_SESSION['fail_id']==0 && $_SESSION['fail_reg']==0) {
			echo "Successfully registerd for the event ".$_SESSION['event_name'];
		}
	 ?>
	 Go back to <a href="/basic.php">Home</a>
</div>

<?php require '../footer.php'; ?>
</body>
</html>