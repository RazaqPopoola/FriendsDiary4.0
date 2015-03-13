<?php

	$connect_error = 'Sorry, we\'re experiencing down time........';
	mysql_connect ('localhost', 'root', '') or die ($connect_error);
	mysql_select_db ('fddb') or die ($connect_error);

?>