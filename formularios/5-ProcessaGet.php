<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Recebe dados</title>
</head>

<body>
<?php

    // Esta página recebe os dados pela URL.
    //Observe a url deste ficheiro no browser...

    // verifica se o utilizador digitou informação no campo nome
    if(!empty($_GET['nome']))
    {
		if(empty($_GET['idade'])){
			$idade = "??";
		}
		else {
			$idade = $_GET['idade'];
		}
		
        $nome = $_GET['nome'];
        
        echo "Olá " . $nome . " tens " . $idade . " anos";
		
    }
    else
    {
        echo "<p>Não preencheu o campo nome!!</p>";
    }


	// sleep(5);
	// header("Location: 5-ObterDadosGet.html");
	
?>
	<br>	
	<a href="5-ObterDadosGet.html">Salte para a página anterior</a>
</body>
</html>
