<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that product
$id = $_GET['id'];
 
// Delete product row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM product WHERE id=$id");
 
// After delete redirect to Home, so that latest product list will be displayed.
header("Location:index.php");
?>