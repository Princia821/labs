<?php

require('../settings/db_connect.php');

class customer_class extends Connection{

	function addCustomer_cls($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role){

		$sql = "INSERT INTO `customer`( `customer_name`, `customer_email`, `customer_pass`, 
		`customer_country`, `customer_city`, `customer_contact`, `user_role`) 
        VALUES ('$cust_name','$cust_email','$cust_password','$cust_country','$cust_city','$cust_contact','$role')"; 

		return $this->query($sql); 

	}

	function delete_one_customer_cls($id){
		
		$sql = "DELETE FROM `customer` WHERE `customer_id`='$id'";

		return $this->query($sql); 
	}

	function update_one_customer_cls($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role){ 
		

		$sql = "UPDATE `customer` SET `customer_name`='$cust_name',`customer_email`='$cust_email',`customer_pass`='$cust_password',
		`customer_country`='$cust_country',`customer_city`='$cust_city',`customer_contact`='$cust_contact' WHERE `customer_id`='$id'";

		return $this->query($sql); 

	}

	function select_all_customers_cls(){
		
		$sql = "SELECT * FROM `customer`";

		return $this->fetch($sql);
	}

	function select_one_customer_cls($cust_email){
		
		$sql = "SELECT * FROM `customer` WHERE `customer_email`='$cust_email'";

		return $this->fetchOne($sql);
	}

}

?>