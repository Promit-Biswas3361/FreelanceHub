<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FreelancingHub</title>
    <link rel="icon" href="images\logo.png" type="image/png">
    <link rel="stylesheet" href="main_page.css" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 --><!-- Header_1 -->
    <header class="header">
      <a target="_self" href="main_page.php">
        <img src="images\logo.png" alt="Logo"/>
      </a>
      <div class="search">
            <form action="Domain_sites\SearchRes.php" method="post">
              <t id="cat_list">All Categories  &#x25BC;</t>
              <input type="text" name="search_query" placeholder="Search any Service..." />
              <button type="submit">.</button>
            </form>
      </div>
      <div class="account">
        <img id="account-icon" src="images\account_icon.png"/>
      </div>
    </header>
    <div class="dropdown-menu">
      <a target="form3" href="Domain_sites\graphics.php">Graphics & Design</a>
      <a target="form 5" href="Domain_sites\program.php">Programming & Tech</a>
      <a target="form1" href="Domain_sites\videoani.php">Video Animation</a>
      <a target="from6" href="Domain_sites\digmark.php">Digital Marketing</a>
      <a target="form4" href="Domain_sites\ai.php">Artificial Intelligence</a>
      <a target="form2" href="Domain_sites\webdev.php">Website Design</a>
    </div>
    <div class="account-settings">
      <a target="_self" href="PHP Connectivity/account.php">Account</a>
      <a target="_self" href="PHP Connectivity/SignOut.php" onclick = "return confirmLogOut(event)">Logout</a>
    </div>
    <!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 --><!-- Header_2 -->
    <header2 class="header2">
      <div class="Choices">
        <a target="form3" href="Domain_sites\graphics.php">Graphics & Design</a>
        <a target="form 5" href="Domain_sites\program.php">Programming & Tech</a>
        <a target="form1" href="Domain_sites\videoani.php">Video & Animation</a>
        <a target="from6" href="Domain_sites\digmark.php">Digital Marketing</a>
        <a target="form4" href="Domain_sites\ai.php">Artificial Intelligence</a>
      </div>
    </header2>
    <!-- Slideshow --><!-- Slideshow --><!-- Slideshow --><!-- Slideshow --><!-- Slideshow --><!-- Slideshow --><!-- Slideshow -->
    <section class="slider_container">
      <section class="slider">
        <div class="slide one">
          <img
            src="images\slider-1.png"
            alt="Video Editing"
          />
          <span class="caption">Video Editing</span>
        </div>
        <div class="slide two">
          <img
            src="images\slider-2.jpg"
            alt="Artificial Intelligence"
          />
          <span class="caption">Artificial Intelligence</span>
        </div>
        <div class="slide three">
          <img
            src="images\slider-3.jpg"
            alt="Digital Marketing"
          />
          <span class="caption">Digital Marketing</span>
        </div>
        <div class="slide four">
          <img
            src="images\slider-4.jpg"
            alt="UI/UX"
          />
          <span class="caption">UI/UX</span>
        </div>
        <div class="slide four">
          <img
            src="images\slider-5.png"
            alt="Web Dev"
          />
          <span class="caption">Website Design</span>
        </div>
      </section>
    </section>
    <!-- Body --><!-- Body --><!-- Body --><!-- Body --><!-- Body --><!-- Body --><!-- Body --><!-- Body --><!-- Body --><!-- Body -->
    <div class="tagline">
      <div class="text_div1">
        <h2>Achieving your goals</h2>
        <h2>has never been more</h2>
        <h2>effortless</h2>
        <p>
          <img
            src="images\tick-2.jpg"
            alt="Bullet"
          />
          <t>Get matched with expert Freelancers in minutes</t>
        </p>
        <p>
          <img
            src="images\tick-2.jpg"
            alt="Bullet"
          />
          <t>Dedicated 24/7 customer service team</t>
        </p>
        <p>
          <img
            src="images\tick-2.jpg"
            alt="Bullet"
          />
          <t>Get quality work done quickly</t>
        </p>
        <p>
          <img
            src="images\tick-2.jpg"
            alt="Bullet"
          />
          <t>Get right services at budget friendly price</t>
        </p>
        <p>
          <img
            src="images\tick-2.jpg"
            alt="Bullet"
          />
          <t>Money back guarantee and anti-fraud protection</t>
        </p>
      </div>
      <div class="side_div">
        <img
          id="side_pic"
          src="images\picture.webp"
          alt=""
        />
      </div>
    </div>
    <div class="content">
      <h1>Logos, Websites, Product Designing & Much More!</h1>
      <t>From logos that define the very roots of a brand's success to products that speak of versatile yet engaging personalities, if you need a design, rest assured, we've got you covered.</t><br>
    </div>
    <div class="popular_service">
      <h1>Popular Services</h1>
      <div class="card-container">
          <div class="cards">
            <a target="frame1" href="Domain_sites\videoani.php"><!-- video animation -->
              <img src="images\service1.webp"/>
              <span class="card-caption">Video & Animation</span>
            </a>
          </div>
          <div class="cards">
            <a target="frame2" href="Domain_sites\webdev.php"> <!-- web dev -->
              <img src="images\service2.webp"/>
              <span class="card-caption">Website Design</span>
            </a>
          </div>
          <div class="cards">
            <a target="frame3" href="Domain_sites\graphics.php"><!-- graphics design -->
              <img src="images\service3.webp"/>
              <span class="card-caption">Graphics & Design</span>
            </a>
          </div>
          <div class="cards">
            <a target="frame4" href="Domain_sites\ai.php"> <!-- AI -->
              <img src="images\service4.webp"/>
              <span class="card-caption">Artificial Intelligence</span>
            </a>
          </div>
          <div class="cards">
            <a target="frame5" href="Domain_sites\program.php"> <!-- programming and tech -->
              <img src="images\service5.webp"/>
              <span class="card-caption">Programming & Tech</span>
            </a>
          </div>
          <div class="cards">
            <a target="frame6" href="Domain_sites\digmark.php"><!-- digital marketing -->
              <img src="images\service6.webp"/>
              <span class="card-caption">Digital Marketing</span>
            </a>
          </div>
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
              <li><a href="main_page.php">Home</a></li>
              <li><a href="#">About Us</a></li>
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
