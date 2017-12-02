<?php
  include_once "lib/php/print_o.php";
  include_once "db_connect.php";
?>

<?php include "partials/head.html";?>
		
<body class="products-list">
    
    <?php include "partials/nav.html";?>

    <div class="container" id="products">
		<?php 
			if (!isset($_GET['product_type'])) {
				echo "You borked it";
			} else {
				$query_string = "SELECT * FROM products WHERE product_type = '{$_GET['product_type']}' ORDER BY product_name LIMIT 12";
				$result = $conn->query($query_string);

				if($conn->errno) die($conn->error);

				do {
		?>
		    <!-- contents in do~while -->
        <div class="row justify-content-around">
			<?php for ($i = 0; $i < 3; $i++) { ?>
		    <!-- contents in for~loop -->
			<section class="col-sm-6 col-md-4 col-lg-3">
				<?php if ($row = $result->fetch_object()) { ?>
                <a class="product-1" href="product_item.php?id=<?= $row->id ?>">
                <?php
                  $photo_list = $row->photo_list;
                  $first_photo = explode(",", $photo_list)[0];
                ?>
                <img src="<?= $first_photo ?>">
                <h5 class="mt-4"><?= $row->product_name ?></h5>
                <h7>$<?= $row->price ?></h7></a>
				<?php } ?>
            </section>
		<?php } // for ?>
        </div>
		<?php 
				} while ($row);
            } // else
        ?>

    </div>
<?php include "partials/footer.html";?>