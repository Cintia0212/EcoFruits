<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrita de Fresa y Pera - Natural Fruits S.L.S</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="scripts.js">
    // Función para desplazar la vista suavemente a la tienda al cargar
    function desplazarseAContenidoProducto() {
        setTimeout(() => {
            const contenidoProducto = document.querySelector(".contenido-producto");
            if (contenidoProducto) {
                contenidoProducto.scrollIntoView({ behavior: 'smooth' });
            }
        }, 100); // Espera un breve momento
    }

    document.addEventListener("DOMContentLoaded", function() {
        desplazarseAContenidoProducto(); // Llama a la función al cargar la página
    });
</script>
</head>
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
<body>
	<div class="carrusel">
		<div class="carrusel-contenedor">
				<img src="img/carrusel/imagen1.jpg" class="carrusel-imagen" alt="Imagen 1">
				<img src="img/carrusel/imagen2.jpg" class="carrusel-imagen" alt="Imagen 2">
				<img src="img/carrusel/imagen3.jpg" class="carrusel-imagen" alt="Imagen 3">
				<img src="img/carrusel/imagen4.jpg" class="carrusel-imagen" alt="Imagen 4">
				<img src="img/carrusel/imagen5.jpg" class="carrusel-imagen" alt="Imagen 5">
				<img src="img/carrusel/imagen6.jpg" class="carrusel-imagen" alt="Imagen 6">
				<img src="img/carrusel/gif.gif" class="carrusel-imagen" alt="Imagen 7">
			</div>
		<div class="carrusel-boton">
			<a href="#tienda" class="btn-descubrir" onclick="mostrarSeccion('tienda');">Descubrir productos</a>
		</div>
	</div>
    <section id="tienda" class="section">
		<div id="titulo-productos" class="titulo-productos">
			<h2>Productos Ecológicos</h2>
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
		<div id="contenido-producto" class="contenido-producto">
			<h1>Avena Rellenas de Fresa y Pera (Sin Gluten, Sin Lactosa)</h1>
			<div class="producto-detalle">
				<img src="img/productos/barritas-fruta/barrita-fresa-pera.jpg" alt="Barrita de Fresa y Pera" class="imagen-producto">
				<div class="descripcion-producto">
					<h2>Descripción del Producto</h2>
					<p>Descubre nuestra barrita de avena rellena de fresa y pera, diseñada para ser un snack saludable y delicioso. Perfecta para cualquier momento del día.</p>
					
					<div class="caracteristicas">
						<h3>Características Destacadas:</h3>
						<ul>
							<li>Sin Gluten</li>
							<li>Sin Lactosa</li>
							<li>Alta en fibra</li>
							<li>Natural y libre de conservantes</li>
						</ul>
					</div>
					
					<div class="codigo-referencia">
                       <p> Código de referencia de caja de 6: DUB001-6 </p>
					   <p> Código de referencia de caja de 24: DUB001-24 </p>
                    </div>

                    <div class="precios-prod">
                        <div class="precio-individual">
                            <span class="tipo-producto">Caja de 6: </span> 2,95€
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                        <div class="precio-individual">
                            <span class="tipo-producto">Caja de 24: </span> 11,80 €
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>

					<p class="precio"><strong>Elige tu opción y disfruta de un snack saludable.</strong></p>
				</div>
			</div>
			
			<div class="botones">
				<a href="index.php#tienda" class="btn-descubrir">Volver a la Tienda</a>
			</div>
		</div>
	</section>
	<section id="contacto" class="section" style="display: none;">
		<h2>Contacto</h2>
		<p>Información sobre cómo contactarnos.</p>
	</section>
    <footer>
        <p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
    </footer>
</body>
</html>