<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Rhodes</title>
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
			<a href="#"><img src="materials/Rhodeslogo.png"></a>
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
	<center>
	<div class="slideshow-container">

	<!-- Full-width images with number and caption text -->
	<div class="mySlides fade">
		<a href = "productspage.php"><img src="materials/banners/illium.png" style="width:100%"></a>
	</div>

	<div class="mySlides fade">
		<a href = "productspage.php#phonecase"><img src="materials/banners/medicase.png" style="width:100%"></a>
	</div>

	<div class="mySlides fade">
		<a href = "productspage.php#hat"><img src="materials/banners/tsunhat.png" style="width:100%"></a>
	</div>
	
	<div class="mySlides fade">
		<a href = "productspage.php#headphone"><img src="materials/banners/foal.png" style="width:100%"></a>
	</div>
	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
	
	<div style="text-align:center;">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
	</div>
	
	<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active"; // Change image every 2 seconds
		}
		setInterval(plusSlides, 5000, 1);
	</script>
	
</div>
	</center>
<br>
	<center>
	<div class ="content">
		<h1>Shop hassle-free with Rhodes!</h1>
		<br><hr>
		<h2>GRAND OPENING SALE!</h2>
		<img src = "materials/grandopening.png">
		<br>
		<br>
		<div class = "grandsale">
			<br>
			<img src = "materials/products/texasshirt1.png">
			<img src = "materials/products/texasshirt2.png">
			<h2>Omertosa Shirt</h2>
		</div>
		<hr>
		<br>
		<h1>Our Other Products!</h1>
		<div class = "homepagephotos">
			<img src = "materials/products/illiumbottle1.png">
			<img src = "materials/products/foal1.png">
			<img src = "materials/products/tsunhat1.png">
			<img src = "materials/products/phonecase1.png">
		</div>
		<br>
		<a class = "btn btn-success" href = "productspage.php">SHOP NOW!</a>
		<br>
		<br>
		<p>Our online store offers valuable apparel and products!</p>
		<p>Stay tuned for more upcoming products!</p>
	</div>
	<footer>
	<br>
	<div class = "foot">
	<br>
		<p>&copy;Rhodes 2023</p>
		<p>All rights reserved</p>
	<br>
	</div>
	</footer>
	</center>
</body>
</head>
</html>

