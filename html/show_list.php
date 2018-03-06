<html>
<body>
	<link rel="stylesheet" type="text/css" href="css/receiver_home.css">
	<div id="show_list">
	<?php
	foreach($_SESSION['name'] as $var){
			echo $var.'</br>';
		}
	?>
	</div>
	
</body>
</html>