<?php
	//Java Script
?>

		<!--jquery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		
		<!--jquery UI-->
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


		<script>
			function searchq(){
				var searchTxt = $("input[name='search']").val();
				
				$.post("search.php", {searchVal: searchTxt}, function(output){
					
					$("#output").html(output);
				});
				
			}
		
		</script>
		<script>
			$(document).ready(function displatTxt(){
				
				$("td").click(function(){
					
					//$(this).css("background-color", "yellow");
					
					alert("yessssssssssssss");
					
				});
			});
			
		</script>


		<script>
			
			var audioElement = $("myTune")[0];
			
			$(".button-pause").on("click", function() {
		    $(".button-pause").blur();
		    $(".button-pause").addClass("active");
		    $(".button-play").removeClass("active");
		    audioElement.pause();
		  });
		
		  $(".button-play").on("click", function() { 
		    $(".button-play").blur();
		    $(".button-play").addClass("active");
		    $(".button-pause").removeClass("active");
		    audioElement.play();
		  });
		
		  $(".button-stop").on("click", function() 
		    $(".button-stop").blur();
		    $(".button-play").removeClass("active");
		    $(".button-pause").removeClass("active");
		    audioElement.pause();
		    audioElement.currentTime = 0;
		  });
		
		  $(".button-skip-forward").on("click", function() {
		    $(".button-skip-fastword").blur();
		    audioElement.currentTime += 5;
		  });
		
		  $(".button-skip-backward").on("click", function() {
		    $(".button-skip-backward").blur();
		    audioElement.currentTime -= 5;
		  });
		</script>
		
		


