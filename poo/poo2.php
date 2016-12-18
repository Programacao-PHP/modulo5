<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POO 2</title>
</head>
<body>
	<?php
	
		// definição das classes Carro e Camiao
		include ("veiculos.php");
		
		// instância da classe Carro
		// os objetos $renault, $ford e $seat têm uma cópia de todos os métodos da classe Carro,
		// no entanto os métodos têm um comportamento diferente para cada objeto, pois podem dar
		// resultados diferentes.
		$renault 	= new Carro();
		$ford 		= new Carro();
		$seat 		= new Carro();
		
		$ford->virar();
		
		echo "O carro ford tem " . $ford->getRodas() . " rodas.<br />";
		
		$ford->setCor("vermelho");
		
		echo "A cor do carro ford é " . $ford->getCor() . "<br />";
		
		echo "<br /><br />== Muda de Objeto ==<br /><br />";

	
		// cria uma instância da classe Camiao
		$pegaso = new Camiao();
		$pegaso->arrancar();
		$pegaso->travar();
		$pegaso->setCor("Azul");
		echo "A cor do carro pegaso é " . $pegaso->getCor() . "<br />";
		echo "O camião tem " . $pegaso->getRodas() . " rodas.<br>";

		$seat->setRodas(5);
		echo "O carro Seat tem " . $seat->getRodas()  . " rodas.<br>";
		echo "O carro Seat custa: " . $seat->getValorFinal()   . "<br>";

	
		// É um campo comum a todas as objetos Carro, os modelos (seat, ford,..) não têm cópia da classe
		// vejamos o perigo do acesso à propiedade $ajuda
		// $seat::$ajuda = 1000;
		// echo "O carro Seat custa: " . $seat->getValorFinal();

		
		// para aplicar o desconto do governo temos que
		Carro::descontoGoverno();	// atualiza a variável $ajuda
		
		echo "O carro Seat custa: " . $seat->getValorFinal()   . "<br>";
	?>
</body>
</html>