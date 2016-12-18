<?php

/**
	Esta página permite a validação do login pelos utilizadores (em teoria). 
*/

// define o título da página e inclui o cabeçalho
define('TITLE', 'Login');
include('templates/header.html');

// Mostra o texto introdutório do login
echo '<h2>Login</h2>
	<p>Inicie sessão na sua conta.</p>';

// verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) 
    {
		
		// Não valida o formato do email inserido
		
		if ( (strtolower($_POST['email']) == 'eu@esen.com') && ($_POST['password'] == '12345') ) 
        { // Correto!
			
			// Inicia a sessão
			session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['loggedin'] = time();
			
			// Redireciona o utilizador para a página welcome!
			ob_end_clean(); // Destroy the buffer!
			header ('Location: welcome.php');
			exit();
	
		} else { // Incorreto!

			echo '<p>O email ou a senha não coicidem!<br />Volte a tentar.</p>';
	
		}

	} else {

		echo '<p>Existe um problema com o email ou com a senha!<br />Volte a tentar.</p>';
	
	}

} else { // Visualiza o formulário

	echo '<form action="login.php" method="post">';
	echo '<p>Endereço Email: <input type="text" name="email" size="20" /></p>';
	echo '<p>Password: <input type="password" name="password" size="20" /></p>';
	echo '<p><input type="submit" name="submit" value="Iniciar Sessão!" /></p>';
	echo '</form>';

}

include('templates/footer.html');
?>