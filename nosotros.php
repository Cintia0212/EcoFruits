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
                  <a href="nosotros.php">Sobre Nosotros</a>
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
		 <title>Sobre Nosotros - Natural Bites</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            animation: fadeIn 2s;
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
        }
        h2 {
            font-size: 2em;
            margin: 20px 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 15px;
            overflow: hidden;
            transition: transform 0.3s;
            width: 30%;
            position: relative;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h3 {
            margin: 10px 0;
        }
        .card-content p {
            font-size: 1em;
            line-height: 1.6;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <header>
        <h1>Sobre Nosotros</h1>
        <p>Natural Bites - Snaks saludables y deliciosos para todos</p>
    </header>

    <div class="container">
        <div class="card">
            <img src="https://example.com/imagen1.jpg" alt="Natural Bites 1">
            <div class="card-content">
                <h3>Nuestra Misión</h3>
                <p>En NaturalBites, nuestra misión es transformar la forma en que las personas 
				se relacionan con la alimentación, promoviendo un estilo de vida saludable y sostenible.
				Creemos firmemente que la naturaleza nos ofrece los mejores ingredientes y que, al elegir
				productos frescos y naturales, no solo cuidamos de nuestra salud, sino también del planeta.</p>
            </div>
        </div>
        <div class="card">
            <img src="https://example.com/imagen2.jpg" alt="Natural Bites 2">
            <div class="card-content">
                <h3>Calidad y Sostenibilidad</h3>
                <p>En NaturalBites, entendemos que la calidad y la sostenibilidad son fundamentales para ofrecer 
				productos que no solo satisfacen, sino que también respetan nuestro planeta. 
				Nos comprometemos a seleccionar ingredientes de la más alta calidad, asegurando que cada bocado
				sea una experiencia deliciosa y nutritiva.</p>
            </div>
        </div>
        <div class="card">
            <img src="https://example.com/imagen3.jpg" alt="Natural Bites 3">
            <div class="card-content">
                <h3>Innovación en Sabor</h3>
                <p>En NaturalBites, la innovación del sabor es nuestra pasión. Nos esforzamos por crear combinaciones 
				únicas de ingredientes que sorprendan y deleiten el paladar. Al fusionar sabores tradicionales con 
				toques modernos, ofrecemos experiencias gastronómicas que no solo son deliciosas, sino también 
				nutritivas y sostenibles. Cada producto es una invitación a disfrutar de una alimentación 
				saludable y emocionante.</p>
            </div>
        </div>
    </div>

   

</body>
		 
		 
		
      <footer>
         <p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
      </footer>
      <script src="scripts.js"></script>
   </body>
</html>