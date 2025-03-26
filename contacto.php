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
                    <a href="#barritas" onclick="mostrarSeccion('tienda'); mostrarSubseccion('barritas');">Productos</a>
                </li>
                <li>
                    <a href="#sobre-nosotros" onclick="mostrarSeccion('sobre-nosotros');">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="contacto.php">Contacto</a> <!-- Se corrigió el onclick -->
                </li>
            </ul>
            <div class="reloj-container">
                <p class="hora" id="reloj"></p> <!-- Se eliminó el ul innecesario -->
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
				<a href="#barritas" class="btn-descubrir" onclick="mostrarSubseccion('barritas');">Descubrir productos</a>
			</div>
		</div>
		</section>
		<title>Contáctanos</title>
		<style>
			.container {
			display: flex;
			justify-content: space-between;
			max-width: 1200px;
			margin: auto;
			}
			.box {
			background-color: white;
			border-radius: 8px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			padding: 20px;
			width: 48%; /* Ajusta el ancho según sea necesario */
			}
			h1 {
			text-align: center; /* Centra el texto */
			}
			h2 {
			color: #333;
			}
			.letrero {
			background-color: green;
			color: white;
			font-size: 24px;
			padding: 10px;
			text-align: center;
			border-radius: 5px;
			animation: explosion 3s forwards; /* Cambiado a forwards */
			margin: 10px 0;
			font-family: sans-serif; /* Cambia la fuente */
			text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00; /* Efecto luminoso */
			}
			@keyframes explosion {
			0% { transform: scale(1); }
			50% { transform: scale(1.2); } /* Aumenta el tamaño al 150% */
			100% { transform: scale(1); } /* Vuelve al tamaño original */
			}
			.letrero1 {
			color: green;
			font-family: sans-serif; /* Cambia la fuente */
			}
		</style>
		</head>
		<body>
			<h1>Contáctanos</h1>
			<div class="container">
				<div class="box">
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
						<p><b>Disfruta de nuestra nueva linea de EcoFruits estamos en lanzamiento!.<br>
							No te quedes sin probar nuestros productos de NATURALBITES es lo mejor!🍎🫐🍑🍐
					</div>
					</b></p>
				</div>
				<div class="box">
					<h2>Ubicación</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2982.307438286832!2d0.6380334117468935!3d41.62748567115059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a6e059229891cd%3A0xf2b680a2bc368bc2!2sInstituto%20Municipal%20de%20Ocupaci%C3%B3n%20Salvador%20Segu%C3%AD!5e0!3m2!1ses!2ses!4v1742981095421!5m2!1ses!2ses" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<footer>
				<p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
			</footer>
			<script src="scripts.js"></script>
	</body>
</html>