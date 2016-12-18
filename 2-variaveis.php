<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Variáveis</title>
    <style>
		.perigo {
			color: red;
		}
		.avanco {
			text-indent: 20px;
		}
	</style>
</head>

<body>
   
   	<h1>Aplicação de variáveis</h1>
    
    <?php

        /*
			todas as palavras reservadas em PHP NÃO são case-sensitive 
			
            as variáveis guardam valores, estes podem ser strings, números, array's, objetos, ...
            exemplos:
                $x = 20;
                $x = 'This is a string';    # o fato de estar entre aspas ou plicas define uma string
            
        */

        // Define as minha variáveis....
        $ano = 2015;    // Ano corrente.
        $media = 88;    // média das compras
        $titulo = 'Relatório de Compras';

        // Endereço do utilizador
        $rua = "Rua dos Capitães, 4";
        $cidade = "Viseu";
        $cod_postal = 3505;

        // Imprimir endereço
        echo "<p>O endereço é:<br />$rua <br />$cod_postal $cidade</p>";

        
        $nome = 'Adelino';
        $apelido = "Amaral";

        // Aspas e plicas não são a mesma coisa, verifique a diferença
        $nome1 = '$nome $apelido';
        $nome2 = "$nome $apelido";

        // Aspas e plicas não são a mesma coisa
        echo "<h1>Aspas</h1>
				<p class=\"perigo avanco\">nome1 é $nome1 </p> 
				<p class=\"avanco\"> nome2 é $nome2</p>";

        // analisa o comportamento desta função echo!!!
        echo '<h1>Plica</h1>
				<p>nome1 é $nome1 <br /> name2 é $nome2</p>';
	
		echo "<h1>Aspas concatenação</h1>
				<p class=\"perigo avanco\">nome1 é " . $nome1 . "</p>
				<p class=\"avanco\"> nome2 é " . $nome2 . "</p>";
	
    ?>
    
    
    <p>---------------------------HTML---------------------------------</p>
    
    
    <h1>Conversão de tipos</h1>
    <?php
        $x = 10;    // integer
        $y = '20';  // string
        $z = $x + $y;
	
        echo "O valor da variável z é: " . $z . " (" . gettype($z) . ")<br />";

        // na adição, o valor de y é convertido para inteiro
        $z = $x + (int)$y;

        // a conversão não altera o tipo da variável
        echo "O valor da variável z é: " . $z . " o tipo da variável é (". gettype($y) . ")";

        // para alterar o tipo da variável utilizamos a função settype()
        $f = 20.05;
        echo '<br />' . $f . '<br />'; // float number

        settype($f, 'integer');
        echo "O valor convertido de f é " . $f . '<br />'; // 20 integer number

        settype($f, 'string');
        echo $f . '<br />'; // '20' string

        settype($f, 'float');
        echo $f . '<br />'; // 20 float number
    
    ?>
    
    
    <p>----------------------------HTML--------------------------------</p>
    
    <?php
		echo '<h1>Variáveis predefinidas</h1>';

		$ficheiro = $_SERVER['SCRIPT_FILENAME'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$servidor = $_SERVER['SERVER_SOFTWARE'];
		$host = $_SERVER['HTTP_HOST'];

		echo "<p>Nome e caminho do script: <b>$ficheiro</b></p>";
		echo "<p>Nome do browser: <b>$browser</b></p>";
		echo "<p>Nome do servidor web: <b>$servidor</b></p>";
		echo "<p>Nome do host: <b>$host</b></p>";

		echo "<p>Este servidor web executa a versão PHP <b>" . PHP_VERSION . "</b> no sistema
			operativo <b>" . PHP_OS . "</b></p>";
    ?>
    
    
    <p>------------------------------------------------------------</p>
    
    <h1>A função print_r</h1>
    <pre>
    <?php
        // Variável Global
        print_r($_SERVER) . '<br />';
		
		echo "<br><br><br><br>-------------------------- OUTRO PROCESSO --------------------------<br>";
		var_dump($_SERVER);
    ?>
    </pre>
</body>
</html>
