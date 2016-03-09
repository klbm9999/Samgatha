<?php
  session_start();
  session_unset();
  session_destroy();
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/logout.css">
    <link rel="icon" type="image/png" href="assets/samg_icon.png" sizes="96x96">

  </head>
  
  <body>
    <?php require 'header.php'; ?>

    <div id="logout-content">
    <?php echo "<h1>You have successfully logged out</h1><br>"; ?>
    <br><h4>Thank you for visiting Samgatha.org. Have fun</h4><br>
    </div>

    <?php require 'footer.php'; ?>
  </body>

</html>
