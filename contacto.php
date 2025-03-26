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
                  <a href="contacto.php">Contacto</a>
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
                  <a href="#fruta-deshidratada" onclick="mostrarSubseccion('barritas');">Barritas de fruta</a>
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
            <!-- Display por defecto -->
            <div id="productos">
               <div class="product">
                  <div class="product-content">
                     <img src="img/productos/barrita-fresa-pera.jpg" alt="Producto" />
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
                        <a href="barrita-cereal-multifruta.php" class="btn-mas-informacion">Más Información</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="fruta-deshidratada" class="subseccion" style="display: none;">
            <div id="productos">
            <div class="product">
               <div class="product-content">
                  <img src="img/productos/fruta-deshidradata.jpg	" alt="Producto">
                  <p>Manzana Deshidratada</p>
                  <div>
                     <a href="manzana-deshidratada.php" class="btn-mas-informacion">Más Información</a>
                  </div>
               </div>
            </div>
            <div class="product">
               <div class="product-content">
                  <img src="img/productos/fruta-deshidradata.jpg	" alt="Producto">
                  <p>Pera Deshidratada</p>
                  <div>
                     <a href="pera-deshidratada.php" class="btn-mas-informacion">Más Información</a>
                  </div>
               </div>
            </div>
            <div class="product">
               <div class="product-content">
                  <img src="img/productos/fruta-deshidradata.jpg	" alt="Producto">
                  <p>Moras Deshidratadas</p>
                  <div>
                     <a href="moras-deshidratadas.php" class="btn-mas-informacion">Más Información</a>
                  </div>
               </div>
            </div>
            <div class="product">
               <div class="product-content">
                  <img src="img/productos/fruta-deshidradata.jpg	" alt="Producto">
                  <p>Mix de Frutas Deshidratadas</p>
                  <div>
                     <a href="mix-frutas-deshidratadas.php" class="btn-mas-informacion">Más Información</a>
                  </div>
               </div>
            </div>
         </section>
         <section id="maquinas-vending" class="subseccion" style="display: none;">
            <div id="productos">
               <div class="product">
                  <div class="product-content">
                     <img src="img/productos/maquina-vending.jpg" alt="Producto">
                     <p>Maquina de vending</p>
                     <div>
                        <a href="maquina-vending-snack.php" class="btn-mas-informacion">Más Información</a>
                     </div>
                  </div>
               </div>
               <div class="product">
                  <div class="product-content">
                     <img src="img/productos/maquina-vending.jpg" alt="Producto">
                     <p>Maquina de vending</p>
                     <div>
                        <a href="maquina-vending-frutas.php" class="btn-mas-informacion">Más Información</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <title>Contáctanos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
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
        #map {
            width: 100%;
            height: 300px; /* Altura del mapa */
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
			+34 123 456 789</p>
            <p><strong>Correo Electrónico:</strong> <br>
			<a href="mailto:ecofruits.sefed@gmail.com">ecofruits.sefed@gmail.com</a></p>
            <p><strong>Horario de Atención:</strong><br>
			Lunes 8:00 AM - 3:00 PM</p><br><br>
			<div class="letrero">NUEVA LINEA!</div><br>
			<div class="letrero1"><p><b>Disfruta de nuestra nueva linea de EcoFruits estamos en lanzamiento!.<br>
			No te quedes sin probar nuestros productos de NATURALBITES es lo mejor!🍎🫐🍑🍐
			</div></b></p>
        </div>
        
        <div class="box">
            <h2>Ubicación</h2>
            <div id="map"></div>
        </div>
    </div>

    <script>
        function initMap() {
            var location = { lat: 41.6177, lng: 0.6280 }; // Coordenadas de Lleida
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

	  

      <footer>
         <p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
      </footer>
      <script src="scripts.js"></script>
	  
	  
	  
   </body>
</html>