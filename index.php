<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Fruits S.L.S</title>
    <link rel="stylesheet" href="estilos.css">  <!-- Incluye el CSS aquí -->
    <script>
        // --- Script: Reloj y Carrusel ---
let indiceActual = 0;
let interval; // Para almacenar el intervalo de cambio automático

function actualizarReloj() {
    const ahora = new Date();
    const hora = ahora.toLocaleTimeString('es-ES', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    });
    document.getElementById('reloj').textContent = hora;
}

function mostrarImagen(indice) {
    const imagenes = document.querySelectorAll('.carrusel-imagen');
    const totalImagenes = imagenes.length;

    // Normaliza el índice a un valor válido
    if (indice >= totalImagenes) {
        indiceActual = 0; // Regresar al inicio
    } else if (indice < 0) {
        indiceActual = totalImagenes - 1; // Ir al final
    } else {
        indiceActual = indice; // Mostrar imagen actual
    }
    
    const desplazamiento = -indiceActual * 100; // Calcular desplazamiento
    document.querySelector('.carrusel-contenedor').style.transform = `translateX(${desplazamiento}%)`;
}

// Función para cambiar las imágenes automáticamente
function cambiarImagen(n) {
    mostrarImagen(indiceActual + n);
}

// Iniciar el carrusel
function iniciarCarrusel() {
    interval = setInterval(() => {
        mostrarImagen(indiceActual + 1);
    }, 3000); // Cambiar cada 3 segundos (3000 ms)
}

// Detener el carrusel cuando el mouse está sobre él
function detenerCarrusel() {
    clearInterval(interval);
}

// Muestra la primera imagen al cargar
// Muestra la primera imagen al cargar
document.addEventListener('DOMContentLoaded', function() {
    mostrarImagen(indiceActual);
    iniciarCarrusel();
    actualizarReloj();
    setInterval(actualizarReloj, 1000); // Inicia el reloj

    // Event listeners para pausar/setear el carrusel al interactuar con los botones
    const carrusel = document.querySelector('.carrusel');
    carrusel.addEventListener('mouseenter', detenerCarrusel);
    carrusel.addEventListener('mouseleave', iniciarCarrusel);

    // Event listener para el botón "Descubrir productos"
    const btnDescubrir = document.getElementById('btn-descubrir');

    btnDescubrir.addEventListener('click', function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
        const target = document.getElementById('titulo-productos'); // Seleccionar el objetivo

        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset; // Obtener la posición del elemento

        window.scrollTo({
            top: targetPosition, // Desplazarse hasta la posición
            behavior: 'smooth' // Desplazamiento suave
        });
    });
});	
		
    </script>
</head>
<body>

<header>
    <div class="logo-container">
        <img src="img/main/logo.png" alt="Tienda Ecológica" class="logo">  
    </div>
    <nav>
        <ul class="menu">
            <li><a href="#tienda">Productos</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
        </ul>
        <ul class="reloj-container">
            <p class="hora" id="reloj"></p>
        </ul>
    </nav>
</header>

<div class="carrusel">
    <div class="carrusel-contenedor">
        <img src="img/carrusel/imagen1.jpg" class="carrusel-imagen" alt="Imagen 1">
        <img src="img/carrusel/imagen2.jpg" class="carrusel-imagen" alt="Imagen 2">
        <img src="img/carrusel/imagen3.jpg" class="carrusel-imagen" alt="Imagen 3">
        <!-- Asegúrate de tener más imágenes si lo deseas -->
    </div>
	<div class="carrusel-boton">
        <a href="#tienda" class="btn-descubrir">Descubrir productos</a>
    </div>
</div>
<section id="tienda">
	<div id="titulo-productos" class="titulo-productos">
			<h2>Productos Ecológicos</h2>
		</div>
	<div id="productos">
		<div class="product">
			<div class="product-content">
				<img src="img/productos/barrita-fresa-pera.jpg" alt="Producto">
				<h3>Avena Rellenas de Fresa y Pera (Sin Gluten, Sin Lactosa):</h3>
				<p class="price">$99.99</p>
			</div>
			<div class="product-description">
				<p>Una combinación fresca y suave de avena con un delicioso relleno de fresa y pera, perfecta para disfrutar de un snack ligero y sin preocupaciones.</p>
			</div>
		</div>
		<div class="product">
			<div class="product-content">
				<img src="img/productos/barrita-albaricoque-ciruela.jpg" alt="Producto">
				<h3>Barrita de Cereal con Albaricoque, Ciruelas y Limón con Chocolate Blanco):</h3>
				<p class="price">$99.99</p>
			</div>
			<div class="product-description">
				<p>Una combinación fresca y suave de avena con un delicioso relleno de fresa y pera, perfecta para disfrutar de un snack ligero y sin preocupaciones.</p>
			</div>
		</div>
		<div class="product">
			<div class="product-content">
				<img src="img/productos/barrita.jpg" alt="Producto">
				<h3>Barrita de Avena y Manzana con Canela (Chocolate)</h3>
				<p class="price">$99.99</p>
			</div>
			<div class="product-description">
				<p>Una combinación fresca y suave de avena con un delicioso relleno de fresa y pera, perfecta para disfrutar de un snack ligero y sin preocupaciones.</p>
			</div>
		</div>
		<div class="product">
			<div class="product-content">
				<img src="img/productos/barrita.jpg" alt="Producto">
				<h3>Barritas de Cereal Multifruta (Con Azúcar)</h3>
				<p class="price">$99.99</p>
			</div>
			<div class="product-description">
				<p>Una combinación fresca y suave de avena con un delicioso relleno de fresa y pera, perfecta para disfrutar de un snack ligero y sin preocupaciones.</p>
			</div>
		</div>
		<!-- Agrega más productos aquí -->
	</div>
</section>
<div id="sobre-nosotros" class="quienes-somos">
    <h2>Quienes Somos</h2>
    <p>En Natural Fruits S.L.S, nos dedicamos a ofrecer productos ecológicos de la más alta calidad. Nuestra misión es proporcionar a nuestros clientes opciones saludables y sostenibles, cultivadas con amor por la naturaleza. Creemos en el poder de la naturaleza y en la importancia de cuidar el medio ambiente para las futuras generaciones.</p>
    <p>Nuestro equipo está compuesto por expertos en agricultura sostenible y nutrición, quienes trabajan arduamente para garantizar que cada producto que ofrecemos sea no solo delicioso, sino también beneficioso para la salud.</p>
    <p>Agradecemos su confianza y le invitamos a disfrutar de nuestros productos.</p>
</div>

<footer>
    <p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
</footer>
</body>
</html>
