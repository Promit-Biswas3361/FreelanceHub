<?php
session_start(); 
include '../PHP Connectivity/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instructions = isset($_POST['instructions']) ? $_POST['instructions'] : '';
    $due_date = isset($_POST['due_date']) ? $_POST['due_date'] : '';
    $payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';
    $due_date_converted = date("Y-m-d", strtotime($due_date));
    $proff_id = $_SESSION['proff_id'];
    $email = $_SESSION['email'];

    $sql1 = "SELECT client_id FROM clients WHERE email_id='$email'";
    $result_query = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result_query);
    $client_id = $row['client_id'];

    $sql2 = "SELECT domain_id FROM professional_skills WHERE proff_id=$proff_id";
    $result_query = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result_query);
    $domain_id = $row['domain_id'];

    $sql = "INSERT INTO hiring (client_id, proff_id, domain_id, date_of_hiring, due_date) VALUES ($client_id, $proff_id, $domain_id, SYSDATE(), '$due_date_converted')";
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    $sqlm = "INSERT INTO messages (client_id, proff_id, message) VALUES ($client_id, $proff_id, '$instructions')";
    if (!mysqli_query($conn, $sqlm)) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    $sqlgeto = "SELECT order_id FROM hiring WHERE proff_id=$proff_id AND client_id = $client_id";
    $result_query = mysqli_query($conn, $sqlgeto);
    $row = mysqli_fetch_assoc($result_query);
    $order_id = $row['order_id'];

    $sqlp = "INSERT INTO payments (order_id, client_id, proff_id, mode_of_payment) VALUES ($order_id, $client_id, $proff_id, '$payment_method')";
    if (!mysqli_query($conn, $sqlp)) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    header("Location: ../main_page.php");
    exit(); 
} else {
    echo "Error: Couldn't process order <br>" . $conn->error;
    header("Location: ../main_page.php");
    exit(); 
}
?>
