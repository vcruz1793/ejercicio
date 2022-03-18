<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

	<h3 class="color_header">Bienvenido al panel administrador</h3>

	<form action="recibe.php" method="post">
		<p class="color_header">Email</p>
		<input type="email" name="email">
		<p class="color_header">Contraseña</p>
		<input type="password" name="pwd">
		<br>
		<br>
		<input type="submit" value="LOGIN">
	</form>
</body>
</html>
