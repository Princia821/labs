<?php

class validation{


// validation
 private $errors = array(); 

    public function signup($POST){ 

    foreach ($POST as $key => $values){
        
        // customer name 
        if($key == "full name"){

            if(is_numeric($value)){

                $this -> errors [] = "customer name can not be a number";
            }
        }

         // customer email
        if($key == "email"){

            if(trim($value) == ""){

                $this -> errors [] = "please enter a valid email";
            }
        }

        // customer password
        if($key == "password"){

            if(trim($value) == ""){

                $this -> errors [] = "password  can not be empty";
            }
        }

    // customer country
        if($key == "country"){

            if(trim($value) == ""){

            $this -> errors [] = "country can not be empty";
        }
}

    // customer city
        if($key == "city"){

            if(trim($value) == ""){

            $this -> errors [] = "city can not be empty";
        }
}

    // customer contacts
        if($key == "contact"){

            if(trim($value) == ""){

            $this -> errors [] = "contact can not be empty";
        }
}

    }

     }
    }

?>

