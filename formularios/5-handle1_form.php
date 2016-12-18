<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
    <style>
        #container{width: 600px; margin:0 auto; margin-bottom:10px;}
        #caixa {text-align: center; width: 600px; margin:0 auto;}
        .erro {font-weight: bold; color: #C00;}
    </style>
</head>

<body>
    <?php
        // versão 2
        // Repare que o código PHP é executado e o formulário volta a aparecer.
        // Qual a solução para não voltar a aparecer?

		
		// isset() - determina se a variável existe ou não é NULL
        // Se a variável não existir ou tomar o valor NULL (null) então isset devolve FALSE
        // Se o valor da variável tomar o valor 0, '', valor então a função isset devolve TRUE
        if (isset($_POST['enviado']))
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $comentario = $_POST['comentario'];

            // verifica se selecionou o sexo
            if(isset($_POST['sexo']))
            {
                $sexo = $_POST['sexo'];
            }
            else
            {
                // se não selecionou uma opção então a variável sexo toma o valor NULL
                $sexo = NULL;
            }
            
            // tratamento da variável sexo
            if($sexo == 'M') {
                echo '<p><b>Bom dia Sr. </b> ';
            }
            elseif($sexo == 'F') {
                echo '<p><b>Bom dia Sra. </b> ';
            }
            else {
                echo 'Não selecionou o sexo';
            }

            if($sexo == 'M' || $sexo == 'F') {
                echo $nome . " pelo comentário " . $comentario . "<br />";
                echo "Envieremos informação para o endereço " . $email;
            }
        }
    ?>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        
        <!-- fieldset - coloca um limite à volta dos elementos nele inserido -->
        <fieldset id="container">
            
            <!-- insere um cabeçalho no fieldset -->
            <legend>Insira a informação no formulário</legend>
            <p><b>Nome:   </b><input type="text" name="nome" size="20" maxlength="40" /></p>
            <p><b>Email: </b><input type="text" name="email" size="40" maxlength="60"></p>
            <p><b>Sexo:</b><input type="radio" name="sexo" value="M">Masculino
                           <input type="radio" name="sexo" value="F">Feminino
            </p>
            <p><b>Idade</b>
            <select name="idade">
                <option value="0-17">Menor</option>
                <option value="18-65">Produtor</option>
                <option value="60+">Reformado</option>
            </select>
            </p>
            <p><b>Comentário:</b>
                <textarea name="comentario" rows="3" cols="40"></textarea>
            </p>
            
        </fieldset>
        
        <div id="caixa">
            <input type="submit" name="submit" value="Enviar">
            <input type="hidden" name="enviado" value="TRUE" />
        </div>
     </form>
    
</body>
</html>