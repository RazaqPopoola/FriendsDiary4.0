<?php

	function getMessage(){
		
		$query = "SELECT `sender`, `message` FROM `chats` ORDER BY `msgID` DESC";
		$un = mysql_query($query);
		
		$messages = array();
		
		while($message = mysql_fetch_assoc($run)){
			$message[] = array('sender' => $message['sender'],
								'message' => $message['message']);
		}
		return $messages;
	}

	function sendMessage($sender, $message){
		
		if(!empty($sender) && !empty($message)){
			
			$sender = mysql_real_escape_string($sender);
			$message = mysql_real_escape_string($message);
			
			$query = "INSERT INTO `chats` VALUES('', '{$sender}', '{$message}')"; 
			
			if($run = mysql_query($query)){
				return true;
			}else{
				return false;
			}
		}else{
			
			return false;
		}
		
	}
?>