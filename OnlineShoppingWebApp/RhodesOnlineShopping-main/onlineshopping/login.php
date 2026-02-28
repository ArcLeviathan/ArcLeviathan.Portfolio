<!DOCTYPE html>
<html>
<head>
	<title>Login | Rhodes</title>
	<style>
	body {
		background-image: url("materials/corridor.png");
		background-repeat: repeat;
		background-size: cover;
	}
	</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css"> 
</head>
<body>
	<nav>
	<div class = "header2">
			<div class="logo">
				<a href="homepage.php"> <img src="materials/Rhodeslogo.png"> </a></li>
			</div>
			<div class="navbar">
				<div class ="input-group">
					<div class = "links">
						<li style = "border-right: 1px solid white;"><a class = "btn" href="homepage.php">Home</a></li>
						<li style = "border-right: 1px solid white; margin-left: 1px;"><a class = "btn" href="aboutus.php">About Us</a></li>
						<li style = "margin-left: 1px;"><a class = "btn" href = "productspage.php">All Products</a></li>
					</div>
				</div>
			</div>
	</div>
	</nav>
<div class="container">
    <div class="login">
	<center>
		<form method="POST">
		<h3>User Login</h3>
		<br>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label" style = "margin-right: 85px;">Username/Phone Number</label>
			<input type="text" class="form-control" id="login" name="username" required style="width:50%;">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label" style = "margin-right: 200px;">Password</label>
			<input type="password" class="form-control" id="password" name="password" required style="width:50%;">
		</div>
			<button type="submit" class="btn" style = "border: 1px solid white;" name="login">Log in</button>
		</form>
		<br>
		<p>No account yet? <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="registration.php">Register here.</a></p>
	</center>
	</div>
</div>
</body>
</html>

<?php
session_start();
include('mysql_connect.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = SHA('$password')";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Authentication successful, set session variables
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $row['username'];

        // Redirect to homepage or desired page
        header("Location: homepage.php");
        exit();
    } else {
        echo '<script>alert("Invalid username or password. Please try again.");</script>';
    }
    mysqli_close($conn);
}
?>
