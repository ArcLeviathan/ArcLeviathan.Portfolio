
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    include('mysql_connect.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pnum = $_POST['phonenumber'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
		$address= $_POST['address'];
		$checkQuery = "SELECT * FROM user WHERE username = '$username'";
        $checkResult = mysqli_query($conn, $checkQuery);
        if (mysqli_num_rows($checkResult) > 0) {
            echo '<script>alert("Username already exists. Please choose a different username.");</script>';
            exit();
        }

        $query = "INSERT INTO user(username, password, phone_number, email, fname, lname,address)
                VALUES('$username', SHA('$password'), '$pnum', '$email', '$fname', '$lname','$address')";

        $result = mysqli_query($conn, $query);
        if ($result) {
			header("Location: homepage.php");
            mysqli_close($conn);
            exit();
        } else {
            echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration | Rhodes </title>
	<style>
	body {
		background-image: url("materials/mansion.png");
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
	<script>


		
			function next1() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    if (username === '' || password === '') {
        alert('Please fill in the username and password fields.');
        return;
    }

    // AJAX request to check if the username already exists
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'check_username.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            if (response === 'duplicate') {
                alert('Username already exists. Please choose a different username.');
            } else {
                hide('Form1');
                show('Form2');
            }
        }
    };
    xhr.send('username=' + username);
}

function prev1() {
			hide('Form2')
			show('Form1')
		}

		
		function next2() {
	var pnum = document.getElementById('phonenumber').value;
    var email = document.getElementById('email').value;
    if (pnum === '' || email === '') {
        alert('Please fill in the phone number and email fields.');
        return; 
	
    }
	var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

			if (pattern.test(email)) {
			} else {
				alert("Invalid email address. Please enter a valid email.");
				return;
			}
    // AJAX request to check if the username already exists
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'check_username.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            if (response === 'duplicate') {
                alert('email already exists. Please choose a different email.');
            } else {
                hide('Form2');
                show('Form3');
            }
        }
    };
    xhr.send('email=' + email);
}
		
		function prev2() {
			hide('Form3')
			show('Form2')
		}
		
		function prev3() {
			hide('Form4')
			show('Form3')
		}
		
		function next3() {
			hide('Form3')
			show('Form4')
		}
		function hide(id) {
			var element = document.getElementById(id);
			element.style.display = "none";
		}
		function show(id) {
			var element = document.getElementById(id);
			element.style.display = "block";
		}
		
		function submitForm() {
	var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    if (fname === '' || fname === '') {
        alert('Please fill in your first name and last name fields.');
        return; 
    }
	else{

  if (confirm('Are you sure you want to submit?')) {
    alert('Form submitted successfully!');
	document.getElementById('registrationForm').submit();
	return true;
  }
  else {
	alert('Form submission canceled!');
	return false;
  }
}}

	</script>
</head>

