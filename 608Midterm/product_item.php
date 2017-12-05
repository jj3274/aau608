<?php
include_once "lib/php/print_o.php";
include_once "db_connect.php";

?>

<?php include "partials/head.html";?>

<body id="products-single">
    <?php include "partials/nav.html";?>


<?php 

if(!isset($_GET['id'])) {
	echo "You borked it";
} else {

	$query_string = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
	$result = $conn->query($query_string);

	if($conn->errno) die($conn->error);

	$row = $result->fetch_object();

	$product_type = $row->product_type;
	// the explode function makes an array
	$colors = explode(",",$row->color_list);
	$photos = explode(",",$row->photo_list);

	// show the data after it's all ready
	?>


	<div class="container second" id="product-section">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    	<?php
	                    	for ($i=1; $i < count($photos); $i++) {
	                	?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="$i"></li>
                    	<?php
		                	}
	                	?>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?= $photos[0] ?>" alt="First slide" width="100%">
                        </div>
                    	<?php
	                    	for ($i=1; $i < count($photos); $i++) {
	                    		$photo_url = $photos[$i];
	                	?>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= $photo_url ?>" alt="Additional slide" width="100%">
                        </div>
                    	<?php
		                	}
	                	?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
	<div class="col-xs-12 col-md-6 pl-5 align-self-center">
                <div class="row">
                    <div class="col-md-12 mt-0">
                        <h2 class="center"><?= $row->product_name ?></h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4"><?= $row->description ?></p>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <small>colors</small>
                    </div>
                    <div class="col-6">
                        <small>quantity</small>
                    </div>
                </div>
                <div class="row">
                <div class="col-6">
                        <div class="form-group">
                            <select class="selectpicker form-control">
                            	<?php
				                	foreach ($colors as $color_val) {
				                		echo "<option value='".$color_val."'>".$color_val."</option>";
				                	}
			                	?>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty-changer">
                            <button class="qty-change-minus">-</button>
                            <input id="qty-input" type="number" value="1" />
                            <button class="qty-change-plus">+</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <h3>$<?= $row->price ?></h3></div>
                </div>
                <div class="add row mt-4">
                    <div class="col-6">
                        <a href="cart.php?action=addToCart&id=<?= $row->id ?>">
                            <button type="button" class="btn btn-primary btn-rounded">ADD TO CART</button>
                        </a>
                        <a class="spec ml-3" href="#" data-toggle="modal" data-target="#myModal"><u><small>SPECS</small></u></a>
                    </div>
                </div>
            </div>		
	</div>

    <div class="container">
        <div class="row featured">
            Also you might like
        </div>
        <div class="row">
<?php 
	$query_string = "SELECT * FROM `products` WHERE `product_type` = '$product_type' AND `id` <> '{$_GET['id']}' ORDER BY RAND() LIMIT 3";
	$result = $conn->query($query_string);

	if($conn->errno) die($conn->error);

	while ($row = $result->fetch_object()) {
      $photo_list = $row->photo_list;
      $first_photo = explode(",", $photo_list)[0];
?>	
        <div class="col-xs-12 col-md-2">
            <img class="img-responsive" width="100%" src="<?= $first_photo ?>">
        </div>
<?php 
	}
?>	
        </div>
    </div>

	<?php include "partials/footer.html";?>
	<!-- <div>
		<a href="product_list.php">Back</a>
	</div> -->
	<?php 
}
?>
	
