
<?php
session_start();
include('mysql_connect.php');
include('insert.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Products | Rhodes</title>
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
			<?php
			if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
				echo '<a class="btn">Welcome, '. $_SESSION['username'];
				echo '<a class="btn" href="logout.php">Logout</a>';
			} else {
			echo '<a class="btn" href="login.php">Login</a>';
			echo '				<a class = "btn" href = "registration.php">New to Rhodes?</a>';
			}
			?>
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
	<div class ="mainproducts">
		<div class = "list">
			<div class = "list2">
			<center>
			<h3>Products List</h3>
			<div class = "navproducts">
			<ul>
				<li><a class = "btn btn-light" href = "#">Tumblers</a></li>
				<li><a class = "btn btn-light" href = "#phonecase">Phone Cases</a></li>
				<li><a class = "btn btn-light" href = "#hat">Hats</a></li>
				<li><a class = "btn btn-light" href = "#headphone">Headphones</a></li>
			</ul>
			<center><h3>Rhodes Event</h3></center>
			<ul>
				<li><a class = "btn btn-light" href = "#omershirt">Omertosa Shirt</a></li>
			</ul>
			</div>
			</center>
			</div>
		</div>
		<div class = "separator">
		</div>
		<div class = "products">
			<h2>Illium Bottle</h2>
			<div>
			<table style = "margin-bottom: -100px;">
				<tr>
					<td><center><img src = "materials/products/illiumbottle1.png"></center></td>
					<td><center><img src = "materials/products/illiumbottle2.png"></center></td>
				</tr>
				<tr>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal1">View Item</button></center></td>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal2">View Item</button></center></td>
				</tr>
			</table>
			<br id = "phonecase">
			<br>
			
			</div>
			<br><br><hr>
			<h2>Medicase</h2>
			<div>
			<table style = "margin-bottom: -100px;">
				<tr>
					<td><center><img src = "materials/products/phonecase1.png"></center></td>
					<td><center><img src = "materials/products/phonecase2.png"></center></td>
				</tr>
				<tr>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal3">View Item</button></center></td>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal4">View Item</button></center></td>
				</tr>
			</table>
			<br id = "hat">
			<br>
			
			</div>
			<br><br><hr>
			
			<h2>Tsun Hat</h2>
			<div>
			<table style = "margin-bottom: -100px;">
				<tr>
					<td><center><img src = "materials/products/tsunhat1.png"></center></td>
					<td><center><img src = "materials/products/tsunhat2.png"></center></td>
				</tr>
				<tr>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal5">View Item</button></center></td>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal6">View Item</button></center></td>
				</tr>
			</table>
			<br id = "headphone">
			<br>
			</div>
			<br><br><hr>
			
			<h2>Foal</h2>
			<div>
			<table style = "margin-bottom: -100px;">
				<tr>
					<td><center><img src = "materials/products/foal1.png"></center></td>
					<td><center><img src = "materials/products/foal2.png"></center></td>
				</tr>
				<tr>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal7">View Item</button></center></td>
					<td><center><button class="btn btn-success modal-button" data-modal-target="modal8">View Item</button></center></td>
				</tr>
			</table>
			<br id = "omershirt">
			<br>
			</div>
			<br><br><hr>
			<div class = "special">
				<br>
				<h2><center>Grand Opening Exclusive</center></h2>
				<hr class = "linebreak">
				<div>
					<br>
					<h2><center>Omertosa Shirt</center></h2>
					<div>
					<table style = "margin-bottom: -100px;">
						<tr>
							<td><center><img src = "materials/products/texasshirt1.png"></center></td>
							<td><center><img src = "materials/products/texasshirt2.png"></center></td>
						</tr>
						<tr>
							<td><center><button class="btn btn-success modal-button" data-modal-target="modal9">View Item</button></center></td>
							<td><center><button class="btn btn-success modal-button" data-modal-target="modal10">View Item</button></center></td>
						</tr>
					</table>
					<br id = "phonecase">
					<br>
					</div>
				<br><br><hr>
				</div>
			</div>
		</div>
	</div>
	<div id="modal1" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/illiumbottle1.png">
			</div>
			<div class = "modaldesc">
				<h3>Illium Bottle (Black)</h3>
				<p>Refresh yourself with Rhodes Exclusive Illium Bottle! Keeps your refreshments cool for up to 18 hours!</p>
				<p>Price: 499 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Illium Bottle (Black) ">
    				<input type="hidden" name="product_price" value="499">
					<input type="hidden" name="id" id="id" value="1">

    				<label for="quantity">Quantity:</label>
                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
				</form>	


				</center>
			</div>
		</div>
	</div>
	<div id="modal2" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/illiumbottle2.png">
			</div>
			<div class = "modaldesc">
				<h3>Illium Bottle (Blue)</h3>
				<p>Refresh yourself with the Rhodes Exclusive Illium Bottle! Keeps your refreshments cool for up to 18 hours!</p>
				<p>Price: 499 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Illium Bottle (Blue)">
    				<input type="hidden" name="product_price" value="499">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="2">

                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>

  				</form>	
				</center>
			</div>
		</div>
	</div>
	<div id="modal3" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/phonecase1.png">
			</div>
			<div class = "modaldesc">
			<h3>Medicase (Green)</h3>
			<p>Protect your phone with Gavial's Medicase! Coated with the finest carbon-fiber alloy.</p>
			<p>Price: 199 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Medicase (Green)">
    				<input type="hidden" name="product_price" value="199">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="3">
                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>	
  				</form>	

				</center>
			</div>
		</div>
	</div>
	<div id="modal4" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/phonecase2.png">
			</div>
			<div class = "modaldesc">
			<h3>Medicase (Black)</h3>
			<p>Protect your phone with Gavial's Medicase! Coated with the finest carbon-fiber alloy.</p>
			<p>Price: 199 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Medicase (Black)">
    				<input type="hidden" name="product_price" value="199">
					<input type="hidden" name="id" id="id" value="4">
    				<label for="quantity">Quantity:</label>
					

                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>		
				</center>
			</div>
		</div>
	</div>
	<div id="modal5" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/tsunhat1.png">
			</div>
			<div class = "modaldesc">
			<h3>Tsun Hat (Black)</h3>
			<p>Beat the summer heat with the Tsun Hat! This hat brings you style like no other.</p>
			<p>Price: 99 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Tsun Hat (Black)">
    				<input type="hidden" name="product_price" value="99">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="5">


                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>		
				</center>
			</div>
		</div>
	</div>
	<div id="modal6" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/tsunhat2.png">
			</div>
			<div class = "modaldesc">
			<h3>Tsun Hat (Black)</h3>
			<p>Beat the summer heat with the Tsun Hat! This hat brings you style like no other.</p>
			<p>Price: 99 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Tsun Hat (Black)">
    				<input type="hidden" name="product_price" value="99">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="6">


                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>			
				</center>
			</div>
		</div>
	</div>
	<div id="modal7" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/foal1.png">
			</div>
			<div class = "modaldesc">
			<h3>Foal (Gold)</h3>
			<p>Armed only with the finest beats! These headphones ensure long-lasting comfortability, high quality sound and other features.</p>
			<p>Price: 999 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Foal (Gold)">
    				<input type="hidden" name="product_price" value="999">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="7">


                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>			
			</div>
		</div>
	</div>
	<div id="modal8" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/foal2.png">
			</div>
			<div class = "modaldesc">
				<h3>Foal (Red)</h3>
				<p>Armed only with the finest beats! These headphones ensure long-lasting comfortability, high quality sound and other features.</p>
				<p>Price: 999 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Foal (Red)">
    				<input type="hidden" name="product_price" value="999">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="8">


                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>			
				</center>
			</div>
		</div>
	</div>
	<div id="modal9" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/texasshirt1.png">
			</div>
			<div class = "modaldesc">
				<h3>Omertosa Shirt (White)</h3>
				<p>High speed, Low drag - Texas the Omertosa is here. Exclusive T-shirt for the Grand Opening of Rhodes. At sale for only a limited time.</p>
				<p>Price: 799 PHP </p>
				<center>
					<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Omertosa Shirt (White)">
    				<input type="hidden" name="product_price" value="799">
    				<label for="quantity">Quantity:</label>
					<input type="hidden" name="id" id="id" value="9">


                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>			
				</center>
			</div>
		</div>
	</div>
	<div id="modal10" class="modal">
		<div class="modal-content">
			<div class ="modalimage">
				<img src = "materials/products/texasshirt2.png">
			</div>
			<div class = "modaldesc">
				<h3>Omertosa Shirt (Black)</h3>
				<p>High speed, Low drag - Texas the Omertosa is here. Exclusive T-shirt for the Grand Opening of Rhodes. At sale for only a limited time.</p>
				<p>Price: 799 PHP </p>
				<center>
				<form method="POST" action="">
    				<input type="hidden" name="product_name" value="Omertosa Shirt (Black)">
    				<input type="hidden" name="product_price" value="799">
					<input type="hidden" name="id" id="id" value="10">


    				<label for="quantity">Quantity:</label>
                    <input required min = "1" type="number" id="quantity" name="quantity">
    				<button class="btn btn-danger modal-close">Close</button>
					<button type = "submit" name='submit' id='submit' class= "btn btn-success add-to-cart">Add to Cart</button>
  				</form>				
				</center>
			</div>
		</div>
	</div>

	<div class = "tocheckout">
	<?php
			if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
				echo '<a href="checkout.php"> To Checkout </a>';
			} else {

			}
			?>


	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.modal-button').click(function() {
				var modalId = $(this).data('modal-target');
				$('#' + modalId).show();
			});

			$('.modal').click(function() {
				$(this).hide();
			});
			
			$('.modal-content').click(function(e) {
				e.stopPropagation();
			});
			
			$('.modal-close').click(function(e) {
				e.stopPropagation();
				$(this).closest('.modal').hide();
			});
			
		});
		
</script>

</body>
</html>