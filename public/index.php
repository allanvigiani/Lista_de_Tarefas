<?php

	$acao = 'listar_pendentes';
	require '../scripts/tarefa_controller.php';

?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD Lista de Tarefas </title>

		<link rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					CRUD Lista de Tarefas
				</a>
				<a href="#" onclick="mostrarTutorial()" id="btn-tutorial">
					<img src="https://img.icons8.com/material-outlined/24/000000/info.png" id="tutorial"/>
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Tarefas pendentes</h4>
								<hr />

								<?php foreach ($tarefas_pendentes as $key => $tarefa_pendente) {
									if ($tarefa_pendente->status == 'pendente') {
								?>

									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9"><?= $tarefa_pendente->tarefa ?></div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<a href=""><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
											<a href=""><i class="fas fa-edit fa-lg text-info"></i></a>
											<a href=""><i class="fas fa-check-square fa-lg text-success"></i></a>
										</div>
									</div>
								
									<!-- TODO implementar uma mensagem de nenhuma tarefa pendente -->

									<?php } ?>

								<?php }  ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="../js/tutorial.js"></script>
</html>