<body>
	<nav>
    <div class="header2">
			<div class="logo">
				<a href="homepage.php"> <img src="materials/Rhodeslogo.png"> </a>
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
    <div class="registration">
        <div class="regholder">
			<div class = "regcontent1">
				<div class = "regimage">
					<img src="materials/invertedlogo.png">
				</div>
				<div class = "regmotto">
					<br>
					<h1>RHODES</h1>
					<p>"May I enjoy my life and practice my art
					Respected by all men and in all times"</p>
				</div>
			</div>
			<div class ="regcontent2">
			
			<!-- Start of Form -->
			<form method="POST" onsubmit="return submitForm()" id="registrationForm"> 
				<div class = "regform" id = "Form1">
				
					<div>
						<center><h2>User Registration</h2>
						</center>
						<label for="username" class="form-label" style = "margin-right: 80px;">Username</label>
						<input type="text" class="form-control" id="username" name="username"  placeholder="Username" required>  
					</div>
					<div>
					<br>
						<label for="password" class="form-label" style = "margin-right: 120px;">Password</label>
						<input type="password" class="form-control" id="password" name="password" minlength = "6" placeholder="Password" required>
					</div>
					<div class = "regbutton">
						<center>
							<input type="button" value="Next" class="btn btn-primary" id="nextButton" onclick ="next1()">
						</center>
					</div>
					<br>
					<div class="indicator">
							<center>
								<span class="indicator-dot active"><div class= "indicator-line"></div></span>
								<span class="indicator-dot"><div class= "indicator-line"></div></span>
								<span class="indicator-dot"><div class= "indicator-line"></div></span>
								<span class="indicator-dot"></span>
							</center>
						</div>
					<center>
					<br>
					<div>
						<p> By signing up, you agree to Rhodes' <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="terms.php">Terms of Service</a> 
						& <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="privacy.php">Privacy Policy</a> </p>
						Have an account? <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="Login.php">Login </a>
					</div>
					</center>
				</div>
				<div class = "regform" id = "Form2" style = "display: none;">
					<div>
						<center>
						<h2>User Registration</h2>
						</center>
						<label for="phonenumber" class="form-label" style = "margin-right: 80px;">Phone Number</label>
						<input type="number" class="form-control" id="phonenumber" name="phonenumber"  placeholder="Phone Number" maxnlength = "11" required>  
					</div>
					<div>
					<br>
						<label for="email" class="form-label" style = "margin-right: 120px;">Email</label>
						<input type="text" class="form-control" id="email" name="email"  placeholder="Email" required>
					</div>
					<div class = "regbutton">
						<center>
							<input type="button" value="Previous" class="btn btn-primary" onclick ="prev1()">
							<input type="button" value="Next" class="btn btn-primary"  onclick ="next2()">
						</center>
					</div>
					<br>
					<div class="indicator">
							<center>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot"><div class= "indicator-line"></div></span>
								<span class="indicator-dot"></span>
							</center>
						</div>
					<center>
					<br>
					<div>
						<p> By signing up, you agree to Rhodes' <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="terms.php">Terms of Service</a> 
						& <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="privacy.php">Privacy Policy</a> </p>
						Have an account? <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="Login.php">Login </a>
					</div>
					</center>
				</div>
				<div class = "regform" id = "Form3" style = "display: none;">
					<div>
						<center><h2>User Registration</h2>
						</center>
						<label for="fnamer" class="form-label" style = "margin-right: 80px;">First Name</label>
						<input type="text" class="form-control" id="fname" name="fname"  placeholder="First Name" required>  
					</div>
					<div>
					<br>
						<label for="lname" class="form-label" style = "margin-right: 120px;">Last Name</label>
						<input type="text" class="form-control" id="lname" name="lname"  placeholder="Last Name" required>
					</div>
					<div class = "regbutton">
						<center>
							<input type="button" value="Previous" class="btn btn-primary" onclick ="prev2()">
							<input type="button" value="Next" class="btn btn-primary"  onclick ="next3()">
						</center>
					</div>
					<br>
					<div class="indicator">
							<center>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot"></span>
							</center>
						</div>
					<center>
					<br>
					<div>
						<p> By signing up, you agree to Rhodes' <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="terms.php">Terms of Service</a> 
						& <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="privacy.php">Privacy Policy</a> </p>
						Have an account? <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="Login.php">Login </a>
					</div>
					</center>
				</div>
					<div class = "regform" id = "Form4" style = "display: none;">
					<div>
						<center><h2>User Registration</h2>
						</center>
						<label for="fnamer" class="form-label" style = "margin-right: 80px;">Complete Address</label>
						<input type="textarea" class="form-control" id="address" name="address"  placeholder="Address" required>  
					</div>
					<div class = "regbutton">
						<center>
							<input type="button" value="Back" class="btn btn-primary" onclick ="prev3()">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">
						</center>
					</div>
					<br>
					<div class="indicator">
							<center>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot active"><div class= "indicator-line-active"></div></span>
								<span class="indicator-dot active"></span>
							</center>
						</div>
					<center>
					<br>
					<div>
						<p> By signing up, you agree to Rhodes' <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="terms.php">Terms of Service</a> 
						& <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="privacy.php">Privacy Policy</a> </p>
						Have an account? <a class="link-light link-offset-2 link-underline-opacity-100 link-underline-opacity-25-hover" href="Login.php">Login </a>
					</div>
					</center>
				</div>
				<br><br><br><br><br>
				</form> 
				<!-- End of Form -->
				
			</div>
		</div>
		<br>
	</div>
</body>
</html>



