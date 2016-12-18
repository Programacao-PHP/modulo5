<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Valida Formulário</title>
	<style>
		.erro {color: #FF0000;}
	</style>
</head>
<body>

<?php
// define as variáveis e atribui-lhe um valor vazio
$nomeErr = $emailErr = $sexoErr = $websiteErr = "";
$nome = $email = $sexo = $comentario = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
   if (empty($_POST["nome"])) {
     $nomeErr = "Nome é requirido";
   } else {
     $nome = testa_input($_POST["nome"]);
     // check if nome only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
       $nomeErr = "Apenas são permitidas letras e espaços em branco";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Email é requirido";
   } else {
     $email = testa_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Formato do email inválido";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = testa_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "URL inválido";
     }
   }

   if (empty($_POST["comentario"])) {
     $comentario = "";
   } else {
     $comentario = testa_input($_POST["comentario"]);
   }

   if (empty($_POST["sexo"])) {
     $sexoErr = "sexo é requirido";
   } else {
     $sexo = testa_input($_POST["sexo"]);
   }
}

function testa_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Validação do Formulário</h2>
<p><span class="erro">* campo requrido.</span></p>
	
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Nome: <input type="text" name="nome" value="<?php echo $nome;?>">
   <span class="erro">* <?php echo $nomeErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="erro">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="erro"><?php echo $websiteErr;?></span>
   <br><br>
   Comentário: <textarea name="comentario" rows="5" cols="40"><?php echo $comentario;?></textarea>
   <br><br>
   Sexo:
   <input type="radio" name="sexo" <?php if (isset($sexo) && $sexo=="feminino") echo "checked";?>  value="feminino">Feminino
   <input type="radio" name="sexo" <?php if (isset($sexo) && $sexo=="masculino") echo "checked";?>  value="masculino">Masculino
   <span class="erro">* <?php echo $sexoErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Enviar">
</form>

<?php
echo "<h2>Resumo dos dados inseridos:</h2>";
echo $nome;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comentario;
echo "<br>";
echo $sexo;
?>

</body>
</html>