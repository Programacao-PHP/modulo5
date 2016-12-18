<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
        <style>
            #container{width: 600px;}
            #caixa {text-align: center; width: 600px;}
            .erro {font-weight: bold; color: #C00;}
        </style>
</head>

<body>
    <?php
        // versão 4
        if (isset($_POST['submitted']))
        {
            if ( !empty($_POST['nome']) && !empty($_POST['comentario']) && !empty($_POST['email']) ) {
                echo "<p>Obrigado, <b>{$_POST['nome']}</b>, pelo seguinte comentário:<br />
                    <tt>{$_POST['comentario']}</tt></p>
                    <p>receberá uma resposta no email <i>{$_POST['email']}</i>.</p>\n";
            } 
            else {
                echo '<p class="erro">Verifique o preenchimento dos campos do formulário.</p>';
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
                <input type="hidden" name="submitted" value="TRUE" />
            </div>
        </form>
</body>
</html>