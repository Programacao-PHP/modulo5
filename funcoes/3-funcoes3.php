<!doctype html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>Passagem por referência</title>
</head>
<body>
	<?php
	
		$valor1 = 20;
		$valor2 = 100;
	
		/*
			Passagem de parâmteros por referência
			O valor da variável entra com o valor 20, este é alterado dentro da função e passa a tomar outro valor.
		*/
	
		function soma(&$va1, $va2)
		{
			$va1 = 40;
			return $va1 + $va2;
		}
		
		echo "$valor1 + $valor2 = " . soma($valor1, $valor2) . "<br>";	// 140
		echo "O valor da variável valor1 é: " . $valor1;	// 40
	?>
</body>
</html>