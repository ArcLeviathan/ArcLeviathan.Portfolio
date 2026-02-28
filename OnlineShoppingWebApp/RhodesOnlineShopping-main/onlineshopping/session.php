<?php
session_start();

// Check if the user is not authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
   header("Location: login.php"); // Redirect to the login page if not authenticated
   exit();
}
?>
