<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link a rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php include('../controllers/customer_controller.php') ?>

<form action="registerprocess.php" method="post"> 

  <div class="container">

    <h1>Register</h1>
    <p>Please fill in this form to register as a customer.</p>
    <hr>

    <label for="name"><b>Full name</b></label>
    <input type="text" placeholder="Enter your name" name="fullname" id="fname" value="<?php $fullname?>" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php $email?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php $password?>" required>

    <label for="country"><b>Country</b></label>
    <input type="text" placeholder="Enter your country" name="country" id="country" value="<?php $country?>" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter your city" name="city" id="city" value="<?php $city?>" required>

    <label for="email"><b>Contact</b></label>
    <input type="text" placeholder="Enter your contact" name="contact" id="contact" value="<?php $contact?>" required>


    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
   

  </div>
  
</form>

</body>
</html>

