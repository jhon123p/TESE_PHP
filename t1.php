<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Questão 1</title>
</head>
<body>
	<form method="post">
		<label>Informe sua idade:</label>
		<input type="text" name="idade">
		<input type="submit" name="enviar">
	</form>
	<?php
	  if (isset($_POST['enviar'])) {
	  	$idade = $_POST['idade'];
	  }
		
		if ($idade >= 10 and $idade <= 14){
			echo "Infantil";
		}
		if ($idade > 14 and $idade <= 17) {
			echo "Juvenil";
		}
		if ($idade > 17 and $idade <= 25) {
			echo "adulto";
		}
	?>
</body>
</html>