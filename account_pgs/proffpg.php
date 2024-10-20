<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'proff') {
    header("Location: ../login.php");
    exit();
}

include '../PHP Connectivity/connect.php';

$email = $_SESSION['email']; 
$query = "SELECT * FROM professionals WHERE email_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $client = $result->fetch_assoc();
    $name = $client['Username'];
    $phno = $client['mobile'];
    $city = $client['location'];
    $p_id = $client['proff_id'];
} 
$stmt->close();

$query2 = "SELECT domain_category, projects_worked_on, p.avg_rating
    from professional_skills p join domain d on p.domain_id=d.domain_id
    where proff_id= ?";

$stmt = $conn->prepare($query2);
$stmt->bind_param("i", $p_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $client = $result->fetch_assoc();
  $domain = $client['domain_category'];
  $proj = $client['projects_worked_on'];
  $rate = $client['avg_rating'];
} 
$stmt->close();

$query ="SELECT h.order_id,(SELECT d.domain_category FROM domain d WHERE h.domain_id = d.domain_id) AS domain_category,(SELECT c.Username FROM clients c WHERE c.client_id = h.client_id) AS client_username,
  h.date_of_hiring, h.due_date, h.pricing, (SELECT o.completion_status FROM orders o WHERE o.order_id = h.order_id) as completion_status
  FROM 
  hiring h
  WHERE h.proff_id = ?
  ORDER BY h.due_date, h.order_id ASC"; 

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $p_id);
$stmt->execute();
$result = $stmt->get_result();

$table_data = array();
if($result->num_rows>0){
  while($row = $result->fetch_assoc())
    $table_data[]=$row;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acc.css"/>
    <title>Account</title>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <script src="../script.js" defer></script>
</head>
<body>
    <!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 -->
    <header class="header">
        <a target="_self" href="../main_page.php">
          <img src="..\images\logo.png" alt="Logo"/>
        </a>
        <div class="search">
            <form action="../Domain_sites/SearchRes.php" method="post">
              <t id="cat_list">All Categories  &#x25BC;</t>
              <input type="text" name="search_query" placeholder="Search any Service..." />
              <button type="submit">.</button>
            </form>
      </div>
      <div class="account">
        <img id="account-icon" src="..\images\account_icon.png"/>
      </div>
      </header>
      <div class="dropdown-menu">
        <a target="form3" href="../Domain_sites/graphics.php">Graphics & Design</a>
        <a target="form5" href="../Domain_sites/program.php">Programming & Tech</a>
        <a target="form1" href="../Domain_sites/videoani.php">Video Animation</a>
        <a target="from6" href="../Domain_sites/digmark.php">Digital Marketing</a>
        <a target="form4" href="../Domain_sites/ai.php">Artificial Intelligence</a>
        <a target="form2" href="../Domain_sites/webdev.php">Website Design</a>
      </div>
      <div class="account-settings">
        <a target="_self" href="../PHP Connectivity/account.php">Account</a>
        <a target="_self" href="../PHP Connectivity/SignOut.php" onclick = "return confirmLogOut(event)">Logout</a>
      </div>
      <!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 -->
      <header2 class="header2">
        <div class="Choices">
          <a target="form3" href="../Domain_sites/graphics.php">Graphics & Design</a>
          <a target="form5" href="../Domain_sites/program.php">Programming & Tech</a>
          <a target="form1" href="../Domain_sites/videoani.php">Video & Animation</a>
          <a target="from6" href="../Domain_sites/digmark.php">Digital Marketing</a>
          <a target="form4" href="../Domain_sites/ai.php">Artificial Intelligence</a>
        </div>
      </header2>
      <!-- Content --><!-- Content --><!-- Content --><!-- Content --><!-- Content --><!-- Content --><!-- Content --><!-- Content -->
      <div class="hello">
        <h1>Welcome <?php echo $name; ?></h1>
        <div class="details">
          <h3>Personal Details</h3>
          <p><h4>Username: </h4> <?php echo $name; ?></p>
          <p><h4>Email: </h4> <?php echo $email; ?></p>
          <p><h4>Mobile: </h4> <?php echo $phno; ?></p>
          <p><h4>City: </h4> <?php echo $city; ?></p>
        </div>
        <div class="details">
          <h3>Domain Details</h3>
          <p><h4>Domain: </h4> <?php echo $domain; ?></p>
          <p><h4>Project Description: </h4> <?php echo $proj; ?></p>
          <p><h4>Rating: </h4> <?php echo $rate; ?></p>
        </div>
        <div class="details">
          <h3>Your Orders</h3>
          <?php if (empty($table_data)): ?>
              <p>No orders found.</p>
          <?php else: ?>
          <table>
              <tr>
                <th>Order ID</th>
                <th>Domain</th>
                <th>Client</th>
                <th>Date of Hiring</th>
                <th>Deadline Date</th>
                <th>Pricing</th>
                <th>Status</th>
              </tr>
              <?php foreach ($table_data as $row): ?>
                  <tr>
                      <td><?php echo $row['order_id']; ?></td>
                      <td><?php echo $row['domain_category']; ?></td>
                      <td><?php echo $row['client_username']; ?></td>
                      <td><?php echo $row['date_of_hiring']; ?></td>
                      <td><?php echo $row['due_date']; ?></td>
                      <td><?php echo $row['pricing']; ?></td>
                      <td class="<?php echo $row['completion_status'] === 'Completed' ? 'yes' : 'no'; ?>">
                        <?php echo $row['completion_status']; ?>
                      </td>
                  </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>

      </div>
      <!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p>FreelanceHub is your go-to platform for connecting talented freelancers with businesses seeking expertise across various fields. Our mission is to empower creativity and innovation by providing a user-friendly environment for project collaboration and management. Whether you're a freelancer looking to showcase your skills or a company in search of top-tier talent, FreelanceHub is dedicated to fostering meaningful connections and ensuring a secure, reliable experience for all users. Join us and discover endless opportunities to thrive in the freelance economy!</p>
            </div>
            <div class="col-md-4">
              <h3>Links</h3>
              <ul>
                <li><a href="../main_page.php">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3>Contact Us</h3>
              <p>Manipal Institue of Technology, Manipal, Karnataka</p>
              <p>Email: info@freelancinghub.com</p>
              <p>Phone: +123 456 789</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr>
              <p>&copy; 2024 FreelancingHub Ltd.</p>
              <p>All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>