<?php

// connect to the customer class
require_once('../classes/customer_class.php');

//add, update, delete methods

//add customer method
function addCustomer_ctr($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact)
{
    //create an instance of the Product class
    $class_inst = new customer_class();

    // call the method from the class
    return $class_inst->addCustomer_cls($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact);

}

function updateCustomer_ctr($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact)
{
    // create an instance of the Product class
    $class_inst = new customer_class();

    // call the method from the class
    return $class_inst->updateCustomer_cls($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact);
}

function deleteCustomer_ctr($id)
{
    // create an instance of the Product class
    $class_instance = new customer_class();

    // call the method from the class
    return $class_instance->deleteCustomer_cls($id);
}

function customer_login_ctr($cust_email, $cust_password)
{
    $class_inst = new customer_class();

    return $class_inst->customer_login_cls($cust_email,$cust_password);
}

?>
