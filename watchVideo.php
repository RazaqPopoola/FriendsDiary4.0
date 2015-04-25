
<html>
<head>
	<title>My Video</title>
</head>
<body>
	<?php 
		if(isset($_GET['videoID'])){
			
			$videoID = $_GET['videoID'];
			$query = mysql_query('SELECT * FROM `videostb` WHERE videoID=`$videoID`');
			while($row = mysql_fetch_assoc($querry)){
				
				$name = $row['name'];
				$url = $row['url'];
			}
			
			echo "You are watching ".$name."<br />";
			echo "<video src='$url' width='560' height'315' autoplay controls></video>";
		
		}else{
			 echo "video List";
		}
	?>
	
	<?php
	
		$query = mysql_query("SELECT * FROM `videotb`");
		while($row = mysql_fetch_assoc($query)){
			
			$videoID = $row['videoID'];
			$title = $row['title'];
			$artist = $row['artist'];
			$computerN = $row['computerN'];
			
			echo "<a href='watchVideo.php?videoID=$videoID'>$artist - $title</a> - $computerN<br />";
		}
	?>

</body>
</html>