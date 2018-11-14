<?php
    include 'dbConnection.php';
    
    // MySQL Connection
    $conn = getDatabaseConnection();
    
    function displayCategories() {
        global $conn;
        
        $sql = "SELECT catId, catName FROM om_category ORDER BY catName";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Print the results
        foreach ($records as $record) {
            echo "<option value='" . $record["catId"] . "'>" . $record["catName"] . "</option>";
        }
    }
    
    function displaySearchResults() {
        global $conn;
        
        if (isset($_GET['searchForm'])) {
            // Checks whether user has submitted the form
            echo "<h3>Products Found: </h3>";
            
            // To prevent SQL Injections
            $namedParameters = array();
            // SQL Statement
            $sql = "SELECT * FROM om_product WHERE 1";
            
            // // Products
            // if (!empty($_GET['product'])) {
            //     // Checks whether user has typed something in the "Product" text box
            //     $sql .= " AND productName LIKE :productName";
            //     $namedParameters[":productName"] = "%" . $_GET['product'] . "%";
            // }
            
            // Product Name and Description
            if (!empty($_GET['product'])) {
                // Checks whether user has typed something in the "Product" text box
                $sql .= " AND productName LIKE :productName OR productDescription LIKE :productDescription";
                $namedParameters[":productName"] = "%" . $_GET['product'] . "%";
                $namedParameters[":productDescription"] = "%" . $_GET['product'] . "%";
            }
            
            // Categories
            if(!empty($_GET['category'])) {
                // Checks to see whether a user has selected a category
                $sql .= " AND catId = :categoryId";
                $namedParameters[":categoryId"] = $_GET['category'];
            }
            
            // Price From
            if (!empty($_GET['priceFrom'])) {
                // Checks to see whether a user has typed something in the "Price From" textbox
                $sql.= " AND price >= :priceFrom";
                $namedParameters[":priceFrom"] = $_GET['priceFrom'];
            }
            
            // Price To
            if (!empty($_GET['priceTo'])) {
                // Checks to see whether a user has typed something in the "Price From" textbox
                $sql.= " AND price <= :priceTo";
                $namedParameters[":priceTo"] = $_GET['priceTo'];
            }
            
            // Order By
            if (isset($_GET['orderBy'])) {
                if ($_GET['orderBy'] == "price") {
                    $sql .= " ORDER BY price";
                } else {
                    $sql .= " ORDER BY productName";
                }
            }
            
            // Now fetch the data
            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters);
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Echo the data in a foreach loop
            foreach ($records as $record) {
                echo "<a href=\"purchaseHistory.php?productId=" . $record['productId'] . "\">History </a>";
                
                echo "<span class='item'>" . $record["productName"] . " " . $record["productDescription"] . " $" . $record["price"] . "</span><br /><br />";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>OtterMart Product Search</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>OutterMart Product Search</h1>
            
            <form>
                <span class='title'>Product: </span><input type="text" name="product"/>
                <br />
                <span class='title'>Category: </span><select name="category">
                    <option value="">Select One</option>
                    <?=displayCategories()?>
                </select>
                <br/>
                Price: From <input type="text" name="priceFrom" size="7"/>
                       To <input type="text" name="priceTo" size="7"/>
                <br>
                Order result by:
                <br>
                <input type="radio" name="orderBy" value="price"/>Price<br>
                <input type="radio" name="orderBy" value="name"/>Name
                
                <br><br>
                <input type="submit" value="Submit" name="searchForm"/>
            </form>
            <br />
        </div>
        
        <hr>
        <!-- Display Search Results -->
        <?= displaySearchResults(); ?>
        
    </body>
    
</html>