<?php
include_once "db_connect.php";

$link = mysqli_connect(
	$db_host,
	$db_name,
	$db_pass,
	$db_base
	);

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