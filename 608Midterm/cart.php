<?php
session_start();

include_once "lib/php/print_o.php";
include_once "db_connect.php";
?>

<?php include "partials/head.html";?>

<body id="cart">
    <?php include "partials/nav.html";?>

<?php 
if ($_GET['action'] == 'addToCart') {
    $query_string = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
    $result = $conn->query($query_string);

    if($conn->errno) die($conn->error);

    $row = $result->fetch_object();

    $cart_items = $_SESSION['cart_items'];
    if (empty($cart_items)) {
        $cart_items = array();
    }

    $item = [
        "photo_list" => $row->photo_list,
        "price" => $row->price,
    ];

    $cart_items[] = $item;

    $_SESSION['cart_items'] = $cart_items;
}

$cart_items = $_SESSION['cart_items'];
?> 

    <div class="container" id="cartpage">
        <div class="container mt-4">
            <div class="row justify-content-around mt-5" style="height:80px;">
                <h4 class="mt-4">Shopping cart</h4>
            </div>
            <hr></hr>
            <div class="row">
                <hr></hr>
                <div class="col-xs-12 col-sm-3"></div>
                <div class="col-xs-12 col-sm-3 center">
                    Price
                </div>
                <div class="col-xs-12 col-sm-3 center">
                    Quantity
                </div>
                <div class="col-xs-12 col-sm-3 center">
                    Total
                </div>
            </div>
            <hr></hr>
<?php 
    foreach ($cart_items as $item) {
        $photos = explode(",",$item['photo_list']);

?> 
            <div class="row align-items-center mt-3 mb-3">
                <div class="col-xs-12 col-sm-3 center">
                    <img class="img-thumbnail" src="<?= $photos[0] ?>">
                </div>
                <div class="col-xs-12 col-sm-3 center">
                    $<?= $item['price'] ?>
                </div>
                <div class="col-xs-12 col-sm-3 center">
                    <div class="row">
                        <div class="center-block qty-changer">
                            <button class="qty-change-minus">-</button>
                            <input id="qty-input" type="number" value="1" />
                            <button class="qty-change-plus">+</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 center">
                    $<?= $item['price'] ?>
                </div>
            </div>
<?php 
    }
?> 
            <hr></hr>
            <div class="row font-weight-bold mt-2 mb-2">
                <div class="col-xs-12 col-sm-3 center"></div>
                <div class="col-xs-12 col-sm-3 center"></div>
                <div class="col-xs-12 col-sm-3 center">
                    <h5 class="center">Subtotal</h5></div>
                <div class="col-xs-12 col-sm-3 center">
                    <h5 class="center">$<?= ($row->price * $quantity) ?></h5></div>
            </div>
            <hr></hr>
        </div>
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-3 center"></div>
            <div class="col-xs-12 col-sm-3 center"></div>
            <div class="col-xs-12 col-sm-3 center">
                <a href="product_list.php?product_type=control"><u style="color:#294789;">continue shopping</u></a></div>
            <div class="col-xs-12 col-sm-3 center">
                <a href="cart.php">
                    <button type="button" class="btn btn-rounded" style="background-color:#294789; color:white;">CHECKOUT</button>
                </a>
            </div>
        </div>
        <?php include "partials/footer.html";?>
