<?php
if (isset($_POST['submit'])){
$username=$_SESSION['username'];
$pname=$_POST['product_name'];
$quantity=$_POST['quantity'];
$pprice=$_POST['product_price'];
$id=$_POST['id'];
$total = intval($quantity)*intval($pprice);
$query = "INSERT INTO orderr(id,username, pname,price, quantity,total)
                       VALUES('$id','$username', '$pname','$pprice', '$quantity','$total')";
                       $result = mysqli_query($conn, $query);
                       if ($result) {
                        
                                              } else {
                           echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
                       }}

?>
     