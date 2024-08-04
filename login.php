<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login-FreelancingHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="login.css" />
    <link
      rel="icon"
      href="images\logo.png"
      type="image/png"
    />
  </head>
  <body>
    <!--ring div starts here-->
    <div class="ring">
      <i style="--clr: #00ff0a"></i>
      <i style="--clr: #ff0057"></i>
      <i style="--clr: #fffd44"></i>
      <div class="login">
        <h2>Login</h2>
        <form action="PHP Connectivity/signin.php" method="post">
          <div class="inputBx">
            <input type="email" required placeholder="Email-id" name="email" />
          </div>
          <div class="inputBx">
            <input type="password" required placeholder="Password" name="password"/>
          </div>
          <div class="inputBx">
            <input type="submit" value="Sign in"/>
          </div>
        </form>
        <?php 
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<script>alert('Incorrect email-id/password. Please try again.');</script>";
        }
        ?>
        <div class="links">
          <a href="forgot_pass.php">Forgot Password?</a>
          <a href="user.php">Signup</a>
        </div>
      </div>
    </div>
    <!--ring div ends here-->
  </body>
</html>
