<?php

	session_start();

	$utilizador = $_POST['utilizador'];
	$senhat = $_POST['senha'];

	$dados = array(idutilizador =>1, nome=>"Adelino Amaral", nivel_acesso_id=>1, login=>adelino, senha=>"123");

	//var_dump($dados);
	//exit;

	//echo "Usuario: ".$dados['nome'];
	if(empty($dados)){
		
		//Mensagem de Erro
		$_SESSION['loginErro'] = "Utilizador ou senha Inválido";

		//Manda o utilizador para a janela de login
		header("Location: index.php");
		
	}else{
		//Define os valores atribuidos na sessao do utilizador
		$_SESSION['userId'] 			= $dados['idutilizador'];
		$_SESSION['userNome'] 			= $dados['nome'];
		$_SESSION['userNivelAcesso'] 	= $dados['nivel_acesso_id'];
		$_SESSION['userLogin'] 			= $dados['login'];
		$_SESSION['userSenha'] 			= $dados['senha'];
		

		if($_SESSION['userNivelAcesso'] == 1){
			header("Location: administrativo.php?link=0");
			
		}else{
			header("Location: utilizador.php");
		}
	}
?>