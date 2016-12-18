<div class="container">      
	<div class="page-header">
		<h1>Listagem de Utilizadores</h1>
	</div>
	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=3">
				<button type='button' class='btn btn-sm btn-success'>Registar</button>
			</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Nivel de Acesso</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> 
						<!-- idutilizador serve para visualizar a informação do utilizador  -->
						<a href='administrativo.php?link=5'>
							<button type='button' class='btn btn-sm btn-primary'>Visualizar</button>
						</a>

						<a href='administrativo.php?link=4'>
							<button type='button' class='btn btn-sm btn-warning'>Editar</button>
						</a>
						
						<button type='button' class='btn btn-sm btn-danger'>Apagar</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div> <!-- /container -->