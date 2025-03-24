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
		            <a href="#tienda" onclick="mostrarSeccion('tienda');">Productos</a>
		          </li>
		          <li>
		            <a href="#sobre-nosotros">Sobre Nosotros</a>
		          </li>
		          <li>
		            <a href="#contacto">Contacto</a>
		          </li>
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
		        <img src="img/carrusel/gif.gif" class="carrusel-imagen" alt="Imagen 6">
		      </div>
		      <div class="carrusel-boton">
		        <a href="#tienda" class="btn-descubrir" onclick="mostrarSeccion('tienda');">Descubrir productos</a>
		      </div>
		    </div>
		    <section id="tienda" class="section" style="display: none;">
		      <div id="titulo-productos" class="titulo-productos">
		        <h2>Productos Ecológicos</h2>
		      </div>
		      <nav>
		        <ul class="submenu">
		          <!-- Llamamos a la función mostrarSubseccion al hacer clic -->
		          <li>
		            <a href="#barritas" onclick="mostrarSubseccion('tienda');">Barritas de fruta</a>
		          </li>
		          <li>
		            <a href="#fruta-deshidratada" onclick="mostrarSubseccion('fruta-deshidratada');">Fruta deshidratada</a>
		          </li>
		          <li>
		            <a href="#maquinas-vending" onclick="mostrarSubseccion('maquinas-vending');">Máquinas de vending</a>
		          </li>
		        </ul>
		      </nav>
		      <section id="barritas" class="subseccion" style="display: block;">
		        <!-- Display por defecto -->
		        <div id="productos">
		          <div class="product">
		            <div class="product-content">
		              <img src="img/productos/barrita-fresa-pera.jpg" alt="Producto">
		              <p>Avena Rellenas de Fresa y Pera (Sin Gluten, Sin Lactosa)</p>
		              <div>
		                <a href="barrita-fresa-pera.php" class="btn-mas-informacion">Más Información</a>
		              </div>
		            </div>
		          </div>
		          <div class="product">
		            <div class="product-content">
		              <img src="img/productos/barrita-albaricoque-ciruelas.jpg" alt="Producto">
		              <p>Barrita de Cereal con albaricoque, ciruelas y limón con chocolate Blanco:</p>
		              <div>
		                <a href="barrita-albaricoque-ciruelas.php" class="btn-mas-informacion">Más Información</a>
		              </div>
		            </div>
		          </div>
		          <div class="product">
		            <div class="product-content">
		              <img src="img/productos/barrita-manzana-canela.jpg" alt="Producto">
		              <p>Barrita de avena y manzana con canela (chocolate)</p>
		              <div>
		                <a href="barrita-manzana-canela.php" class="btn-mas-informacion">Más Información</a>
		              </div>
		            </div>
		          </div>
		          <div class="product">
		            <div class="product-content">
		              <img src="img/productos/barrita-multifrutas.jpg" alt="Producto">
		              <p>Barritas de cereal multifruta (con azúcar)</p>
		              <div>
		                <a href="barrita-manzana-canela.php" class="btn-mas-informacion">Más Información</a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </section>
		      <section id="fruta-deshidratada" class="subseccion" style="display: none;">
		        <div id="productos">
		          <div class="product">
		            <div class="product-content">
		              <img src="img/productos/fruta-deshidradata.jpg" alt="Producto">
		              <h3>Fruta Deshidratada Mixta (Pera, Manzana, Piña):</h3>
		              <p class="price">$79.99</p>
		            </div>
		            <div class="product-description">
		              <p>Una mezcla perfecta de frutas deshidratadas, ideales para un snack saludable.</p>
		            </div>
		          </div>
		        </div>
		      </section>
		      <section id="maquinas-vending" class="subseccion" style="display: none;">
		        <div id="productos">
		          <div class="product">
		            <div class="product-content">
		              <img src="img/productos/maquina-vending.jpg" alt="Producto">
		              <h3>Máquina Vending de Snacks Saludables:</h3>
		              <p class="price">$1500.00</p>
		            </div>
		            <div class="product-description">
		              <p>Una máquina vending que ofrece una variedad de snacks saludables y ecológicos.</p>
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