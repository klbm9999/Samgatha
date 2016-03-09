<?php session_start(); ?>
<html>
<head>
	<title>Samgatha 2016</title>
	<link rel="stylesheet" type="text/css" href="/css/basic.css">
	<link rel="stylesheet" type="text/css" href="/css/dashboard.css">
</head>
<body>
<?php require 'header.php'; ?>

<script type="text/javascript">
	var XFoo = document.registerElement('event-bar');
	var XFoo1 = document.registerElement('event-name');
	var XFoo2 = document.registerElement('event-pic');
	var XFoo3 = document.registerElement('event-team');
</script>

<div id="dash-box">
	<h1>
	Your events
	</h1>
	<div id="event-box">


	<?php 
		require 'connection.php';
		$query = 'select count(sam_id) from participate_join_student where sam_id ='.$_SESSION['samid'];
	    $retval = mysql_query($query);
	    if(!$retval) {
	      die('Could not query'.mysql_error());
	    }
      	$row = mysql_fetch_row($retval);
      	$count = $row[0]; // number of events he is participating in

     //  	$query = 'select event_num from participate_in where samgatha_id ='.$_SESSION['samid'];
	    // $retval = mysql_query($query);
	    // if(!$retval) {
	    //   die('Could not query'.mysql_error());
	    // }

	 ?>


	<?php for ($i=0; $i < $count; $i++) :  ?>

		<event-bar>
			<event-name>
				Impulse
			</event-name>
			<event-pic>
				<img src="/assets/ibg6.jpg">
			</event-pic>
			<event-team>
				
			</event-team>
		</event-bar><br><br><br>

	<?php endfor; ?>
	</div>
</div>

<?php require 'footer.php'; ?>
</body>
</html>