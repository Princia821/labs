<?php 

class Database{

    private $HOST = "localhost";
    private $USER = "root";
    private $PASS = "";
    private $DB_NAME = "shoppn";

// method for database connection 
    private function connect() {

        $string = "mysql:$this->HOST;$this->DB_name";
        $conn = new PDO($string,$this->USER,$this->PASS);
        return $conn;
    }

    public function write($query, $data = array()) {
        $conn = $this->connect();

        $stm = $conn->prepare($query);
        $result = $stm->execute($data);

        if($result) {
            return true;
        } else {
            return false;
        }
        
    }

    public function read($query, $data = array()) {
        $conn = $this->connect();

        $stm = $conn->prepare($query);
        $result = $stm->execute($data);

        if($result) {
            $data = $atm->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($data) && count($data) > 0){
                return $data;
            }
        }
            return false;
        } 

    }

?>
