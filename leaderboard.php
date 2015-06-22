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

function leaderScore(){
	// $sql = "SELECT userID, name FROM users ORDER BY userID DESC";
	// $result = mysql_fetch_array(mysql_query($sql));
	// $userIDs = $result['userID'];
	// $names = $result['name'];


};

leaderScore();
?>