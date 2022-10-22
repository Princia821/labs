<?php
            
            //connect to customer controller
            require ('./controllers/customer_controller.php'); 
            
            $conn = new mysqli(HOST,USER,PASS,DB_NAME);
            
                if ($conn->connect_error) die($conn->connect_error);
                
            
            if(isset($_POST['signIn'])){
            
            
                $data['customer_email'] = $POST['email'];
                $data['customer_password'] = $POST['password'];
            
                $sql = "SELECT * FROM 'customer'where email = 'customer_email' limit 1";
            
                $result = mysqli_query($conn, $sql);
                if ($result){
                    if ($result && mysqli_num_rows($result)> 0){
                        $data = mysqli_fetch_ASSOC($result);
                        if ( $data ['customer_password'] === $POST['password'] ){
            
                            echo "logged in successfully";
                        } 
            
                    }
            
                echo '<h6 style = "color:red;">'."Invalid email or password provided". "</h6>";
                }
                
                }
               
            ?>

            