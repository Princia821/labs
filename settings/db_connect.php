<?php 

require('db_cred.php');

class Connection{

	// properties
	public $db = null;
	public $results = null;

	function DBconnection(){

		// connect to the database
		$this->db = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

		// check for errors
		if(mysqli_connect_errno()){
			return false;
		}
		return true;
	}

	function query($query){

		// check if the connection was successful
		if($this->DBconnection() == false){
			return false;
		}

		// else execute the query
		$this->results = mysqli_query($this->db, $query);

		// check if results is returning false
		if($this->results !=true){
			return false;
		}

		// else return true
		return true;

	}

	// method to fetch data from database
	function fetch($query){

		// if query executes successfully
		if($this->query($query)) {
			// return all data
			return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
		}
		// else return false
		return false;
		
	}

	function fetchOne($query){

		// if query executes successfully
		if($this->query($query)) {
			// return one data
			return mysqli_fetch_assoc($this->results);
		}
		// else return false
		return false;
	}

}

?>