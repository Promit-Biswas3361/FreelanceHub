<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domain.css"/>
    <title>Digital  Marketing</title>
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
        <form action="SearchRes.php" method="post">
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
        <a target="form3" href="graphics.php">Graphics & Design</a>
        <a target="form 5" href="program.php">Programming & Tech</a>
        <a target="form1" href="videoani.php">Video Animation</a>
        <a target="from6" href="digmark.php">Digital Marketing</a>
        <a target="form4" href="ai.php">Artificial Intelligence</a>
        <a target="form2" href="webdev.php">Website Design</a>
      </div>
      <div class="account-settings">
        <a target="_self" href="../PHP Connectivity/account.php">Account</a>
        <a target="_self" href="../PHP Connectivity/SignOut.php" onclick = "return confirmLogOut(event)">Logout</a>
      </div>
      <!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 -->
      <header2 class="header2">
        <div class="Choices">
          <a target="form3" href="graphics.php">Graphics & Design</a>
          <a target="form 5" href="program.php">Programming & Tech</a>
          <a target="form1" href="videoani.php">Video & Animation</a>
          <a target="from6" href="digmark.php">Digital Marketing</a>
          <a target="form4" href="ai.php">Artificial Intelligence</a>
        </div>
      </header2>
      <?php
      session_start();
        include '../PHP Connectivity/connect.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $search_query = $_POST['search_query'];
        }
          $select_query = "select * from professional_skills natural join professionals where projects_worked_on like '%$search_query%' OR username like '%$search_query%' and availability>0";
          $result_query = mysqli_query($conn, $select_query);
          while ($row = mysqli_fetch_assoc($result_query)) {
              echo ' <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <img src=' . $row['profile_pic'] . ' alt="profile_pic"/>
                        <h2>' . $row['Username'] . '</h2>
                          <p>Bio : ' . $row['projects_worked_on'] . '</p>
                          <p>Rating :' . $row['avg_rating'] . '</p>
                        </div>
                        <div class="flip-card-back card ">
                        <h1>Hire now for ₹1000!</h1>
                        <form action="Hiring.php" method="post">
                          <input type="hidden" name="proff_id" value="' . $row['proff_id'] . '">
                          <button type="submit" class="hire-button">Hire</button>
                        </form> 
                        </div>
                      </div>
                    </div>';
                     }
          ?>
      <!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer --><!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut cupiditate modi sunt excepturi fugit labore.</p>
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