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

	$sql = "SELECT userID, name FROM users";
	$query = mysql_query($sql);
	global $userScores, $userNames;
	$userScores = array();
	$userNames = array();
	$userIDs = array();
	while($result = mysql_fetch_array($query)){
		$userID = $result['userID'];
		$userName = $result['name'];
		$countSQL = "SELECT COUNT(*) as pointsCount FROM comments WHERE commenterID = $userID ";
		$countQuery = mysql_query($countSQL);
		$countResult = mysql_fetch_array($countQuery);
		$count = $countResult['pointsCount'];
		// $count = "hi";

		$userScores[$userID]=$count;
		$userNames[$userID]=$userName;
	};
	$userData = array(
		$userNames[1] => $userScores[1],
		$userNames[2] => $userScores[2],
		$userNames[3] => $userScores[3],
		$userNames[4] => $userScores[4],
		$userNames[5] => $userScores[5],
		);
	arsort($userData);
	$position1Name = key($userData);
	$position1Score = $userData[$position1Name];

	next($userData);
	$position2Name = key($userData);
	$position2Score = $userData[$position2Name];

	next($userData);
	$position3Name = key($userData);
	$position3Score = $userData[$position3Name];

	next($userData);
	$position4Name = key($userData);
	$position4Score = $userData[$position4Name];

	next($userData);
	$position5Name = key($userData);
	$position5Score = $userData[$position5Name];

	// $userNamesRanked = array(
	// 	1 => key($userData[$userNames[1]),
?>