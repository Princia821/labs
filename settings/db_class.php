<?php

//database credentials
require 'db_cred.php';

class db_connection
{
    //properties
    public $db = null;
    public $results = null;

    function db_connect()
    {
        //connection
        $this->db = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

        //test the connection
        if (mysqli_connect_errno()) {
            return false;
        } else {
            return true;
        }
    }

    //execute a query
    function db_query($sqlQuery)
    {
        if (!$this->db_connect()) {
            return false;
        } elseif ($this->db == null) {
            return false;
        }
        //run query
        $this->results = mysqli_query($this->db, $sqlQuery);

        if ($this->results == false) {
            return false;
        } else {
            return true;
        }
    }

    //execute a query with mysqli real escape string
    //to saveguard from sql injection

    function db_query_escape_string($sqlQuery)
    {
        //run query
        $this->results = mysqli_query($this->db, $sqlQuery);

        if ($this->results == false) {
            return false;
        } else {
            return true;
        }
    }

    //fetch all data
    function db_fetch_all()
    {
        //check if result was set
        if ($this->results == null) {
            return false;
        } elseif ($this->results == false) {
            return false;
        }

        //return a record
        return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
    }

    //execute a query that returns the just inserted id

    function db_query_id($sqlQuery)
    {
        if (!$this->db_connect()) {
            return false;
        } elseif ($this->db == null) {
            return false;
        }

        //run query
        $this->results = mysqli_query($this->db, $sqlQuery);

        if ($this->results == false) {
            return false;
        } else {
            //get the just inserted id
            return mysqli_insert_id($this->db);
        }
    }

    //execute a query with mysqli real escape string and return the just inserted id
    //to saveguard from sql injection
    function db_query_escape_string_id($sqlQuery)
    {
        //run query
        $this->results = mysqli_query($this->db, $sqlQuery);

        if ($this->results == false) {
            return false;
        } else {
            //get the just inserted id
            return mysqli_insert_id($this->db);
        }
    }

  

        function db_count(){
            if($this->results == null)
            {
                return false;
            }
            elseif ($this->results == false) {
                return false;
            }
            return mysqli_num_rows($this->results);
        }
}
?>

