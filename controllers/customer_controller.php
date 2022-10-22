<?php

// make controller aware of the exsiting class
require('../classes/customer_class.php');

//add, edit, delete methods

//add customer method
function addCustomer(){

    //create an instance of the class
    $add_cust = new customer($data['c_name'], $data['c_email'], $data['c_password'], $data['c_country'], $data['c_city'], $data['c_contact']);

    return $add_cust->addCustomer($data['c_name'], $data['c_email'], $data['c_password'], $data['c_country'], $data['c_city'], $data['c_contact']); 

}

//edit customer method
function editCustomer($data){
  
}

//delete customer method
function deleteCustomer($data){
  
}

?>


