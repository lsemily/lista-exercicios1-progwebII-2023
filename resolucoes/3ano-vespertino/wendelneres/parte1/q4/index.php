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
		<h1>Operadores Aritiméticos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo médio de combustível</h2>
			<form action="resposta.php" method="get">
				
				<label>Distância a ser percorrida em km:
					<input type="number" name="distancia" step="0.1" required>
				</label>
				<label>Consumo médio de combustivel:
					<input type = "number" name="consumo" step="0.1" required>
				</label>
				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>