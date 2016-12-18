<!doctype html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>Passagem por valor</title>
</head>
<body>
	<?php
	
		$valor1 = 20;
		$valor2 = 100;
	
		/*
			Passagem de parâmteros por valor
		*/
	
		function soma($va1, $va2)
		{
			return $va1 + $va2;
		}
		
		echo "$valor1 + $valor2 = " . soma($valor1, $valor2);
	?>
</body>
</html>