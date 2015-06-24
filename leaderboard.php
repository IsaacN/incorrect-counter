<?php
include('dbconn.php');

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
		$userNames[1].'_1' => $userScores[1],
		$userNames[2].'_2' => $userScores[2],
		$userNames[3].'_3' => $userScores[3],
		$userNames[4].'_4' => $userScores[4],
		$userNames[5].'_5' => $userScores[5],
		);
	arsort($userData);
	$full_name_1 = explode('_', key($userData));
	$position1Name = $full_name_1[0];
	$id_1 = 'user_id_'.$full_name_1[1];
	$position1Score = $userData[key($userData)];

	next($userData);
	$full_name_2 = explode('_', key($userData));
	$position2Name = $full_name_2[0];
	$id_2 = 'user_id_'.$full_name_2[1];
	$position2Score = $userData[key($userData)];

	next($userData);
	$full_name_3 = explode('_', key($userData));
	$position3Name = $full_name_3[0];
	$id_3 = 'user_id_'.$full_name_3[1];
	$position3Score = $userData[key($userData)];

	next($userData);
	$full_name_4 = explode('_', key($userData));
	$position4Name = $full_name_4[0];
	$id_4 = 'user_id_'.$full_name_4[1];
	$position4Score = $userData[key($userData)];

	next($userData);
	$full_name_5 = explode('_', key($userData));
	$position5Name = $full_name_5[0];
	$id_5 = 'user_id_'.$full_name_5[1];
	$position5Score = $userData[key($userData)];

	// $userNamesRanked = array(
	// 	1 => key($userData[$userNames[1]),
?>