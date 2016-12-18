<?php
	// necessita da sessão
	session_start();

	// Atribui o título à página: header.html
	define('TITLE', 'Bem-vindo ao clube ESEN!');
	include('templates/header.html'); 

	echo "<h2>Bem-vindo ao clube ESEN!</h2>";
	echo "<p>Olá, " . $_SESSION['email'] . "!</p>";

	// Visualiza a hora de entrada no sistema logged in:
	date_default_timezone_set('Europe/Lisbon');
	echo '<p>Entrou no sistema às: ' . date('g:i a', $_SESSION['loggedin']) . '</p>';


	echo "<p><a href=\"logout.php\">Logout.</a></p>";

	include('templates/footer.html');
?>
