<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for product update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$price=$_POST['price'];
	$stock_quantity=$_POST['stock_quantity'];
		
	// update product data
	$result = mysqli_query($mysqli, "UPDATE product SET name='$name',stock_quantity='$stock_quantity',price='$price' WHERE id=$id");
	
	// Redirect to homepage to display updated product in list
	header("Location: index.php");
}
?>
<?php
// Display selected product data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech product data based on id
$result = mysqli_query($mysqli, "SELECT * FROM product WHERE id=$id");
 
while($product_data = mysqli_fetch_array($result))
{
	$name = $product_data['name'];
	$stock_quantity = $product_data['stock_quantity'];
	$price = $product_data['price'];
}
?>
<html>
<head>	
	<title>Edit Product</title>
	<link rel="stylesheet" href="style.css">
</head>
 
<body>
<div class="container">
	<a href="index.php" class="action-button">Go to Home</a>
	<br/><br/>
	
	<form name="update_product" method="post" action="edit.php" class="action-form">
		<h2>Edit Product</h2>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>" required>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" name="price" value="<?php echo $price;?>" step="0.01" required>
		</div>
		<div class="form-group">
			<label>Stock quantity</label>
			<input type="number" name="stock_quantity" value="<?php echo $stock_quantity;?>" required>
		</div>
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			<input type="submit" name="update" value="Update Product" class="submit-btn">
		</div>
	</form>
</div>
</body>
</html>