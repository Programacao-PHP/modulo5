<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POO 1</title>
</head>
<body>
	<?php
	
		// definição da classe
		class Carro {
			
			// definição das propriedades
			var $rodas;
			var $cor;
			var $motor;
			
			
			// definição dos métodos
			
			// os construtor define o estado inicial dos objetos
			function Carro(){
				
					// a palavra this representa a própria classe
					$this->rodas = 4;
					$this->cor = "verde";
					$this->motor = 1600;
			}
			
			
			function arrancar() {
				echo "Estou a arrancar<br />";
			}
			
			function travar() {
				echo "Estou a travar<br />";
			}
			
			function virar() {
				echo "Estou a virar<br />";
			}
			
		}
		
		
		// instância ou objetos da classe Carro
		$renault 	= new Carro();
		$ford 		= new Carro();
		$seat 		= new Carro();
		
		// executa o método virar() do objeto $ford
		$ford->virar();
		
		echo "O carro ford tem " . $ford->rodas . " rodas.";
	
	?>
</body>
</html>