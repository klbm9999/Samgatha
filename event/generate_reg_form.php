<?php 
if ($_SESSION['validlogin']==1) {
  require '../connection.php';
  $query = 'select team_id from participate_in where samgatha_id ='.$_SESSION['samid'].' and event_num='.$_SESSION['event_id'];
  $retval = mysql_query($query);
      if(!$retval) {
        die('Could not queryo'.mysql_error());
      }
      $row = mysql_fetch_row($retval);
  if (!empty($row)) {
    echo '<div id="rob-reg-box">'."You have already registered for this event".'</div>';
  }

else {

echo '
<div id="rob-reg-box">
    <form method="post" action="../event_register.php" id="form-box">';
      $query = 'select team_size from event where event_no ='.$_SESSION['event_id'];
      $retval = mysql_query($query);
      if(!$retval) {
        die('Could not queryo'.mysql_error());
      }
      $row = mysql_fetch_row($retval);
      echo "\n";
      for ($i=1; $i <=$row[0]; $i++) {
        $id = 'p'."$i"; 
        /*label starts here*/
        echo '<label for="'.$id.'" id="'.$id.'">Participant '.$i.': SAM16L00</label>';
        echo "\n";
        /*input box start*/
        if ($i==1) {
           echo '<input type="text" class="p-box" name="'.$id.'" id="p'.$id.'" value="'.$_SESSION['samid'].'"></input><br>';
        }
        else {
          echo '<input type="text" class="p-box" name="'.$id.'" id="p'.$id.'"></input><br>';
        }
        echo "\n\n";   
      }
      echo '<label for="team_name" id="t_name_label">Team Name: </label>';
      echo '<input type="text" class="p-box" name="team_name" id="team_name" style="left:50%"></input><br>';
      //header('Location:http://localhost/event/event_5_1.php');
     echo '
     <input type="submit" value="Register" id="rob-reg-button"></input>
     </form>
  </div>
  ';
  }
}
else {
  echo '<div id="content_format">'."Please login to register.".'</div>';
}

?>