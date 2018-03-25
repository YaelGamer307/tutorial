<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Ejemplo de HTML5">
		<meta name="keywords" content="HTML5, CSS3, JavaScript">
		<title>Este texto es el título del documento</title>
		<link rel="stylesheet" href="style.css">
	</head>
		<body>
			<div id="agrupar">
				<header id="cabecera">
					<h1>El Mundo de la Programacion</h1>
				</header>
				<nav id="menu">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="quienesomos.html">¿Quienes somos?</a></li>
						<li><a href="galeria.html">Fotos y Videos</a></li>
						<li><a href="publicar.html">Publicar</a></li>
						<li><a href="contacto.html">Contacto</a></li>
					</ul>
				</nav>
				<section id="seccion">
					<article>
						<header>
							<hgroup>
								<h1>Formulario</h1>
								<h2>Datos Personales</h2>
							</hgroup>
						</header>
						<form name="datos" action="frmDatos.php" method="POST">
							<center><label name="nombre">Ingresa tu nombre</label>:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nombre" required></center><br />
							<center><laber name="edad">Ingresa tu edad</label>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="edad" pattern="[1-100]" required></center><br />
							<br /><center><input type="submit" value="Enviar">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Limpiar"></center><br />
						</form>
						<?php
							if(isset($_GET["nombre"]) && isset($_GET["edad"])){
								$nombre=$_GET["nombre"];
								$edad=$_GET["edad"];
								if($_GET["edad"]>=18){
									echo '<center><p id="aceptado"><br /><br />Hola ',$nombre,' tu fuiste aceptado por tener ',$edad,' años<br /><br /></p></center>';
								}else{
									echo '<center><p id="noaceptado"><br /><br />Hola ',$nombre,' tu no fuiste aceptado por tener ',$edad,' años<br /><br /></p></center>';
								}
							}else{
								echo '<center><p id="noaceptado"><br /><br />Debes ingresar tu nombre y tu edad para ser aceptado<br /><br /></p></center>';
							}
						?>
						<footer>
							<p>comentarios (0)</p>
						</footer>
					</article>
					<article>
						<header>
							<hgroup>
								<h1>Título del mensaje dos</h1>
								<h2>Subtítulo del mensaje dos</h2>
							</hgroup>
							<time datetime="2011-12-15" pubdate>publicado 15-12-2011</time>
						</header>
						Este es el texto de mi segundo mensaje
						<footer>
							<p>comentarios (0)</p>
						</footer>
					</article>
		 		</section>
		 		<aside id="columna">
		 			<blockquote>Mensaje número uno</blockquote>
		 			<blockquote>Mensaje número dos</blockquote>
		 		</aside>
		 		<footer id="pie">
		 			Derechos Reservados &copy; 2010-2011
		 		</footer>
			</div>
	</body>
</html>