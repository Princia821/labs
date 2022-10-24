<?php

//connect to database class
include('../settings/db_class.php');

class customer_class extends db_connection
{

//add, edit, delete functions

            // add a customer 
    function addCustomer_cls($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact){
        // write the sql
        $sql = "INSERT INTO `customer`( `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`) 
        VALUES ('$cust_name','$cust_email','$cust_password','$cust_country','$cust_city','$cust_contact')";
    
        //execute the sql
        return $this->db_query($sql); 
    }

    // update a customer 
    function UpdateCustomer_cls($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact){
        // write the sql
        $sql = "UPDATE `customer` SET `customer_name`='$cust_name',`customer_email`='$cust_email',`customer_pass`='$cust_password',`customer_country`='$cust_country',`customer_city`='$cust_city',`customer_contact`='$cust_contact' WHERE `pid`='$id'";

        //execute the sql
        return $this->db_query($sql); 
    }

    // delete a customer 
    function deleteCustomer_cls($cust_name, $cust_email, $cust_password, $cust_country, $cust_city,  $cust_contact){
        // write the sql
        $sql = "DELETE FROM `customer` WHERE `pid`='$id'";
    
        //execute the sql
        return $this->db_query($sql); 
    }

     function customer_login_cls($cust_email, $cust_password)
    {
        $sql = "SELECT * FROM `customer` WHERE customer_email = '$cust_email' AND customer_pass = '$cust_password' ";

        $hm=$this->db_fetch_all($sql); 

        $count =$this->db_count();
        
        if($count)
        {
            return true;
        }
        else {
            return false;
        }

    }   
    
}
?>

