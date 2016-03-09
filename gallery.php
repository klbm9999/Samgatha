<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
  ob_start();
 ?>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="/css/basic.css">
	<link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

</head>
<body>

<?php require 'header.php'; ?>

	<div id="h1">
<h1> 

Gallery Coming up

</h1>
</div>

<div id="h2">
<h2>
Soon.. we promise<br>
<h2>
</div>

<?php require 'footer.php'; ?>

</body>
</html>