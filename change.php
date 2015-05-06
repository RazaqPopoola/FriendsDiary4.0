<?php

	include('init.php');
	
	if (isset($_POST['delete']))
	{
		$contactID=$_POST['contactID'];
		$sql = "DELETE FROM contactstb WHERE contactID='$contactID'";

		header('Location: contactlist.php');
		exit();
	}
	
	
	
	
	if (isset($_POST['update']))
	{	

		//$contactID = mysqli_real_escape_string($_POST['contactID']);
		$names = mysqli_real_escape_string($_POST['conName']);
		$phoneNo = mysqli_real_escape_string($_POST['phoneNo']);
		$email = mysqli_real_escape_string($_POST['conEmail']);
		$address = mysqli_real_escape_string($_POST['address']);
		
		$sql = "UPDATE contactstb SET
		conName='$conName',
		phoneNo='$phoneNo',
		conEmail='$conEmail',
		address='$address'";
		
		if (!mysqli_query($sql))
		{
			$error = 'Error updating submitted Contact';
			include 'error.html.php';
			exit();
		}
		
		header('Location: contactList.php');
		exit();
	}
	

?>