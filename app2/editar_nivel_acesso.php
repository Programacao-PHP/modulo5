<?php
	$id = $_GET['id'];
	
?>
<div class="container" role="main">      
  <div class="page-header">
	<h1>Editar Nivel de Acesso</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=18'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome_nivel" placeholder="Nome Completo" value="">
			</div>
		  </div>		  
		  
		  <input type="hidden" name="id" value="">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Guardar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->
