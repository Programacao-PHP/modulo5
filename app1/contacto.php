<?php
	// Envia um email para o destinatário depois de preencher o formulário

    // chama o ficheiro header.html
    include('templates/header.html');    

	date_default_timezone_set('Europe/Lisbon');

	// Verifica se o formulário já foi submetido
    if (isset($_POST['enviado'])) 
    {

        // Valida se os campos possuem informação
        if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['comentarios']) ) 
		{

            // Cria o body:
            $body = "Nome: {$_POST['nome']}\n\nComentários: {$_POST['comentarios']}";

            // provoca quebras de linha com comprimento 70
            $body = wordwrap($body, 70);

            // Envia email
            mail('adelinoamaral@esenviseu.net', 'Informação de contacto', $body, "From: {$_POST['email']}");

            // Depois de enviar email apresenta a mensagem
            echo '<p><em>Obrigado por nos contactar.<br />';
			echo 'Levou ' . (time() - $_POST['tempoinicial']) . ' segundos para preencher e enviar o formulário!!';
			echo ' Seremos breves a responder.</em></p>';

            // Limpa o array $_POST
            $_POST = array();
            exit();

        } else {
            echo '<p class="erro">Preencha o formulário na totalidade.</p>';
        }

    }
?>

	<p>Contacte-nos:</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Nome: <input type="text" name="nome" size="30" maxlength="60" value="<?php if (isset($_POST['nome'])) echo $_POST['nome']; ?>" /></p>
        <p>Email: <input type="text" name="email" size="30" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>
        <p>Comentários: <textarea name="comentarios" rows="10" cols="40"><?php if (isset($_POST['comentarios'])) echo $_POST['comentarios']; ?></textarea></p>
        <p><input type="submit" name="submit" value="Enviar!" /></p>
        <input type="hidden" name="enviado" value="TRUE" />
        <input type="hidden" name="tempoinicial" value="<?php echo time(); ?>" />
    </form>



<?php
    // chama o ficheiro footer.html
    include('templates/footer.html');
?>