<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all products data from database
$result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
<div class="container">
    <a href="add.php" class="action-button">Add New Product</a><br/><br/>
 
    <table>
        <tr>
            <th>Name</th> <th>Price</th> <th>Stock Quantity</th> <th>Action</th>
        </tr>
        <?php  
        while($product_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$product_data['name']."</td>";
            echo "<td>".$product_data['price']."</td>";
            echo "<td>".$product_data['stock_quantity']."</td>";    
            echo "<td class='action-links'><a href='edit.php?id=$product_data[id]' class='edit-link'>Edit</a> | <a href='delete.php?id=$product_data[id]' class='delete-link'>Delete</a></td></tr>";        
        }
        ?>
    </table>
</div>
</body>
</html>