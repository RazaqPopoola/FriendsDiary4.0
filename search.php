<?php
		include('config/init.php');
		
		if(isset($_POST['searchVal'])){
												
			$searchq = $_POST['searchVal'];
			$searchq = preg_replace("#[^0-9a-z]i#","",$searchq);
			$output = '';	
												
			$query = mysql_query("SELECT * FROM members WHERE fName LIKE '%$searchq%' or lName LIKE '%$searchq%'") or die("Could not search!");
			$count = mysql_num_rows($query);
												
			if($count == 0){
				
				$output ="There was no search result!";
			}else{
													
				while($row = mysql_fetch_array($query)){
					
					$fName = $row['fName'];
					$lName = $row['lName'];
					$id = $row['memberID'];
														
					$output .= '<div>' .$fName.' '.$lName.'</div>';
													
					}															
			}									
		}

		echo ($output);


?>