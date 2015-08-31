<html>
	<body>
		<?php
			$variable1 = "hola";
			echo("tipo de variables de \$variable1 es ".gettype($variable1)."<br />");
			unset($variable1);
			echo("el tipo de variable de \$variable1 es ".gettype($variable1)."<br />".$variable1);
		?>
	</body>
</html>