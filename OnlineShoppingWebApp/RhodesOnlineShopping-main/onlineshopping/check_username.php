<?php
include('mysql_connect.php');

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $checkQuery = "SELECT * FROM user WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        echo 'duplicate';
    } else {
        echo 'unique';
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $checkQuery = "SELECT * FROM user WHERE email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        echo 'duplicate';
    } else {
        echo 'unique';
    }
}
?>
