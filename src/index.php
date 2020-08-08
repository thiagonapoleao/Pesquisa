<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tratativa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width" scale="1">
	<!-- Adicionando JQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>

<body>
	<header>

	</header>

	<div>

		<section id="corpo">
			<!-- tag <section> barra principal da pagina-->
			<article id="noticia-principal">
				<div class="container" style="margin-left: 80px">
					<form action="#" id="formSearch" class="needs-validation" novalidate>
						<div class="col-sm-3 mb-1" style="margin-top: 20px">
							<input type="date" name="data" id="data" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
						</div>
						<div align="center">
							<div class="form-row">
								<div class="col-sm-2 mb-1">
									<label for="validationServer01">Codigo</label>
									<input type="number" name="codigo" id="codigo" class="form-control" onblur="myFunction()">
								</div>
								<div class="col-sm-2 mb-1">
									<label for="validationServer02">T.Erro</label>
									<input type="number" name="terro" id="terro" class="form-control">
								</div>
								<div class="col-sm-2 mb-1">
									<label for="validationServer03">Quantidade</label>
									<input type="number" name="quantidade" id="quantidade" class="form-control">
								</div>
								<div class="col-sm-2 mb-1">
									<label for="validationServer04">Estação</label>
									<input type="number" name="estacao" id="estacao" class="form-control">
								</div>
								<div class="col-sm-2 mb-1">
									<label for="validationServer05">Rota</label>
									<input type="number" name="rota" id="rota" class="form-control">
								</div>
								<div class="col-sm-2 mb-1">
									<label for="validationServer06">Nome</label>
									<input type="text" name="nome" id="nome" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<button type="submit" class="btn btn-primary">Salvar</button>
							</div>
						</div>

					</form>
				</div>
			</article>
		</section>
	</div>

	<script>
		document.getElementById("codigo").onblur = function() {
			myFunction()
		};

		function myFunction() {
			alert("Input field lost focus.");
			$("#formSearch").submit(function(e) {
				e.preventDefault();

				$.ajax({
					url: 'search.php',
					type: 'post',
					dataType: 'json',
					data: {
						searchAdress: 1,
						codigo: $("#codigo").val()
					}
				}).done(function(data) {
					if (data) {
						$("#nome").val(data.nome);
					} else {
						$("#nome").val("");
					}
				}).fail(function(data) {
					console.log(data)
				})
			});
		}
	</script>

</body>

</html>