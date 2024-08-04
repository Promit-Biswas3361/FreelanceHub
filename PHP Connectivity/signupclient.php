<?php
session_start();
include 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $password = $conn->real_escape_string($_POST['password']);

    // Insert data into database
    $sql = "INSERT INTO clients (Username, email_id,password,mobile) VALUES ('$name', '$email','$password','$mobile')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_type'] = 'client';
        $_SESSION['email'] = $email;
        header("Location: ../main_page.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
exit();
?>
