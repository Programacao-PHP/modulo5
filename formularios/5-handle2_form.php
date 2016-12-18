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
        // versão 3

        // usar $_POST em vez de $_REQUEST no tratamento de formulários
        // os dados são enviados no pedido da requisição HTTP
        if (isset($_POST['enviado']))
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $comentario = $_POST['comentario'];

            // A função empty() verifica se uma variável tem o 0 (zero), FALSE, string vazia ou NULL
            if(!empty($_POST['nome']))
            {
                $nome = $_POST['nome'];
            }
            else
            {
                $nome = NULL;
                echo '<p class="erro"> Deve inserir o nome</p>';
            }

            if(!empty($_POST['email']))
            {
                $email = $_POST['email'];
            }
            else
            {
                $email = NULL;
                echo '<p class="erro"> Deve inserir o email</p>';
            }

            if(!empty($_POST['comentario']))
            {
                $comentario = $_POST['comentario'];
            }
            else
            {
                $comentario = NULL;
                echo '<p class="erro"> Deve inserir o comentário</p>';
            }

            if(isset($_POST['sexo']))
            {
                $sexo = $_POST['sexo'];
                if($sexo == 'M') {
                    echo '<p><b>Bom dia Sr. </b> ';
                }
                elseif($sexo == 'F') {
                    echo '<p><b>Bom dia Sra. </b> ';
                }
            }
            else    // variável não foi inicializada
            {
                $sexo = NULL;
                echo '<p class="erro"> Deve inserir o sexo</p>';
            }

            if($nome && $email && $sexo && $comentario) {
                echo $nome . " pelo comentário: " . $comentario . "<br />";
                echo "Envieremos informação para o endereço " . $email;
            }
            else
            {
                echo '<p class="erro"> Não preencheu todos os campos</p>';
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