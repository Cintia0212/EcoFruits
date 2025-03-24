<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Fruits S.L.S</title>
    <link rel="stylesheet" href="estilos.css">
<script>
    let indiceActual = 0;
    let interval;

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

    function iniciarCarrusel() {
        interval = setInterval(() => {
            mostrarImagen(indiceActual + 1);
        }, 3000); // Cambiar cada 3 segundos (3000 ms)
    }

    function mostrarSeccion(seccionId) {
        const todasLasSecciones = document.querySelectorAll('.section');
        todasLasSecciones.forEach(seccion => {
            seccion.style.display = 'none'; // Ocultar todas las secciones
        });

        document.getElementById('titulo-productos').style.display = 'none'; // Ocultar título de productos

        switch (seccionId) {
            case 'tienda':
                mostrarTienda(); // Llama a mostrarTienda
                break;
            case 'contacto':
                document.getElementById('contacto').style.display = 'block';
                break;
            case 'sobre-nosotros':
                document.getElementById('sobre-nosotros').style.display = 'block';
                break;
        }

        // Desplazarse a la sección actualmente visible
        const seccionVisible = document.getElementById(seccionId);
        if (seccionVisible) {
            seccionVisible.scrollIntoView({ behavior: 'smooth' });
        }
    }

    function mostrarTienda() {
        document.getElementById('tienda').style.display = 'block';
        document.getElementById('titulo-productos').style.display = 'block'; // Muestra el título de productos
        document.querySelector('.submenu').style.display = 'flex'; // Asegúrate de que el submenú se muestra

        // Mostrar la sección "barritas" como la sección principal
        document.getElementById('barritas').style.display = 'block';
    }

    document.addEventListener('DOMContentLoaded', function () {
        mostrarImagen(indiceActual);
        iniciarCarrusel();
        actualizarReloj();
        setInterval(actualizarReloj, 1000); // Inicia el reloj

        // Event listener para los enlaces del menú
        const menuLinks = document.querySelectorAll('.menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
                const target = link.getAttribute('href').substring(1); // Obtener el ID de la sección
                mostrarSeccion(target); // Mostrar la sección correspondiente
            });
        });

        // Event listener para los enlaces del submenú
        const submenuLinks = document.querySelectorAll('.submenu a');
        submenuLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
                const target = link.getAttribute('href').substring(1); // Obtener el ID de la sección correspondiente
                
                // Ocultar todas las secciones de productos antes de mostrar el seleccionado
                const todasLasSeccionesProductos = document.querySelectorAll('#tienda .section'); // Selecciona solo las secciones hijas de tienda
                todasLasSeccionesProductos.forEach(seccion => {
                    seccion.style.display = 'none'; // Ocultar las secciones de productos
                });

                // Mostrar la sección seleccionada del submenú
                document.getElementById(target).style.display = 'block'; // Solo mostrar la sección seleccionada

                // Desplazarse a la sección seleccionada
                document.getElementById(target).scrollIntoView({ behavior: 'smooth' });
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
    </div>
    <div class="carrusel-boton">
		<a href="#tienda" class="btn-descubrir" onclick="mostrarSeccion('tienda');">Descubrir productos</a>
	</div>

</div>

<section id="tienda" class="section" style="display: none;">
<div id="titulo-productos" class="titulo-productos">
    <h2>Productos Ecológicos</h2>
	<nav>
		<ul class="submenu"> 
			<li><a href="#barritas">Barritas de fruta</a></li>
			<li><a href="#fruta-deshidratada">Fruta deshidratada</a></li>
			<li><a href="#maquinas-vending">Máquinas de vending</a></li>
		</ul>
	</nav>
    <section id="barritas" class="section">
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
                    <h3>Barrita de Cereal con albaricoque, ciruelas y limón con chocolate Blanco:</h3>
                    <p class="price">$99.99</p>
                </div>
                <div class="product-description">
                    <p>Una combinación fresca de albaricoque, ciruelas y limón cubierta con chocolate blanco, un snack ideal para cualquier momento del día.</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img src="img/productos/barrita-fresa-pera.jpg" alt="Producto">
                    <h3>Barrita de Avena y Manzana con Canela (Chocolate)</h3>
                    <p class="price">$99.99</p>
                </div>
                <div class="product-description">
                    <p>Barrita deliciosa de avena con un sabor inigualable a manzana y un toque de canela, perfecta para acompañar tu día.</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img src="img/productos/barrita-albaricoque-ciruela.jpg" alt="Producto">
                    <h3>Barritas de Cereal Multifruta (Con Azúcar)</h3>
                    <p class="price">$99.99</p>
                </div>
                <div class="product-description">
                    <p>Barritas ricas en sabor con una mezcla de frutas, ideales para un snack muy saludable y nutritivo.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="fruta-deshidratada" class="section" style="display: none;">
        <div id="productos">
            <div class="product">
                <div class="product-content">
                    <img src="img/productos/fruta-deshidratada1.jpg" alt="Producto">
                    <h3>Fruta Deshidratada Mixta (Pera, Manzana, Piña):</h3>
                    <p class="price">$79.99</p>
                </div>
                <div class="product-description">
                    <p>Una mezcla perfecta de frutas deshidratadas, ideales para un snack saludable.</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img src="img/productos/fruta-deshidratada2.jpg" alt="Producto">
                    <h3>Rodajas de Mango Deshidratado:</h3>
                    <p class="price">$89.99</p>
                </div>
                <div class="product-description">
                    <p>Deliciosas rodajas de mango deshidratado, un snack dulce y tropical.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="maquinas-vending" class="section" style="display: none;">
        <div id="productos">
            <div class="product">
                <div class="product-content">
                    <img src="img/productos/maquina-vending1.jpg" alt="Producto">
                    <h3>Máquina Vending de Snacks Saludables:</h3>
                    <p class="price">$1500.00</p>
                </div>
                <div class="product-description">
                    <p>Una máquina vending que ofrece una variedad de snacks saludables y ecológicos.</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img src="img/productos/maquina-vending2.jpg" alt="Producto">
                    <h3>Máquina Vending de Bebidas Ecológicas:</h3>
                    <p class="price">$1600.00</p>
                </div>
                <div class="product-description">
                    <p>Máquina vending dedicada a ofrecer bebidas saludables, ecológicas y refrescantes.</p>
                </div>
            </div>
        </div>
    </section>
</section>
</div>
<section id="contacto" class="section" style="display: none;">
    <h2>Contacto</h2>
    <p>Información sobre cómo contactarnos.</p>
</section>

<section id="sobre-nosotros" class="section" style="display: none;">
    <h2>Quiénes Somos</h2>
    <p>En Natural Fruits S.L.S, nos dedicamos a ofrecer productos ecológicos de la más alta calidad...</p>
</section>

<footer>
    <p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
</footer>
</body>
</html>