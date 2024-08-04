<?php
session_start();

if (isset($_SESSION['user_type'])) {
    $user_type = $_SESSION['user_type'];
    if ($user_type === 'client') {
        header("Location: ../account_pgs/clientpg.php");
        exit();
    } 
    elseif ($user_type === 'proff') {
        header("Location: ../account_pgs/proffpg.php");
        exit();
    } 
    else 
        echo "Invalid user type.";
} 
else {
    header("Location: login.php");
    exit();
}
?>
