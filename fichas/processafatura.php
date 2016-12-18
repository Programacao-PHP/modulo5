<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Processa Fatura</title>
    <style type="text/css" media="screen">
		.numero { font-weight: bold;}
	</style>
</head>

<body>
<?php

    if(isset($_POST['enviado']))
    {
        // Get the values from the $_POST array:
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $desconto = $_POST['desconto'];
        $transporte = $_POST['transporte'];

        // define as constantes IVA e NUMMAX
        define('IVA', 23);
		define('NUMMAX', 99999);

        // Calculate the total:
        $total = (($preco * $quantidade) + $transporte) - $desconto;

        // Determine o iva em percentagem:
        $iva = IVA/100;
        $iva++; // soma 1 unidade para podermos multiplicar

        // Soma o iva ao total da fatura
        $total = $total * $iva;

        // Formata o total com duas casas decimais
        $total = number_format ($total, 2);

        // Imprime os resultados
        echo addslashes('<p>Detalhes da compra:<br />
            <span class="numero">' . $quantidade . '</span> produtos, cada um custa 
            <span class="numero">' . $preco . '</span>€.<br /> O transporte custa
            <span class="numero">' . $transporte . '</span>€.<br /> A taxa do IVA é 
            <span class="numero">'. IVA . '</span>%.<br />
            Teve um desconto de <span class="numero">' . $desconto . '</span>€. <br />O total da fatura é:
            <span class="numero">' . $total . '</span>.<br />      
            </p>');

        // cria um número aleatório entre 1 e 99999
        $sorte = rand (1, NUMMAX);
        echo "<p>A factura da sorte é:<b> $sorte </b></p>";
        
        exit(0);
    }
    
?>
    
    <p>Preencha os campos da fatura</p>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

        <p>Preço: <input type="text" name="preco" size="5" /></p>
        <p>Quantidade: <input type="text" name="quantidade" size="5" /></p>
        <p>Desconto: <input type="text" name="desconto" size="5" /></p>

        <p>Despesas de transporte: 
        <select name="transporte">
            <option value="5.00">Até 5Kg</option>
            <option value="8.00">Até 10Kg.</option>
            <option value="15.00">Mais de 10Kg</option>
        </select>
        </p>

        <input type="submit" name="submit" value="Calcular!" />
        <input type="hidden" name="enviado" value="TRUE" />
        
    </form>
</body>
</html>
