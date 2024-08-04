<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Hire.css"/>
    <title>Hire</title>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <script src="../script.js" defer></script>
</head>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proff_id'])) {
    // Assuming the proff_id is passed from the previous page
    $proff_id = $_POST['proff_id'];
    
    // Adding proff_id to the session
    $_SESSION['proff_id'] = $proff_id;
}

?>
<body>
    <!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 -->
    <header class="header">
        <a target="_self" href="../main_page.php">
          <img src="..\images\logo.png" alt="Logo"/>
        </a>
        <div class="account">
          <a target="_self" href="../PHP Connectivity/account.php">
            <img src="..\images\account_icon.png"/>
          </a>
        </div>
      </header>
      
      <!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 -->
      <div class="container">
        <h2>Place Your Order</h2>
        <form action="order_placed.php" method="POST">
            <div>
                <label for="instructions">Instructions:</label><br>
                <textarea id="instructions" name="instructions" rows="4" cols="50"></textarea>
            </div>
            <div>
                <label for="due_date">Due Date:</label><br>
                <input type="text" id="due_date" name="due_date" placeholder="Select a due date...">
            </div>
            <div>
                <label for="payment_method">Payment Method:</label><br>
                <select id="payment_method" name="payment_method">
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Place Order" class="button">
            </div>
        </form>
    </div>
      
      <!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer -->
    
</body>
</html>