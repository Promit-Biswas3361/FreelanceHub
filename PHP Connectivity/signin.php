<?php
session_start();
include 'connect.php';

$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$client_query = "SELECT * FROM clients WHERE email_id='$email' AND password='$password'";
$client_result = $conn->query($client_query);

$freelancer_query = "SELECT * FROM professionals WHERE email_id='$email' AND password='$password'";
$freelancer_result = $conn->query($freelancer_query);

if ($client_result->num_rows > 0) {
    $_SESSION['user_type'] = 'client';
    $_SESSION['email'] = $email;
    header("Location: ../main_page.php");
    exit();
} 

elseif ($freelancer_result->num_rows > 0) {
    $_SESSION['user_type'] = 'proff';
    $_SESSION['email'] = $email;
    header("Location: ../main_page.php");
    exit(); 
} 

else {
    $conn->close();
    header("Location: ../login.php?error=1");
    exit();
}
?>
