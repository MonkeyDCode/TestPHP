<html>
	<body>
		<?php
			$variable1 = 1234.5678;
			echo ("la variable 1 vale ".$variable1." y su tipo es ".gettype($variable1)."<br />");
			settype($variable1,"integer");
			echo ("la variable 1 vale ".$variable1." y su tipo es ".gettype($variable1)."<br />");


			$variable2 = 12123232434234342343434141414124124.143;
			echo ("la variable 2 vale ".$variable2." y su tipo es ".gettype($variable2)."<br />");
			settype($variable2,"integer");
			echo ("la variable 2 vale ".$variable2." y su tipo es ".gettype($variable2)."<br />");


			$variable3 = 1221321.2132132;
			echo ("la variable 3 vale ".$variable3." y su tipo es ".gettype($variable3)."<br />");
			settype($variable3,"string");
			echo ("la variable 3 vale ".$variable3." y su tipo es ".gettype($variable3)."<br />");

			$variable4 = 6554.48842;
			echo ("la variable 4 vale ".$variable4." y su tipo es ".gettype($variable4)."<br />");
			$variable4 = (int) $variable4;
			echo ("la variable 4 vale ".$variable4." y su tipo es ".gettype($variable4)."<br />");
		?>
	</body>
</html>
