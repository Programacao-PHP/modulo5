<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body>
<?php
	
	// definição de constantes
    define("RED","#FF0000");
    define("GREEN","#00FF00");
    define("BLUE","#0000FF");

    // passagem por valor
    // cria a função getRGB que aceita o parâmetro $color por valor
    function getRGB($code=RED)
    {
        //$code = RED; // default color
        switch ($code){
            case 'red': $code = "RED";
            break;
            case 'green': $code = "GREEN";
            break;
            case 'blue': $code = "BLUE";
            break;
         }
         return $code;
    }

    $color_code = getRGB();

    
    echo "<span style=\"color:" . $color_code . "\">Frase de demosntração - PHP</span>";


    echo "<br />--------------------------------------------------------------------<br />";


    // Passagem por referência
    function incrementa(&$x){
     $x = $x + 1;
     echo 'dentro da função --> x = ' . $x .'<br />';
    }

    $x = 10;
    incrementa($x);	// 11
    echo 'fora da função --> x = ' . $x;		// 11

?>
</body>
</html>
