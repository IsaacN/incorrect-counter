<?php
include('dbconn.php');


  $comment = mysql_real_escape_string($_POST['comment']);
  $reporter = mysql_real_escape_string($_POST['reporter']);
  $commenter_id_full = explode('user_id_',$_POST['commenter_id']);
  $commenter_id = mysql_real_escape_string($commenter_id_full[1]);

  $sql = "INSERT INTO comments (commentID, commenterID, reporterID, comment, timestamp)
        VALUES ('','".$commenter_id."','".$reporter."','".$comment."','".date('y-m-d H:i:s')."')";

  $query = mysql_query($sql);
?>