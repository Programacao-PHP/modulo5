<?php
	//include_once("ligacao.php");
	$id = $_GET['id'];
?>

<div class="container" role="main">      
  <div class="page-header">
	<h1>Editar Utilizador</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $id; ?>'>
				<button type='button' class='btn btn-md btn-info'>Listar</button>
			</a>
		</div>
	</div>
	
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="">
	  
		  <div class="form-group">
		  	<div class="col-md-1"><label for="inputNome" class="control-label">Nome</label></div>
			
			<div class="col-md-11">
			  <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome Completo..." value="">
			</div>
		  </div>
		  
		  <div class="form-group">
		  	<div class="col-md-1">
		  		<label for="inputEmail" class="control-label">Email</label>	
		  	</div>
			<div class="col-md-11">
			  <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email..." value="">
			</div>
		  </div>
		  
		  <div class="form-group">
		  	<div class="col-md-1">
		  		<label for="inputLogin" class="control-label">Utilizador</label>
		  	</div>
			<div class="col-md-11">
			  <input type="text" class="form-control" name="utilizador" id="inputLogin" placeholder="Utilizador" value="">
			</div>
		  </div>
		  
		  <div class="form-group">
		  	<div class="col-md-1">
		  		<label for="inputPassword" class="control-label">Senha</label>	
		  	</div>
			<div class="col-md-11">
			  <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="Senha">
			</div>
		  </div>
		  
		  <div class="form-group">
		  	<div class="col-md-1">
		  		<label for="inputPassword3" class="control-label">Nivel de Acesso</label>
		  	</div>
			<div class="col-md-11">
			  <select class="form-control" name="nivel_de_acesso">
					<option>Selecione</option>
					<option value="1">Administrativo</option>
					<option value="2">Utilizador</option>
				</select>
			</div>
		  </div>
		  
		  
		  <div class="form-group">
			<div class="col-md-offset-1 col-md-11">
		  	  <input type="hidden" name="id" value="<?php echo $id; ?>">
			  <button type="submit" class="btn btn-success">Gravar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

