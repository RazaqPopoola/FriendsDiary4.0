<?php

	function resize($target, $new, $width, $height, $type){
		
		list($wo, $ho) = getimagesize($target);
		
		if($type == "image/jpeg"){
			
			$nen = imagecreatefromjpeg($target);
		}elseif($type == "image/jpg"){
			
			$nen = imagecreatefromjpg($target);
		}elseif($type == "image/png"){
			
			$nen = imagecreatefromjpng($target);
		}elseif($type == "image/gif"){
			
			$nen = imagecreatefromgif($target);
		}
		
		$chen = imagecreatetruecolor($width, $height);
		imagecopyresampled($chen, $nen, 0, 0, 0, 0, $width, $height, $wo, $ho);
		imagejpeg($chen, $new, 180);
		
	}

	
?>