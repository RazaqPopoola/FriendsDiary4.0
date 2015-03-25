<?php

	session_start();
	//error_reporting (0);
	
	require 'connectdb/dbConnect.php';
	require 'functions/security.php';
	require 'functions/member.php';

	
	
	if(loggedIn() === true) {
		
		$sessionMemberID = $_SESSION['memberID'];
		$memberData = memberData($sessionMemberID, 'memberID', 'username', 'password', 'email', 'fName', 'lName');
	
		if (userActive($memberData['username']) === false){
		
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
	
	$errors = array();
	
?>
