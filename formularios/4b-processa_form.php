<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Receção dos dados</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</head>

<body>
<?php
 
    // Guarda os dados do formulário em variáveis
    // Obtém os dados do array associativo $_POST
    $titulo = $_POST['titulo'];
    $nome = $_POST['nome'];
    $resposta = $_POST['resposta'];
    $comentarios = $_POST['comentarios'];

	//$titulo 
?>

	<div class="container">
		<div class="alert alert-success">
  			<strong>Obrigado!</strong> <?php echo $nome; ?> pelos comentários.<br />
  			Considerou a informação como <?php echo $resposta; ?> e adicionou o comentário: <?php echo $comentarios; ?>
		</div>
	</div>
</body>
</html>
