<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="forgot_pass.css" />
    <link
      rel="icon"
      href="images\logo.png"
      type="image/png"
    />
    <script src="script2.js" defer></script>
  </head>
  <body>
    <!--ring div starts here-->
    <div class="ring">
      <i style="--clr: #00ff0a"></i>
      <i style="--clr: #ff0057"></i>
      <i style="--clr: #fffd44"></i>
      <div class="login">
        <h2>Reset Password</h2>
        <form action="PHP Connectivity/resetpass.php" method="post" onsubmit="return validatePassword() && confirmReset()">
          <div class="inputBx">
            <input type="email" required placeholder="Email-id" name="email"/>
          </div>
          <div class="inputBx">
            <input id="newpass" type="password" required placeholder="New Password" name="password"/>
          </div>
          <div class="inputBx">
            <input id="confpass" type="password" required placeholder="Confirm Password" />
          </div>
          <div class="inputBx">
            <input type="submit" value="Submit"/>
          </div>
        </form>
        <?php 
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<script>alert('No records found. Please try again.');</script>";
        }
        ?>
      </div>
    </div>
    <!--ring div ends here-->
  </body>
</html>
