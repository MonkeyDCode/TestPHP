<html>
	<body>
		<?php
			echo("la variable 1 es de tipo ".gettype($variable1)."<br />");
			$variable2 = 8;
			echo ("la variable 2 vale ".$variable2."y es de tipo ".gettype($variable2)."<br />");
			$variable3 = 3.141519;
			echo ("la variable 3 vale ".$variable3."y es de tipo ".gettype($variable3)."<br />");
			$variable4 = "Esto es una cadena"; 
			echo ("la variable 4 vale ".$variable4."y es de tipo ".gettype($variable4)."<br />");
		?>
	</body>
</html>