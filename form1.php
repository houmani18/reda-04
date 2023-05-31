<!DOCTYPE html>
<html>
<head>
	<title>Formulario en PHP</title>
</head>
<body>
	<form method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="mensaje">Mensaje:</label>
		<textarea id="mensaje" name="mensaje"></textarea><br><br>
		<input type="submit" value="Enviar">
	</form>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    ?>
</body>
</html>