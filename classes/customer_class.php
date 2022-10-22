<?php

require('./database.php');

class customer{

// register customer in the databse only if there are no errors
       public function customer(){

            $DB = new Database();
            $data = array();
            $data['email'] = $POST['email'];
       
            $query = "select * from customer where email = :email limit 1";
            $results = $DB->read($query,$data);
       
            if(!$results){
                $this->error[] = "that email is already in use, please register with a different email";
            }

            if(count($this->errors) == 0){

            $query = "insert into customer (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact) values (:full name, :email, :password, :country, :city, :contact number)";

            $data = array();
            $data['customer_namme'] = $POST['full name'];
            $data['customer_email'] = $POST['email'];
            $data['customer_password'] = $POST['password'];
            $data['customer_country'] = $POST['country'];
            $data['customer_city'] = $POST['city'];
            $data['customer_contact'] = $POST['contact number'];


            $results = $DB->write($query, $data);
            if(!$results){
                $this->error[] = "you can not be registered right now, try again later";
            }
            
        }

        return $this -> errors;

    }

}

?>
