<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Natural Fruits S.L.S - Índice</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<header>
			<div class="logo-container">
				<img src="img/main/logo.png" alt="Tienda Ecológica" class="logo">
			</div>
			<nav>
				<ul class="menu">
					<li>
						<a href="index.php#tienda" onclick="mostrarSeccion('tienda'); mostrarSubseccion('barritas');">Productos</a>
					</li>
					<li>
						<a href="nosotros.php" onclick="mostrarSeccion('sobre-nosotros');">Sobre Nosotros</a>
					</li>
					<li>
						<a href="contacto.php">Contacto</a>
					</li>
				</ul>
				<div class="reloj-container">
					<p class="hora" id="reloj"></p>
				</div>
			</nav>
		</header>
		<div class="carrusel">
			<div class="carrusel-contenedor">
				<img src="img/carrusel/imagen1.jpg" class="carrusel-imagen" alt="Imagen 1">
				<img src="img/carrusel/imagen2.jpg" class="carrusel-imagen" alt="Imagen 2">
				<img src="img/carrusel/imagen3.jpg" class="carrusel-imagen" alt="Imagen 3">
				<img src="img/carrusel/imagen4.jpg" class="carrusel-imagen" alt="Imagen 4">
				<img src="img/carrusel/imagen5.jpg" class="carrusel-imagen" alt="Imagen 5">
				<img src="img/carrusel/imagen6.jpg" class="carrusel-imagen" alt="Imagen 6">
				<img src="img/carrusel/gif.gif" class="carrusel-imagen" alt="Imagen 6">
			</div>
			<div class="carrusel-boton">
				<a href="index.php#barritas" onclick="mostrarSeccion('tienda'); mostrarSubseccion('barritas');" class="btn-descubrir">Descubrir productos</a>
			</div>
		</div>
		<section id="contacto">
        <div id="titulo-productos" class="titulo-productos">
            <h2>Contáctanos</h2>
        </div>
		<div class="container">
        <div class="box">
            <div class="info-container">
                <h2>Información de Contacto</h2>
                <p><strong>Teléfono:</strong><br>
                    +34 973 24 20 00 ext. 127
                </p>
                <p><strong>Correo Electrónico:</strong> <br>
                    <a href="mailto:ecofruits.sefed@gmail.com">ecofruits.sefed@gmail.com</a>
                </p>
                <p><strong>Horario de Atención:</strong><br>
                    Lunes 8:00 AM - 3:00 PM
                </p>
                <br><br>
                <div class="letrero">NUEVA LINEA!</div>
                <br>
                <div class="letrero1">
                    <p><b>Disfruta de nuestra nueva línea de EcoFruits estamos en lanzamiento!.<br>
                        No te quedes sin probar nuestros productos de NATURALBITES es lo mejor!🍎🫐🍑🍐
                    </b></p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="map-container">
                <h2>Ubicación</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2982.307438286832!2d0.6380334117468935!3d41.62748567115059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a6e059229891cd%3A0xf2b680a2bc368bc2!2sInstituto%20Municipal%20de%20Ocupaci%C3%B3n%20Salvador%20Segu%C3%AD!5e0!3m2!1ses!2ses!4v1742981095421!5m2!1ses!2ses" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
		</div>
		</section>
			<footer>
				<p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
			</footer>
			<script src="scripts.js"></script>
	</body>
</html>