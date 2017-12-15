<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="add_product.php" method="post" id="product_form">
        <label>Dimensions:</label>
        <br>
        <input type="text" name="dimensions">
        <br>
        <label>Weight:</label>
        <br>
        <input type="text" name="weight">
        <br>
        <label>Colors</label>
        <br>
        <input type="text" name="colors[]">
        <br>
        <input type="text" name="colors[]">
        <br>
        <input type="text" name="colors[]">
        <br>
        <label>Supported Audio Formats:</label>
        <br>
        <textarea rows- "5" cols="50" type="text" name="description"></textarea>
        <br>
        <label>Wireless:</label>
        <br>
        <input type="text" name="wireless">
        <br>
        <label>Speaker:</label>
        <br>
        <input type="text" name="speaker">
        <br>
        <label>Power:</label>
        <br>
        <input type="text" name="power">
        <br>
        <label>Ports & Connectors:</label>
        <br>
        <input type="text" name="ports & connectors">
        <br>
        <label>Supported Operating Systems:</label>
        <br>
        <input type="text" name="supported operating Systems">
        <br>
        <label>&nbsp;</label>
        <br>
        <input type="submit" name="submit">
        <br>
    </form>
</body>

</html>