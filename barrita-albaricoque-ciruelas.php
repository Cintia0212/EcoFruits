<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrita de Albaricoque y Ciruelas - Natural Fruits S.L.S</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="scripts.js"></script>
    <script>
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
<body>
    <header>
        <div class="logo-container">
            <img src="img/main/logo.png" alt="Tienda Ecológica" class="logo">  
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.php#tienda">Productos</a></li>
                <li><a href="index.php#sobre-nosotros">Sobre Nosotros</a></li>
                <li><a href="index.php#contacto">Contacto</a></li>
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
            <ul class="submenu"> 
                <li><a href="index.php#barritas">Barritas de fruta</a></li>
                <li><a  href="index.php#fruta-deshidratada"> Fruta Deshidratada</a></li>
                <li><a href="index.php#maquinas-vending">Máquinas de vending</a></li>
            </ul>
        </nav>
        <div id="contenido-producto" class="contenido-producto">
            <h1><p>Barrita de Cereal con Albaricoque, <br>
			Ciruelas y Limón con Chocolate Blanco</p></h1>
            <div class="producto-detalle">
                <img src="img/productos/barrita-albaricoque-ciruelas.jpg" alt="Barrita de Albaricoque y Ciruelas" class="imagen-producto">
                <div class="descripcion-producto">
                    <h2>Descripción del Producto</h2>
                    <p>Una mezcla única de albaricoque, ciruelas y limón, con un toque de 
					chocolate blanco, ideal para los paladares más exigentes.</p>
                    
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
                       <p> Código de referencia de caja de 6: DUB002-6 </p>
					   <p> Código de referencia de caja de 24: DUB002-24 </p>
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
                    
                  
