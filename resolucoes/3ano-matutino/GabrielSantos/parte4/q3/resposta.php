<?php 

	/* 

	 * 3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.

	*/

	$sabores = $_POST["sabores"] ?? "";

?>

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
		<div class="box resposta">
			<h2>Resposta</h2>
			<p> Segue abaixo a lista dos sabores escolhidos:
				<ul>
				<?php
					foreach ($sabores as $sabor){
						echo "<li> {$sabor} </li> ";
					}
				?>	
				</ul>

			</p>
				
            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>