<?php

    /* 
        Autor: Adelino Amaral
        Data: 24-09-2015
        Descrição: Este site pretende ilustrar conceitos elementares sobre templates em PHP.
    */

    // chama o ficheiro header.html
    include('templates/header.html');
	include('includes/datahora.php');

	echo data_actual_portugues();
    
?>

    <h2>Bem-vindo ao clube da ESEN!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h2>Cabeçalho Ilustrativo</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php
    // chama o ficheiro footer.html
    include('templates/footer.html');
?>