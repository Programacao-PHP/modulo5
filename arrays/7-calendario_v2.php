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

    echo '<select name="dia">';

    for($dia=1; $dia <= 31; $dia++) {
        echo "<option valor=\"$dia\">$dia</option>\n";
    }
    echo '</select>';

    echo '<select name="mes">';
    foreach ($meses as $key => $valor) {
        echo "<option valor=\"$key\">$valor</option>\n";
    }
    echo '</select>';

    echo '<select name="ano">';
    for ($anos=1980; $anos <= 2018; $anos++) {
        echo "<option valor=\"$anos\">$anos</option>\n";
    }
    echo '</select>';

?>
</form>
</body>
</html>