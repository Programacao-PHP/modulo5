   
	<?php
		include_once("header.php");
		include_once("menu_admin.php");

	  if(isset($_GET))
	  	$link = $_GET["link"];
	  else
		  $link = 0;
		

		$pagina[1] = "bem_vindo.php";		// este ficheiro devia ser a dashboard
		$pagina[2] = "listar_utilizadores.php";
		$pagina[3] = "registar_utilizador.php";
		$pagina[4] = "editar_utilizador.php";		
		$pagina[5] = "visual_utilizador.php";
		$pagina[6] = "registar_categoria.php";
		// completar
		$pagina[18] = "listar_nivel_acesso.php";
		$pagina[19] = "registar_nivel_acesso.php";
		$pagina[20] = "visual_nivel_acesso.php";
		$pagina[21] = "editar_nivel_acesso.php";
		

	  
		if(!empty($link)){
			// verifica se o ficheiro existe
			if(file_exists($pagina[$link])){
				include $pagina[$link];	// inclui o ficheiro selecionado nesta posição deste ficheiro
			}else{
				include "bem_vindo.php";
			}
		}else{
			include "bem_vindo.php";
		}

		include_once("footer.php");
	?>
