<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD Lista de Tarefas</title>

		<link rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="">
					<img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					CRUD Lista de Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form method="post" action="../scripts/tarefa_controller.php?acao=inclusao">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" name="tarefa" class="form-control" placeholder="Exemplo: Lavar o carro">
									</div>
									<button type="submit" class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>

						<?php if (isset($_GET['inclusao']) && isset($_GET['inclusao']) == 'success') {?>
							
							<div class="alert alert-success text-center mb" id="bootstrap_msg">Tarefa cadastrada com sucesso!</div>
										
						<?php } ?>

						<?php if (isset($_GET['field']) && isset($_GET['field']) == 'empty') {?>
							
							<div class="alert alert-danger text-center mb" id="bootstrap_msg">Preencha o campo!</div>
										
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
		// INserção de Jquery para retirar mensagem de retorno ao inserir uma tarefa
		$().ready(function () {
			setTimeout(function() {
				$('#bootstrap_msg').hide();
			}, 2500)
    	});
	</script>
</html>