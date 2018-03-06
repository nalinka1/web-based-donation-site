<html>
	<div id="r_welcome">
		
		<h1>
			Hi
			<?php
				session_start();
				echo $_SESSION['username'];
			?>
			......
		</h1>
	
	</div>
</html>