<?php
	

	if(!empty($_FILES['files']['name'][0])){
		
		$files = $_FILES['files'];
		
		$uploaded = array();
		$failed = array();
		
		$allowed = array('jpg', 'png', 'jpeg', 'gif');
		
		foreach ($files['name'] as $position => $file_name) {
			
			$file_tmp 	= $files['tmp_name'][$position];
			$file_size 	= $files['size'][$position];
			$file_error = $files['error'][$position];
			
			$file_ext = explode('.', $file_name);
			$file_ext = strtolower(end($file_ext));
			
			if(in_array($file_ext, $allowed)){
				
				if($file_error === 0){
					
					if($file_size <=  2097152){
					
						if($file_ext == 'jpg' || 'png' || 'jpeg' || 'gif' ){
								
							$file_name_new = uniqid('', true) . '.' . $file_ext;
							$file_destination = 'uploads/images/' . $file_name_new;	
							$file_destination1 = 'uploads/images/thumbs/' . $file_name_new;
									
						}
						
						if(move_uploaded_file($file_tmp, $file_destination)){
							$uploaded[$position] = $file_destination;
							copy($file_destination, $file_destination1);
							
							header('Location: imgGallery.php');
						
						}else{
							
							$failed[$position] = "[{$file_name}] failed to upload.";
						}
					}else{
						
						$failed[$position] = "[{$file_name}] is too large. Maximum size is 2 megabytes!";
					}
				}else{
					
					$failed[$position] = "[{$file_name}] failed to upload {$file_error}.";
				}
			}else{
			
				$failed[$position] = "[{$file_name}] file extension '{$file_ext}'  is not allowed.";
			}
		}
	}
	
	if(!empty($uploaded)){
		print_r($uploaded);
	}
	
	if(!empty($failed)){
		print_r($failed);
		
	}

?>