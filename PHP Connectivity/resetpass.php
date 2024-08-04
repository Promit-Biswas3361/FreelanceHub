<?php
include 'connect.php';

$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$client_query = "SELECT * FROM clients WHERE email_id='$email'";
$client_result = $conn->query($client_query);

$freelancer_query = "SELECT * FROM professionals WHERE email_id='$email'";
$freelancer_result = $conn->query($freelancer_query);

if ($client_result->num_rows > 0) {
    $sql = "UPDATE clients SET password='$password' WHERE email_id='$email'";
    $conn->query($sql);
    header("Location: ../login.php");
    exit();
} 

elseif ($freelancer_result->num_rows > 0) {
    $sql = "UPDATE professionals SET password='$password' WHERE email_id='$email'";
    $conn->query($sql);
    header("Location: ../login.php");
    exit(); 
} 

else {
    $conn->close();
    header("Location: ../forgot_pass.php?error=1");
    exit();
}
?>
