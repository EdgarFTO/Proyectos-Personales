<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Inicia Sesión</h1>
    	<input type="email" name="correo" placeholder="Correo">
    	<input type="text" name="contraseña" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
	<a href="http://localhost/prestashop/" class="back_home">Volver a la página de Inicio</a>
	<p>¿Aun no tienes una cuenta?</p>
	<a href="http://localhost/register_cocinaslys/" class="boton">Registrate</a>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>