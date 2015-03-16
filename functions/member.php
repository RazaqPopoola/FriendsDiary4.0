<?php

	function memberCount(){
		
		return mysql_result(mysql_query("SELECT COUNT(`memberID`) FROM `members` WHERE `active` = 1"), 0);
	}
	
	function memberData($memberID){
		
		$data = array();
		$memberID = (int)$memberID;
		
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		
		if($func_num_args > 1){
			
			unset($func_get_args[0]);
			
			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `members` WHERE `memberID` = $memberID"));
			
			 return $data;
		}
	
	}
	
	function loggedIn() {
		
		return (isset($_SESSION['memberID'])) ? true : false;
	}
	
	function memberExists($username) {
		
		$username = sanitize($username);
		return (mysql_result(mysql_query("SELECT COUNT(`memberID`) FROM `members` WHERE `username` = '$username'"), 0) == 1) ? true : false;
	}
	
	function emailExists($email) {
		
		$email = sanitize($email);
		return (mysql_result(mysql_query("SELECT COUNT(`memberID`) FROM `members` WHERE `email` = '$email'"), 0) == 1) ? true : false;
	}
	
	function memberActive($username) {
		
		$username = sanitize($username);
		return (mysql_result(mysql_query("SELECT COUNT(`memberID`) FROM `members` WHERE `username` = '$username' AND `active` = 1"),0) == 1) ? true : false;
	}
	
	function memberidFromUsername($username) {
		
		$username = sanitize($username);
		return mysql_result(mysql_query("SELECT `memberID` FROM `members` WHERE `username` = '$username'"), 0, 'memberID');
	}
	
	function login($username, $password){
		
		$memberID = memberidFromUsername($username);
		
		$username = sanitize($username);
		$password = md5($password);
		return (mysql_result(mysql_query("SELECT COUNT(`memberID`) FROM `members` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
	
	}
	
	function registerMember($registerData) {
		
		array_walk($registerData, 'arraySanitize');
		$registerData['password'] = md5($registerData['password']);

		$fields = '`' . implode('`, `', array_keys($registerData)) . '`';
		$data = '\'' . implode('\', \'', $registerData) . '\'';

		mysql_query("INSERT INTO `members` ($fields) VALUES ($data)");
		//email($registerData['email'], 'Activate your account', "Hello " . $registerData['first_name'] . ", \n\nYou need to activate your account, therefore use the link below:\n\nhttp://localhost/FsDProject/activate.php?email=" . $registerData['email'] . "&email_code=" . $registerData['email_code'] . "\n\n- Diabetes Management System");
	}
	
	
	function changePassword($memberID, $password) {
		
		$memberID = (int) $memberID;
		$password = md5($password);

		mysql_query("UPDATE `members` SET `password` = '$password' WHERE `memberID` = $memberID");
	}

	
	
	
	
	
	
	