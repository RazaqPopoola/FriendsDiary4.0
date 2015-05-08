<?php

	include_once('config/init.php'); 
	
	if (isset($_POST['delete'])){
		
		$del = $_POST['contactID'];
		$sql = "DELETE FROM contactstb WHERE contactID = $del";

		header('Location: contactList.php');
		exit();
	}
	
	
	
	
	if (isset($_POST['update'])){	

		$conName = sanitize($_POST['conName']);
		$phoneNo = sanitize($_POST['phoneNo']);
		$conEmail = sanitize($_POST['conEmail']);
		$address = sanitize($_POST['address']);
		
		$sql = "UPDATE contactstb SET
		conName='$conName',
		phoneNo='$phoneNo',
		conEmail='$conEmail',
		address='$address'";
		
		if (!mysql_query($sql))
		{
			$errors = 'Error updating submitted Contact';
			echo outputErrors($errors);
			exit();
		}
		
		header('Location: contactList.php');
		exit();
	}
	

?>