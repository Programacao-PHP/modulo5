<!-- Inicio navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<span class="icon-bar"></span>
			<!-- a posição link=0 não existe no ficheiro administrativo.php, evita um erro de undefined link -->
			<a class="navbar-brand" href="administrativo.php?link=0">BIO</a>
		</div>
		
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">            
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Utilizador <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="administrativo.php?link=2">Listar</a></li>
						<li><a href="administrativo.php?link=3">Registar</a></li>                
						<li><a href="administrativo.php?link=18">Nivel de Acesso</a></li>   
					</ul>
				</li>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>	<!-- ./container -->
</nav>
<!-- Fim navbar -->