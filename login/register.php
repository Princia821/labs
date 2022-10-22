<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php include('../controllers/customer_controller.php') ?>

<form action="./login/login.php" method="post"> 

  <div class="container">

    <?php if(isset($error) && is_array && count($errors > 0 )):?>
        <div class = "error"> 
            <?php foreach($errors as $error):?>
            <?php $errors ?> <br>
            <?php endforeach;?>
        </div>

    <?php endif; ?> 

    <h1>Register</h1>
    <p>Please fill in this form to register as a customer.</p>
    <hr>

    <label for="name"><b>Full name</b></label>
    <input type="text" placeholder="Enter your name" name="full name" id="fname" value="<?php $fullname?>" required>

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

<?php 

include_once '/./controllers/form_controller.php';
                $conn = new mysqli(HOST,USER,PASS,DB_NAME);

               if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['register'])){
	$data['customer_namme'] = $POST['full name'];
  $data['customer_email'] = $POST['email'];
  $data['customer_password'] = $POST['password'];
  $data['customer_country'] = $POST['country'];
  $data['customer_city'] = $POST['city'];
  $data['customer_contact'] = $POST['contact number']; 

		$values="INSERT INTO customer( Name,username,email,password) VALUES ('email','password','country','city', 'contact number')";

	$insert=mysqli_query($conn,$values);
	if(!$insert){
                echo mysqli_error($conn);
                 }
                 
                 else{
					header("location: ./Login.php");
                 } 	
	}


?>

</body>
</html>

