<?php
$host = "localhost";
$userId = "wnm608smarthome";
$password = "phpwnm608";
$database = "smarthome database";

$link = mysqli_connect($host, $userId, $password, $database);

// Check connection

if(link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS products (
id INT(11) NOT NULL PRIMARY KEY auto_increment,
product_name VARCHAR(255) NOT NULL,
photo_list VARCHAR(255) NOT NULL,
price DECIMAL(10,2) NOT NULL,
description VARCHAR(255) NOT NULL,
color_list VARCHAR(255) NOT NULL,
)";

if(mysqli_query($link,$sql)){

} else{
	echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}

?>