<?php 
	session_start();
	require 'connection.php';
	$event_id = $_SESSION['event_id'];
	$query = "select team_size from event where event_no='$event_id'";
	$retval = mysql_query($query);
	if(!$retval) {
		die('Could not query1'.mysql_error());
	}
	$row = mysql_fetch_row($retval);
	$team_size = $row[0];

	$participant = array();

	for ($i=1; $i <= $team_size; $i++) { 
		$p = "p".$i;
		array_push($participant,mysql_real_escape_string($_POST[$p]));
	}	

	$team_name = mysql_real_escape_string($_POST['team_name']);
	//until here, all the team memebers are accumulated in $participant and team name in 

	for ($i=0; $i <$team_size ; $i++) {  // validating samgatha id's
		$query = "select name from student_detail where sam_id='$participant[$i]'";
		$retval = mysql_query($query);
		if(!retval) {
			die('Could not query2'.mysql_error());
		}
		$row = mysql_fetch_row($retval);
		if(empty($row)) {
			$_SESSION['fail_id'] = 1;
			$link = $_SESSION['redirect'];
			header("Location:$link");
			exit;
		}
	}

	for ($i=0; $i < $team_size ;$i++) {  //checking if any other is previously registered for the event.
		$query = "select team_id from participate_in where samgatha_id = '$participant[$i]' and event_num = '$event_id'";
		$retval = mysql_query($query);
		if(!retval) {
			die('Could not query3'.mysql_error());
		}
		$row = mysql_fetch_row($retval);
		if(!empty($row)) {
			$_SESSION['fail_reg'] = 1;
			$link = $_SESSION['redirect'];
			$invalid_registration = 1;
			header("Location:$link");
			exit;
		}
	}

	if($invalid_registration!=1) {

		$query = "select reg_count from event where event_no = '$event_id'";
		$retval = mysql_query($query);
		if(!retval) {
			die('Could not query4'.mysql_error());
		}
		$row = mysql_fetch_row($retval);
		$team_id = $row[0];

	for ($i=0; $i < $team_size; $i++) { 
		if ($i==0) {

				$query = "insert into participate_in (samgatha_id,event_num,team_id,team_name,is_leader) values ('$participant[$i]','$event_id','$team_id','$team_name',1)";
			$retval = mysql_query($query);
			if(!retval) {
				die('Could not query5'.mysql_error());
			}
			
		} else {
			
			$query = "insert into participate_in (samgatha_id,event_num,team_id,team_name) values ('$participant[$i]','$event_id','$team_id','$team_name')";
			$retval = mysql_query($query);
			if(!retval) {
				die('Could not query5'.mysql_error());
			}

		}
	}
	$team_id++;
	$query = "update event set reg_count=".$team_id." where event_no = '$event_id'";
		$retval = mysql_query($query);
		if(!retval) {
			die('Could not query4'.mysql_error());
		}
		//Updated the participant table.
	/*$str = NULL;
	for ($i=1; $i <= 5; $i++) { 
		$str = ($i==1)?"participant".$i:$str.","."participant".$i;
	}

	$participant_str = NULL;
	for ($i=0; $i < $team_size; $i++) { 
		if($i==0) {
			$participant_str = $participant[$i];
		}
		else {
			$participant_str= $participant_str.","."$participant[$i]";
		}
	}

		

		$query = "insert into team_with ($str,for_event_no,team_name) values ($participant_str,$event_id,'$team_name')";
		$retval = mysql_query($query);
		if(!$retval) {
			die('Could not query5'.mysql_error());
		}	*/

		$_SESSION['fail_reg']=0;
		$_SESSION['fail_id']=0;
		$link = $_SESSION['redirect'];
		header("Location:$link");
		exit;
	}
	ob_end_flush();
?>