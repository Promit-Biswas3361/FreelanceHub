<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Seller</title>
    <link
      rel="icon"
      href="images\logo.png"
      type="image/png"
    />
    <link rel="stylesheet" href="freelancer_form.css"/>
</head>
<body>
    <form action="PHP Connectivity/signupprof.php" method="post"> 
    <div class="form_container">
        <header class="form_header">
            <div class="squares">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="rectangles">              
            </div>
        </header>
        <div class="form-format">
            <div class="colors">
                <div id="cream"></div>
                <div id="yellow"></div>
                <div id="dark-yellow"></div>
                <div id="orange"></div>
                <img src="images\logo.png"/>
            </div>
            <h1>BECOME A SELLER</h1>
            <h3>PERSONAL INFORMATION</h3>
            <div class="fields">
                <t>Username*</t>
                <input type="text" required placeholder="Username" name="name"/>
            </div>
            <div class="fields">
                <t>Mobile*</t>
                <input type="tel" required pattern="[0-9]{10}" placeholder="Mobile" name="mobile"/>
            </div>
            <div class="fields">
                <t>Email*</t>
                <input type="email" required placeholder="you@yourdomain.com" name="email"/>
            </div>
            <div class="fields">
                <t>Location</t>
                <input type="text" placeholder="Enter your city" name="address"/>
            </div>
            <div class="fields">
                <t>Aadhar No.*</t>
                <input type="tel" required pattern="[0-9]{12}" placeholder="Aadhar No." name="aadhar"/>
            </div>
            <h3>PROFESSIONAL INFORMATION</h3>
            <div class="fields">
                <t>Skills*</t><p></p>
                <input list="domain" required name="domain"/>
                <datalist id="domain">
                    <option value="Artificial Intelligence" />
                    <option value="Digital Marketing" />
                    <option value="Graphics & Design" />
                    <option value="Programming & Tech" />
                    <option value="Video Animation" />
                    <option value="Website Design" />
                </datalist>
            </div>
            <div class="fields">
                <t>Previous Projects</t>
                <input type="text" placeholder="Describe your work" name="work"/>
            </div>
            <div class="fields">
                <t>Password*</t>
                <input type="password" required placeholder="Password" name="password"/>
            </div>
            <input type="submit"><br>
        </div>
    </div>
    </form>
</body>
</html>