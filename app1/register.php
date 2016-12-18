<?php

/*
	definição da constante TITLE
*/
define('TITLE', 'Registo');

/*
	inclusão do cabeçalho. Aqui vai entrar a constante TITLE.
*/
include('templates/header.html');

	
/**
	Adiciona CSS
*/
echo '<style type="text/css" media="screen">
	   .erro { color: red; }
    </style>';

/*
	tratamento de input
*/
function testa_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

/*
	verifica se o formulário foi submetido.
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	$problema = FALSE; // Não há problemas
	
	// verifica cada valor
	if (empty($_POST['nome'])) {
		$problema = TRUE;
		echo '<p class="erro">Insira o nome!</p>';
	}
	
	if (empty($_POST['apelido'])) {
		$problema = TRUE;
		echo '<p class="erro">Insira o apelido!</p>';
	}
	
	/*
		valida a introdução e o formato de email.
	*/
	if (empty($_POST["email"])) {
		$problema = TRUE;
		echo '<p class="erro">Email é requirido</p>';
   	} else {
    	$email = testa_input($_POST["email"]);
     	// verifica se o endereço de email está bem formatado
     	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       		$problema = TRUE;
			echo '<p class="erro">Formato do email é inválido</p>';
     	}
	}	
		

	if (empty($_POST['password1'])) {
		$problema = TRUE;
		echo '<p class="erro">Insira a password!</p>';
	}	
	
	if (empty($_POST['password2'])) {
		$problema = TRUE;
		echo '<p class="erro">Confirme a password!</p>';
	}
	
	if ($_POST['password1'] != $_POST['password2']) {
		$problema = TRUE;
		echo '<p class="erro">As senhas não coincidem!</p>';
	} 
	
	
	if (!$problema) { // Existe algum problema ($probelam=FALSE)...
	
		echo '<p>Agora está registado!</p>';
		
		// Envia email
		$body = "Obrigado pelo seu registo! A senha é '{$_POST['password1']}'.";
		mail($_POST['email'], 'Confirmação de Registo', $body, 'From: admin@esen.com');
		
		echo "Obrigado pelo seu registo. Irá receber os dados de registo no seu email.";
		
		// Apaga os valores "posted", logo os dados inseridos não são apresentados no formulário.
		$_POST = array();
		
		exit();	// não apresenta o formulário
	
	} else { // Algum problema no preenchimento do formulário: $problema=TRUE
	
		echo '<p class="erro">Tente novamente!</p>';
		
	}

}
else
{
	// Visualiza um texto introdutório.
	echo '<h2>Formulário de Registo</h2>
	<p>Utilizadores registados têm acesso a todos os conteúdos do site. Efetue o seu registo</p>';
}
?>

<!--	Estrutura do formulário		-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

	<p>Nome: <input type="text" name="nome" size="20" value="<?php if (isset($_POST['nome'])) { echo htmlspecialchars($_POST['nome']); } ?>" /></p>

	<p>Apelido: <input type="text" name="apelido" size="20" value="<?php if (isset($_POST['apelido'])) { echo htmlspecialchars($_POST['apelido']); } ?>" /></p>

	<p>Email: <input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) { echo htmlspecialchars($_POST['email']); } ?>" /></p>

	<p>
        Senha: 
        <input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { echo htmlspecialchars($_POST['password1']); } ?>" />
    </p>
	<p>
        Confirme Senha: 
        <input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { echo htmlspecialchars($_POST['password2']); } ?>" /></p>

	<p><input type="submit" name="submit" value="Registar!" /></p>

</form>

<!-- inclusão do rodapé -->
<?php include('templates/footer.html');  ?>