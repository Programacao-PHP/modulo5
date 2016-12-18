<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Datas</title>
	<style>
		.container {
			margin: 120px auto;
			width:500px;
			border: 1px dotted #ccc;
			background-color: #eee;
		}
		form {
			margin-left: 20px;
			padding: 20px 0;
		}
		.erro{
			color:red;
		}
	</style>
</head>

<body>
    <div class="container">
        
		<?php
		if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($enviou)) {
			
			
			
			if(empty($_POST['dia']))
			{
				echo "<p>Não preencheu o campo dia</p>";
			}
			if(empty($_POST['mes']))
			{
				echo "<p>Não preencheu o campo mes</p>";
			}
			if(empty($_POST['ano']))
			{
				echo "<p>Não preencheu o campo ano</p>";
			}
			
			// fazer um resumo do preenchido no formulário
			
		}
		else {
		?>
        
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<p>Complete o registo:</p>
			<!--
				Há tags HTML 5 para este tipo de inputs
			-->
            <p>Email: <input type="email" name="email" size="30" required /><span class="erro">&nbsp;&nbsp;*</span></p>
            <p>Password: <input type="password" name="password" size="20" required /><span class="erro">&nbsp;&nbsp;*</span></p>
            <p>Confirma Password: <input type="password" name="confirma" size="20" required /><span class="erro">&nbsp;&nbsp;*</span></p>
            <p>Data de Nascimento:
            <select name="dia">
                <option value="">Dia</option>
                <?php // Imprime 31 dias:
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value=\"$i\">$i</option>\n";
                }
                ?>
            </select>

            <select name="mes">
                <option value="">Mês</option>
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>

            <input type="text" name="ano" value="AAAA" size="4" />
			<span class="erro">&nbsp;&nbsp;*</span>
            <!-- pode validar a data com a função checkdate($month, $dia, $year) -->
            </p> 

            <p>Cor Favorita:
            <select name="cor">
                <option value="">Escolha uma</option>
                <option value="vermelho">Vermelho</option>
                <option value="amarelo">Amarelo</option>
                <option value="verde">Verde</option>
                <option value="azul">Azul</option>
            </select>
			<span class="erro">&nbsp;&nbsp;*</span>
            </p>

            <p><input type="checkbox" name="termo" value="Sim" /> Aceitação do termo.<span class="erro">&nbsp;&nbsp;*</span></p>
            <input type="submit" name="submit" value="Registar" />
			<input type="hidden" name="enviou" value="TRUE" />
        </form>
		<p><span class="erro">&nbsp;&nbsp;*</span>&nbsp; Campo de preenchimento obrigatório</p>
		<?php
		}
		?>
    </div>
</body>
</html>
