<?php

	session_start();
	//error_reporting(0);
	
	require('connectdb/dbConnect.php');
	require('functions/security.php');
	require('functions/member.php');
	require('functions/chat.php');
	require('classes/Gallery.php');

	$currentFile = explode('/', $_SERVER['SCRIPT_NAME']);
	$currentFile = end($currentFile);
	

	if(loggedIn() === true) {
		
		$sessionMemberID = $_SESSION['memberID'];
		$memberData = memberData($sessionMemberID, 'memberID', 'username', 'password', 'email', 'fName', 'lName', 'passwordChange', 'type', 'allowEmail', 'profile');
	
		if (memberActive($memberData['username']) === false){
		
			session_destroy();
			header('Location: index.php');
			exit();		
		}
		

		if ($currentFile !== 'changePassword.php' && $currentFile !== 'logout.php' && $memberData['passwordChange'] == 1) {
		
			header('Location: changepassword.php?force');
			exit();
		}

	}
	
	$errors = array();
	
?>