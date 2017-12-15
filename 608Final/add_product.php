<?php


$prodname = $_POST["prodname"];
$price = $_POST["price"];
$photos = $_POST["photos"];
$photo_list_text = implode(",", $photos);
$description = $_POST["description"];
$colors = $_POST["colors"];
$color_list_text = implode(",", $colors);

   include('dbcontroller.php');

$sql = ("INSERT INTO products (product_name, price, photo_list, description, color_list) 
	VALUES('$prodname', '$price', '$photo_list_text', '$description', '$color_list_text')");

if(mysqli_query($link, $sql)){

	//Close connection
	mysqli_close($link);

	include('add_product_form.php');
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



?>


