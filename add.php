<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" href="style.css">
</head>
 
<body>
	<div class="container">
		<a href="index.php" class="action-button">Go to Home</a>
		<br/><br/>
 
		<form action="add.php" method="post" name="form1" class="action-form">
			<h2>Add New Product</h2>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" required>
			</div>
			<div class="form-group">
				<label>Price (in Rupiah)</label>
				<input type="number" name="price" step="0.01" required>
			</div>
			<div class="form-group">
				<label>Stock quantity</label>
				<input type="number" name="stock_quantity" required>
			</div>
			<div class="form-group">
				<input type="submit" name="Submit" value="Add Product" class="submit-btn">
			</div>
		</form>
		
		<?php
 
		// Check If form submitted, insert form data into product table.
		if(isset($_POST['Submit'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			$stock_quantity = $_POST['stock_quantity'];
			
			// include database connection file
			include_once("config.php");
					
			// Insert product data into table
			$result = mysqli_query($mysqli, "INSERT INTO product(name,price,stock_quantity) VALUES('$name','$price','$stock_quantity')");
			
			header("Location: index.php");
		}
		?>
	</div>
</body>
</html>