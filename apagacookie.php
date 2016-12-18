<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Apaga Cookie</title>
</head>
<body>
<p>Apagou os cookies</p>
<?php
    setcookie('nome', '');
    setcookie('idade', 50, time() - (24*3600));
?>

</body>
</html>