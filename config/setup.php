<?php

	session_start();
	//error_reporting (0);
	
	require 'connectdb/dbConnect.php';
	require 'functions/security.php';
	require 'functions/member.php';

	$errors = array();
	
	if(loggedIn() === true) {
		
		$session_user_id = $_SESSION['user_id'];
		$userData = patient_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email');
	
		if (userActive($user_data['username']) === false){
		
			session_destroy();
			header('Location: index.php');
			exit();		
		}
	
	/*
	if ($current_file !== 'changepassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] == 1) {
		
		header('Location: changepassword.php?force');
		exit();
	}*/
}
	
?>
