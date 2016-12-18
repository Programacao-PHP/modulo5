<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções</title>
</head>
<body>
	<?php
		function incrementaVariavel()
		{
			static $contador = 0;
			$contador ++;
			echo $contador . "<br />";
		}
		
		incrementaVariavel();
		incrementaVariavel();
		incrementaVariavel();
		incrementaVariavel();
		incrementaVariavel();
		
		/* 
		 se chamar varias vezes a função incrementaVariavel()
		 o valor é sempre 1 pois as variáveis locais são destruídas.
		 
		 Para manter o valor entre chamadas utiliza-se o operador static
		*/
	?>
</body>
</html>