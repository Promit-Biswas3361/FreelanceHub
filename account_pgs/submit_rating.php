<?php
session_start();
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{   $order_id=$_SESSION['order_id'];
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';
    $sql2 = "update orders set rating = $rating where order_id=$order_id";
    if (!mysqli_query($conn, $sql2)) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    header("Location:clientpg.php");
    exit(); 
}
?>