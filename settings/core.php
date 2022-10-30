<?php
//header redirection
ob_start();

//start session start
session_start(); 

//name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//checking for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect to login page
    	header('Location: ../login/login.php');
	}
	else{
		return true;
	}
}

//checking for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}

//checking for errors
function check_error(){
	if(isset($_SESSION['error'])){
		$message = $_SESSION['error'];
		echo "<script>alert('$message');</script>";
		unset($_SESSION['error']);

	}
}

function create_menu(){
	if(isset($_SESSION['user_id'])){
        echo'<li>
            <a style="font-size: 1.5rem; text-allign: right" href="login/logout.php">Logout</a>
            </li>';
    }
	else{
		echo'<li><a style="font-size: 1.5rem;" href="login/login.php">Login</a></li>
		<li><a style="font-size: 1.5rem;" href="login/register.php">Register</a></li>';
	}
}

?>