<html>
	<body>
		<?php
			$nombres = array("nombre1", "nombre2","nombre3","nombre4");
			echo($nombres[0]."<br />");
			echo($nombres[1]."<br />");
			echo($nombres[2]."<br />");
			echo($nombres[3]."<br />");
			$nombres[4]="nombre añadido despues";
			echo($nombres[4]."<br />");
			$nombres[]="nombre añadido sin indice";
			echo($nombres[5]."<br />");


			$nombres2 = array(1=>"uno","dos","tres",50=>"cincuenta","cincuenta y uno");
			echo($nombres2[1]."<br />");
			echo($nombres2[2]."<br />");
			echo($nombres2[3]."<br />");
			echo($nombres2[50]."<br />");
			echo($nombres2[51]."<br />");
		?>
	</body>
</html>
