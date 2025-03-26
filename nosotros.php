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
                    <a href="index.php#barritas" onclick="mostrarSeccion('tienda'); mostrarSubseccion('barritas');">Productos</a>
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
    <style>
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
	<footer>
         <p>© 2025 EcoFruits S.L.S. Todos los derechos reservados.</p>
      </footer>
      <script src="scripts.js"></script>
   </body>
</html>