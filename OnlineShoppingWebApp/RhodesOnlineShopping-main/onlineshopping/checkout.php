<?php
session_start();
include('mysql_connect.php');
$sql = "SELECT username, pname, quantity, total FROM orderr";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  }
} else {
  echo "0 results";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout | Rhodes</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Retrieve the product_name and product_price from the request
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_quantity = $_POST['quantity'];

	
}

 ?>

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
				<a class = "btn" href = "productspage.php">All Products</a>
			</div>
		</div>
	</div>
	</nav>
	<div class= "pagetaker">
	</div>
	<div class = "checkout-pending">
		<?php echo '<center><h2>'.$_SESSION['username'].'\'s Pending Orders</h2></center>'?>
			<table>
				<tr>
					<th>Item Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
				</tr>
				
				<?php
$sum = 0;
$username = $_SESSION['username'];
$sqlIds = "SELECT id FROM orderr WHERE username='$username'";
$resultIds = $conn->query($sqlIds);

if ($resultIds->num_rows > 0) {
    $ids = array();
    while ($rowId = $resultIds->fetch_assoc()) {
        $ids[] = $rowId['id'];
    }
    $idsString = implode(',', $ids);
    $sql = "SELECT o.username, o.pname, o.price, o.quantity, o.total, i.description
            FROM orderr o
            JOIN images i ON o.id = i.id
            WHERE o.id IN ($idsString)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo '<td>' . ' <img src="' . $row['description'] . '">' . '<br>' . $row['pname'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['quantity'] . '</td>';
            echo '<td>' . $row['total'] . ' Php' . '</td>';
            echo "</tr>";
            echo "<br>";
            $sum = $sum + $row['total'];
        }
    }

		else {
		  echo "0 results";
		}
		}
	
				?>
				</tr>
			</table>
		<br>
		<center><h2>Your Final Price:<?php echo " Php ".$sum. ".00";?></h2></center>
		<center><button class="btn btn-success modal-button" data-modal-target="modal1">Complete Order</button></center>
	</div>
	<div id="modal1" class="modal">
		<div class="modal-content">
				<center>
				<h3>Your purchase has been completed!</h3>
					<a href = "homepage.php" class = "btn btn-success">Back to Home</a>
				</center>
		</div>
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
