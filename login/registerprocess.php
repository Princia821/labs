<?php
include('../controllers/customer_controller.php');

$cust_name  = $_POST['fullname'];
$cust_email = $_POST['email'];
$cust_password = $_POST['psw'];
$cust_country = $_POST['country'];
$cust_city = $_POST['city'];
$cust_contact = $_POST['contact'];

$success = addCustomer_ctr($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact);

if ($success) {
    echo "hi, welcomee";
}
else{
    echo "failed";
}

?>

     