<!DOCTYPE html>
<html lang="es">
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="html5,css,php,sql"/>
	<link rel="stylesheet" type="text/css" href="css/inicio.css"/>
	<title>Pagina Oficial</title>
</head>
<body>
 <header>
    <h1>Iniciar Sesion</h1>
  </header>
        
  	<form action="validar.php" method="POST" >
		            
		<section>
			<h3>Nombre Usuario</h3>
			  <input type="text" name="nombre" placeholder="Nombre Usuario" required class="botones"/>
		</section>

   <section>
			<h3>Contraseña</h3>
			 <input type="passsword" name="password" placeholder="Contraseña" required class="botones"/>
			<br>
		</section>

			<input type="submit" value="Iniciar" class="boton"/>
		</form>  

		<!-- <a href="#"><input type="button" name="registro" value="Olvide mi clave/ Regenerar mi clave" class="botones"/></a> -->
		<a href="#">"Olvide mi clave/ Regenerar mi clave"</a><br>

<a href="index.html"><input type="button" name="registro" value="Volver al inicio" class="botones"/></a>

</body>
</html>