<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Criar e acesso ao array</title>
</head>

<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<?php

    $meses = array (1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

    // Cria os arrays dias e anos:
    $dias = range (1, 31);
    $anos = range (1980, 2017);

    echo '<select name="dia">';

    foreach ($dias as $valor) {
        echo "<option valor=\"$valor\">$valor</option>\n";
    }
    echo '</select>';

    echo '<select name="mes">';
    foreach ($meses as $key => $valor) {
        echo "<option valor=\"$key\">$valor</option>\n";
    }
    echo '</select>';

    echo '<select name="ano">';
    foreach ($anos as $valor) {
        echo "<option valor=\"$valor\">$valor</option>\n";
    }
    echo '</select>';

?>
</form>
</body>
</html>