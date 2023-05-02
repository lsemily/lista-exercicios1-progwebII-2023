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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Valor de a:
					<input type="number" id="a" name="a" required>
				</label>
                <label>Valor de b:
					<input type="number" id="b" name="b" required>
				</label>
                <label>Valor de c:
					<input type="number" id="c" name="c" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
		</div>
	</div>
</body>
</html>