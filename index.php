<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>Natural Fruits S.Coop.S - Índice</title>
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
    <section id="tienda" class="section" style="display: none;">
        <div id="titulo-productos" class="titulo-productos">
            <h2>Productos Ecológicos</h2>
        </div>
        <nav>
            <ul class="submenu"> <!-- Inicialmente oculto -->
                <li>
                    <a href="#barritas" onclick="mostrarSubseccion('barritas');">Barritas de fruta</a>
                </li>
                <li>
                    <a href="#fruta-deshidratada" onclick="mostrarSubseccion('fruta-deshidratada');">Fruta deshidratada</a>
                </li>
                <li>
                    <a href="#maquinas-vending" onclick="mostrarSubseccion('maquinas-vending');">Máquinas de vending</a>
                </li>
            </ul>
        </nav>
        <section id="barritas" class="subseccion" style="display: none;">
            <div id="productos">
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/barritas-fruta/barrita-fresa-pera.jpg" alt="Producto" />
                        <p>Avena rellenas de fresa y pera (sin gluten, sin lactosa)</p>
                        <div>
                            <a href="barrita-fresa-pera.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/barritas-fruta/barrita-albaricoque-ciruelas.jpg" alt="Producto">
                        <p>Barrita de cereal con albaricoque, ciruelas y limón (Con chocolate blanco)</p>
                        <div>
                            <a href="barrita-albaricoque-ciruelas.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/barritas-fruta/barrita-manzana-canela.jpg" alt="Producto">
                        <p>Barrita de avena y manzana con canela (chocolate)</p>
                        <div>
                            <a href="barrita-manzana-canela.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/barritas-fruta/barrita-multifrutas.jpg" alt="Producto">
                        <p>Barritas de cereal multifrutas (Con azúcar)</p>
                        <div>
                            <a href="barrita-cereal-multifruta.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fruta-deshidratada" class="subseccion" style="display: none;">
            <div id="productos">
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/fruta-deshidratada/manzana-deshidratada.jpg" alt="Producto">
                        <p>Manzana Deshidratada</p>
                        <div>
                            <a href="manzana-deshidratada.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/fruta-deshidratada/pera-deshidratada.jpg" alt="Producto">
                        <p>Pera Deshidratada</p>
                        <div>
                            <a href="pera-deshidratada.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/fruta-deshidratada/moras-deshidratadas.jpg" alt="Producto">
                        <p>Moras deshidratadas</p>
                        <div>
                            <a href="moras-deshidratadas.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/fruta-deshidratada/mix-fruta-deshidratada.jpg" alt="Producto">
                        <p>Mix frutas deshidratadas</p>
                        <div>
                            <a href="mix-frutas-deshidratadas.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="maquinas-vending" class="subseccion" style="display: none;">
            <div id="productos">
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/vending/maquina-vending.jpg" alt="Producto">
                        <p>Maquina de vending</p>
                        <div>
                            <a href="maquina-vending-snack.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-content">
                        <img src="img/productos/vending/maquina-vending.jpg" alt="Producto">
                        <p>Maquina de vending</p>
                        <div>
                            <a href="maquina-vending-frutas.php" class="btn-mas-informacion">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
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
    <script src="scripts.js"></script>
</body>
</html>