<?php

	//
	// https://www.youtube.com/watch?v=I_vUf9WKElU&index=26&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_
	//
	// definição da classe Carro
	//
	class Carro {

		// definição das propriedades
		protected $rodas;		// encapulação, só visível dentra da classe Carro e classes filhas
		private   $cor;			// encapulação, só visível dentra da classe Carro
		var $motor;				// public, visível na aplicação
		var $marca;
		var $precobase;
		
		// $ajuda representa o desconto do governo
		//static $ajuda = 2000;	// pertence à classe e é partilhada com todos os objetos (não pertence a um objeto)
								// assim, não poderemos utilizar o operador this, temos que utilizar outro, o self::
								// para dizer que este código pertence à classe
		private static $ajuda = 0;

		// Um método static pertence à classe Carro, não têm cópia de um determinado método, mas será um
		// método partilhado com todas as instâncias (objetos)
		
		//
		// definição dos métodos
		//
		
		// os construto define o estado inicial dos objetos
		function Carro(){

				// a palavra this representa a própria classe
				$this->rodas = 4;
				$this->cor = "verde";
				$this->motor = 1600;
				$this->precobase = 10000;
		}


		function arrancar() {
			// get_class($this) - devolve o nome da classe referênciada por $this
			echo "Estou a arrancar com o " . get_class($this) . "<br />";
		}

		function travar() {
			echo "Estou a travar<br />";
		}

		function virar() {
			echo "Estou a virar<br />";
		}

		//
		// Métodos Setters e Getters
		//
		
		// Acesso à propriedade $rodas
		function setRodas($rodas){
			$this->rodas = $rodas;
		}

		function getRodas(){
			return $this->rodas;
		}

		function setCor($cor){
			$this->cor = $cor;
		}

		function getCor(){
			return $this->cor;
		}

		function getValorFinal(){
			// o operador $this pertence ao objeto
			// a propriedade $ajuda não pertence ao objeto referênciado,
			// temos que usar o operador self
			$valorFinal = $this->precobase - self::$ajuda;	//
			return $valorFinal;
		}


		static function descontoGoverno(){
			date_default_timezone_set("Europe/Lisbon");
			if(date("m-d-y") > "05-01-16" )
			{
				self::$ajuda = 2000;	//
			}
		}

	}	// Fim Carro

		

	//---------------------------------------------------------------------------

	//
	// reutilização do código associada à classe Carro
	//
	class Camiao extends Carro {

		function Camiao(){

			$this->rodas = 4;
			$this->cor = "verde";
			$this->motor = 1600;
			$this->precobase = 80000;
		}

		function arrancar(){
			parent::arrancar();	// chama o método da classe pai (Carro), executando-o
			echo "Camião arracou<br>";	// executa a instrução do método Camiao
		}

		// reescrita do método setCor(), neste caso fica associado à classe camião
		// Dois métodos têm a mesma assinatura quando têm o mesmo nome, o mesmo número
		// e o mesmo tipo de argumentos e quando deveolvem o mesmo tipo de valor.
		function setCor($cor){
			$this->cor = $cor;
		}

		function getCor(){
			return $this->cor;
		}

	}
?>