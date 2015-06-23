<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "incorrectness-counter";

// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db($database, $conn) or die("Could not find database."); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};


  $comment = mysql_real_escape_string($_POST['comment']);
  $reporter = mysql_real_escape_string($_POST['reporter']);
  $commenter_id_full = explode('user_id_',$_POST['commenter_id']);
  $commenter_id = mysql_real_escape_string($commenter_id_full[1]);

  $sql = "INSERT INTO comments (commentID, commenterID, reporterID, comment, timestamp)
        VALUES ('','".$commenter_id."','".$reporter."','".$comment."','".date('y-m-d H:i:s')."')";

  $query = mysql_query($sql);
?>