<?php
    
    session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection();
    
    if(isset($_GET['productId'])) {
        $product = getProductInfo();
    }
    
    function getProductInfo() {
        global $conn;
        
        $sql = "SELECT * FROM om_product WHERE productId = " . $_GET['productId'];
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $records;
    }
    
    function getCategories($catId) {
        global $conn;
        
        $sql = "SELECT catId, catName FROM om_category ORDER BY catName";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo "<option ";
            echo ($record['catId'] == $catId) ? " selected " : "";
            echo "value='" . $record['catId'] . "'>" . $record['catName'] . "</option>";
        }
        
    }
    
    if(isset($_GET['updateProduct'])) {
        $sql = "UPDATE om_product SET productName = :productName, productDescription = :productDescription, productImage = :productImage, price = :price, catId = :catId
            WHERE productId = :productId";
            
        $np = array();
        $np[':productName'] = $_GET['productName'];
        $np[':productDescription'] = $_GET['productDescription'];
        $np[':productImage'] = $_GET['productImage'];
        $np[':price'] = $_GET['price'];
        $np[':catId'] = $_GET['catId'];
        $np[':productId'] = $_GET['productId'];
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        echo "<h2><em>Product has been updated!</em></h2>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Product</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        
        <h1>Update A Product</h1>
        <form>
            <input type="hidden" name="productId" value="<?= $product['productId']; ?>"/>
            <strong>Product Name</strong> <input type="text" class='form-control' name="productName" value="<?= $product['productName']; ?>"/><br>
            <strong>Description</strong> <textarea class='form-control' name="description" cols=50 rows=4><?= $product['productDescription']; ?></textarea><br>
            <strong>Price</strong> <input type="text" class='form-control' name="price" value="<?= $product['price']; ?>"/><br>
            <strong>Category</strong> <select class='form-control' name="catId">
                <option value="">Select One</option><br>
                <?= getCategories($product['catId']); ?>
            </select><br />
            <strong>Set Image Url</strong> <input type='text' name='productImage' class='form-control' value="<?= $product['productImage']; ?>"><br>
            <input type="submit" name='updateProduct' class='btn btn-primary' value="Update Product">
        </form>

    </body>
</html>