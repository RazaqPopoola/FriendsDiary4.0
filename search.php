<?php
		include('config/init.php');
		
		if(isset($_POST['searchVal'])){
												
			$searchq = $_POST['searchVal'];
			$searchq = preg_replace("#[^0-9a-z]i#","",$searchq);
			$output = '';	
												
			$query = "(SELECT fName, lName FROM members WHERE fName LIKE '%$searchq%' or lName LIKE '%$searchq%') 
			UNION
			(SELECT title, diaryDate FROM diarys WHERE diaryDate LIKE '%$searchq%' or title LIKE '%$searchq%') ";
			
			//$result = mysql_query($query);
			//$count = mysql_num_rows($result);
							
					$result=mysql_query($query);
				if ($result==false)
					{
   						 die(mysql_error());
					}
						$count=mysql_num_rows($result);		
							
			$rowcount = 0;			
												
			if($count == 0){
				
				$output ="There was no search result!";
			}else{
													
				while($rowcount < 4 && $row = mysql_fetch_assoc($result)){
					
					$fName = $row['fName'];
					$lName = $row['lName'];
					//$id = $row['memberID'];
														
					$output .= '<div>' .$fName.' '.$lName.'</div>';
					
					$rowcount +=1;
													
					}															
			}									
		}

		echo ($output);


?>