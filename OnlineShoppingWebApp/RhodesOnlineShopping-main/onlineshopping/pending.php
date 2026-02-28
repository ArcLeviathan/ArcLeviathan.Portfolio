<!DOCTYPE html>
<html>
<head>
	<title>All Products | Rhodes</title>
	<style>
	body {
		background-image: url("materials/landship.png");
		background-repeat: no-repeat;
		background-size: cover;
	}
	.checkout-btn {
            background-color: #EE5A24;
        }
	</style>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
	<nav>
	<div class = "header">
		<div class="logo">
			<a href="homepage.php"><img src="materials/Rhodeslogo.png"></a>
		</div>
		<div class = "navbar">
			<div class="navbar-links">
				<a class = "btn" href = "registration.php">You are not logged in!</a>
			</div>
			<div>
				<a class = "btn" href = "aboutus.php" style ="margin-left: -50px; margin-right: 50px;">About Us</a>
			</div>
			<div class="search-bar">
				<div class = "input-group">
					<input type = "text" class="form-control" placeholder = "Search Rhodes" name = "search"></input>
					<button class = "btn btn-outline-secondary" type = "search">Search <i class="bi bi-search"></i></button> 
				</div>
			</div>
			<div class ="navbar-links" style = "border-right: 0px; border-left: 0px; margin-left: 50px;">
				<a class = "btn" href = "homepage.php">Back to Home</a>
			</div>
		</div>
	</div>
	</nav>
	<div class= "pagetaker">
	</div>
	<div class = "checkout-pending">
		<table>
			<tr>
				<th>Item Picture</th>
				<th>Item Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>
			</tr>
			<tr>
				<td><img src = "materials/closure.jpg"></td>
				<td><?php echo $product_name;  ?></td>
					<td><?php echo "PHP ".$product_price;  ?></td>
					<td><?php echo $product_quantity;  ?></td>
					<td><?php echo "PHP ".$product_quantity*$product_price;  ?></td>
			</tr>
		</table>
	</div>
 <div class="text-center">
        <a class="btn btn-primary checkout-btn" href="checkout.php">Check Out</a>
    </div>
	
</body>
</html>
