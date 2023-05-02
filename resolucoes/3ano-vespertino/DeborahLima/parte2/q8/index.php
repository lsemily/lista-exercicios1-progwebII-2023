<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite suas informações</h2>
			<form action = "resposta.php" method = "post">
				<label>Altura:
					<input type="number" name="alt" step = "0.01" required>
				</label>

				<label>Peso:
					<input type="number" name="peso" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>