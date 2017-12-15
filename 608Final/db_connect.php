<?php

// The host name, probably "localhost"
$db_host = "160.153.76.98";
// The user name for the database
$db_name = "wnm608smarthome";
// The password for that username
$db_pass = "phpwnm608";
// The name of your custom database
$db_base = "smarthome database";


// start a connection to the database
$conn = new mysqli(
	$db_host,
	$db_name,
	$db_pass,
	$db_base
	);

if($conn->connect_errno) die($conn->connect_error);

header('Content-Type: text/html; charset=UTF-8');
$conn->set_charset("utf8");

?>