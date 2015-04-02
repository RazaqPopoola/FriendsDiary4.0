<?php

	
	function sanitize($data){
		
		return mysql_real_escape_string($data);
	}
	
	function email($to, $subject, $body) {
		
		mail($to, $subject, $body, 'From: razaqpopoola@gmail.com');
	}
	
	function securePage(){
		
		if(loggedIn() === false ){
			header('Location: secured.php');
			exit();
		}
	}
	
	function loggedInRedirect(){
		
		if(loggedIn() ===true){
			header('Location: profile.php');
			exit();
		}
	}
	
	function arraySanitize($item){
		
		$item = mysql_real_escape_string($item);
	}

	function outputErrors($errors){

		return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
	}

?>