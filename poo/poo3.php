<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>POO</title>
</head>
<body>
	<?php
		class anonima {
			public $nome;

			public function __construct()
			{

				$this->nome = function (){
					return "Adelino";
				};
			}

		}

		$adelino = new anonima();

		$lino = $adelino->nome;
		echo $lino();
	?>

	<?php echo $_SERVER['REMOTE_PORT'] . " - " . $_SERVER['SERVER_PORT']; ?>
</body>
</html>

