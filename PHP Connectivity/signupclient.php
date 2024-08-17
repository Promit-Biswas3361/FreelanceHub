<?php
session_start();
include 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $password = $conn->real_escape_string($_POST['password']);

    //Check existence of email id and username
    $query1 = "SELECT * FROM clients where email_id = '$email'";
    $result1 = $conn->query($query1);

    if($result1->num_rows > 0){
        $conn->close();
        header("Location: ../signup.php?error=1");
        exit();
    }

    $query2 = "SELECT * FROM clients where Username = '$name'";
    $result2 = $conn->query($query2);

    if($result2->num_rows > 0){
        $conn->close();
        header("Location: ../signup.php?error=2");
        exit();
    }
    
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
