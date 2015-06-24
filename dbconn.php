<?php
$servername = "localhost";
$username = "frictio3_icount";
$password = "Ipodtouch1";
$database = "frictio3_incorrectness-counter";

// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db($database, $conn) or die("Could not find database."); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
?>