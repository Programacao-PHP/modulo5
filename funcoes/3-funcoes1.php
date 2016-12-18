<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções</title>
</head>
<body>
	<?php
	
		/*
			Visibilidade e acessibilidade das variáveis
			As variáveis podem ser locais, globais ou superglobais
			
			Local - declarada dentro da função. Visível e acessível dentro dessa função
			Global - declarada em qualquer parte do código PHP (fora ou dentro de funções). Visível e acessível em qualquer lugar do código.
			Superglobal - declarada como um array. Visível e acessível fora do script PHP (POST, GET, ...).
		*/
		
		$nome = "Adelino";

		function getNome()
		{
			$nome = "Maria";
		}
		
		getNome();
		
		echo $nome;
		
	?>
</body>
</html>