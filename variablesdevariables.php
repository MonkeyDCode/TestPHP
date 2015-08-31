<html>
	<body>
		<?php
			$saludo = "Hola amigo";
			$mensaje = "saludo";
			echo($$mensaje."<br />");
			$saludo = "Hi fellow";
			echo ($$mensaje."<br />");
		?>
	</body>
</html>