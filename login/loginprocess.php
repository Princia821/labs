<?php
            
            //connect to customer controller
            include ('../controllers/customer_controller.php'); 

            if(isset($_POST['signIn']))
            {
                $cust_email = $_POST['customer_email'];
                $cust_password = $_POST['customer_password'];

                //call controller

                $success = customer_login_ctr($cust_email, $cust_password);

                if($success)
                {
                    echo "welcome";
                }
                else{
                    echo "failed";
                }
            }
            
        
               
            ?>

            