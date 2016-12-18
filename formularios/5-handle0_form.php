<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Uso da variável $_REQUEST</title>
    <style>
        #container{width: 600px; margin:0 auto; margin-bottom:10px;}
        #caixa {text-align: center; width: 600px; margin:0 auto;}
        .erro {font-weight: bold; color: #C00;}
    </style>
</head>

<body>
    <?php
        // isset() - determina se a variável existe ou não é NULL
        // Se a variável não existir ou tomar o valor NULL (null) então isset devolve FALSE
        // Se o valor da variável tomar o valor 0, '', valor então a função isset devolve TRUE
        if (isset($_REQUEST['submitted']))
        {
            // $_REQUEST - array pré-definido, requisita informação do protocolo HTTP.
            // guarda todos os dados enviados pela requisição HTTP, pode recorre aos métodos GET ou POST
            $nome = $_REQUEST['nome'];

            // A função stripslashes() remove backslashes (podem ser adicionados pela função addslashes().
            // Considere a string: <span style=\"font-size:2em;\">Olá Mundo!</span>
            // Execute: stripslashes("<span style=\"font-size:2em;\">Olá Mundo!</span>");
            // Resultado: <span style="font-size:2em;">Olá Mundo!</span>
            $email = stripslashes($_REQUEST['email']);

            // Estude a função addslashes(). Crie um exemplo prático.
            
            /*
                Os outros elementos não são utilizados para simplificar a comprensão do exercício
                $_REQUEST['sexo'];
                $_REQUEST['idade'];
                $_REQUEST['comentario'];
            */

            echo "Obrigado " . $nome . " pelo seu contributo!!<br />";
            echo "Envieremos informação para o endereço " . $email;
            
        }
    ?>
    
    <!-- 
        O envio dos dados utiliza o método POST, logo os dados são
        enviados na mensagem.

        $_SERVER["PHP_SELF"] - guarda o caminho e o nome do ficheiro
    -->
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
            <input type="hidden" name="submitted" value="TRUE" />
        </div>
        
    </form>    
</body>
</html>