<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sign Up-FreelancingHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="signup.css" />
    <link rel="icon" href="images/logo.png" type="image/png">
  </head>
  <body>
    <!--ring div starts here-->
    <div class="ring">
      <i style="--clr: #00ff0a"></i>
      <i style="--clr: #ff0057"></i>
      <i style="--clr: #fffd44"></i>
      <div class="SignUp">
        <h2>Sign Up</h2>
        <form action="PHP Connectivity/signupclient.php" method="post">
        <div class="inputBx">
            <input type="text" required placeholder="Username" name="name" />
        </div>
        <div class="inputBx">
          <input type="email" required placeholder="Email-id" name="email"/>
        </div>
        <div class="inputBx">
            <input type="tel" required pattern="[0-9]{10}" placeholder="Mobile" name="mobile"/>
        </div>
        <div class="inputBx">
          <input type="password" required placeholder="Password" name="password"/>
        </div>
        <div class="inputBx">
            <input type="submit" value="Create Account" />
        </div>
    </form>
        <div class="links">
          <t>Already have an account?</t>
          <a target="_self" href="login.php">Login</a>
        </div>
      </div>
    </div>
    <!--ring div ends here-->
    <?php 
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<script>
              window.onload = function(){
                alert('Email-id already registered. Kindly login');
              }
            </script>";
        }
        else if (isset($_GET['error']) && $_GET['error'] == 2){
          echo "<script>
            window.onload = function(){
              alert('Please choose a different Username');
            }
          </script>";
        }
    ?>
  </body>
</html>
