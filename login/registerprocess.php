<?php if(count($_POST) > 0){
        
        require "customer_class.php";

         $customer = new customer();
         $errors = $customer->signup($_POST);
 
         extract($_POST);
     
     }

     ?>

     