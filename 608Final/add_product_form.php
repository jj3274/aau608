<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="add_product.php" method="post" id="product_form">
        <label>Product Name:</label>
        <br>
        <input type="text" name="prodname">
        <br>
        <label>Price:</label>
        <br>
        <input type="text" name="price">
        <br>
        <label>Photo</label>
        <br>
        <input type="text" name="photos[]">
        <br>
        <input type="text" name="photos[]">
        <br>
        <input type="text" name="photos[]">
        <br>
        <label>Product Description:</label>
        <br>
        <textarea rows- "5" cols="50" type="text" name="description"></textarea>
        <br>
        <label>Product Color:</label>
        <br>
        <input type="text" name="colors[]">
        <br>
        <input type="text" name="colors[]">
        <br>
        <input type="text" name="colors[]">
        <br>
        <label>&nbsp;</label>
        <br>
        <input type="submit" name="submit">
        <br>
    </form>
</body>

</html>