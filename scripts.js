// Variables globales
let indiceActual = 0;
let interval;

// Funciones del carrusel
function mostrarImagen(indice) {
    const imagenes = document.querySelectorAll('.carrusel-imagen');
    const totalImagenes = imagenes.length;

    if (indice >= totalImagenes) {
        indiceActual = 0;
    } else if (indice < 0) {
        indiceActual = totalImagenes - 1;
    } else {
        indiceActual = indice;
    }

    const desplazamiento = -indiceActual * 100;
    document.querySelector('.carrusel-contenedor').style.transform = `translateX(${desplazamiento}%)`;
}

function iniciarCarrusel() {
    clearInterval(interval);  // Limpiar cualquier intervalo previo
    interval = setInterval(() => {
        mostrarImagen(indiceActual + 1);
    }, 7000);
}

function aleatorizarImagenes() {
    const contenedor = document.querySelector('.carrusel-contenedor');
    const imagenes = Array.from(contenedor.children);

    for (let i = imagenes.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [imagenes[i], imagenes[j]] = [imagenes[j], imagenes[i]];
    }

    contenedor.innerHTML = '';
    imagenes.forEach(imagen => {
        contenedor.appendChild(imagen);
    });
}

// Funciones para manejar secciones y subsecciones
function mostrarSeccion(seccionId) {
    const secciones = document.querySelectorAll('.section');
    secciones.forEach(seccion => {
        seccion.style.display = 'none'; // Ocultar todas las secciones
    });

    const seccionActual = document.getElementById(seccionId);
    if (seccionActual) {
        seccionActual.style.display = 'block'; // Mostrar sección seleccionada
    }
}

function mostrarSubseccion(subseccionId) {
    const subsecciones = document.querySelectorAll('#tienda .subseccion');
    subsecciones.forEach(subseccion => {
        subseccion.style.display = 'none'; // Ocultar todas las subsecciones
    });

    const subseccionActual = document.getElementById(subseccionId);
    if (subseccionActual) {
        subseccionActual.style.display = 'block'; // Mostrar subsección seleccionada
    }
}

// Función para actualizar el reloj
function actualizarReloj() {
    const ahora = new Date();
    const horas = String(ahora.getHours()).padStart(2, '0');
    const minutos = String(ahora.getMinutes()).padStart(2, '0');
    const segundos = String(ahora.getSeconds()).padStart(2, '0');

    const tiempo = `${horas}:${minutos}:${segundos}`;
    document.getElementById('reloj').textContent = tiempo;
}

// Traducciones
const traducciones = {
    ca: {
        titlePage: "Natural Fruits S.Coop.S - Índex",
        linkProductos: "Productes",
        linkSobreNosotros: "Sobre Nosaltres",
        linkContacto: "Contacte",
        productosTitulo: "Productes Ecològics",
        contactoTexto: "Informació sobre com contactar amb nosaltres.",
        sobreNosotrosTexto: "A Natural Fruits S.L.S, ens dediquem a oferir productes ecològics de la més alta qualitat...",
        barritaFresaPera: "Avena rellenas de fresa y pera (sense gluten, sense lactosa)",
        manzanaDeshidratada: "Poma deshidratada",
        maquinaVending: "Màquina de vending",
        contactoTitulo: "Contacte",
        sobreNosotrosTitulo: "Qui som"
    },
    es: {
        titlePage: "Natural Fruits S.Coop.S - Índice",
        linkProductos: "Productos",
        linkSobreNosotros: "Sobre Nosotros",
        linkContacto: "Contacto",
        productosTitulo: "Productos Ecológicos",
        contactoTexto: "Información sobre cómo contactarnos.",
        sobreNosotrosTexto: "En Natural Fruits S.L.S, nos dedicamos a ofrecer productos ecológicos de la más alta calidad...",
        barritaFresaPera: "Avena rellenas de fresa y pera (sin gluten, sin lactosa)",
        manzanaDeshidratada: "Manzana deshidratada",
        maquinaVending: "Máquina de vending",
        contactoTitulo: "Contacto",
        sobreNosotrosTitulo: "Quiénes somos"
    }
};

// Función para cambiar el idioma
function cambiarIdioma() {
    const idiomaSeleccionado = document.getElementById('idiomaSelect').value;
    
    // Cambiar el título
    document.getElementById('titlePage').innerText = traducciones[idiomaSeleccionado].titlePage;

    // Cambiar enlaces
    document.getElementById('linkProductos').innerText = traducciones[idiomaSeleccionado].linkProductos;
    document.getElementById('linkSobreNosotros').innerText = traducciones[idiomaSeleccionado].linkSobreNosotros;
    document.getElementById('linkContacto').innerText = traducciones[idiomaSeleccionado].linkContacto;

    // Cambiar contenido de secciones
    document.getElementById('titulo-productos').innerText = traducciones[idiomaSeleccionado].productosTitulo;
    document.getElementById('contacto').innerText = traducciones[idiomaSeleccionado].contactoTexto;
    document.getElementById('sobre-nosotros').innerText = traducciones[idiomaSeleccionado].sobreNosotrosTexto;

    // Cambiar contenido de productos
    document.getElementById('barrita-fresa-pera').innerText = traducciones[idiomaSeleccionado].barritaFresaPera;
    document.getElementById('manzana-deshidratada').innerText = traducciones[idiomaSeleccionado].manzanaDeshidratada;
    document.getElementById('maquina-vending').innerText = traducciones[idiomaSeleccionado].maquinaVending;
}

// Esperar a que el contenido del DOM esté cargado
document.addEventListener("DOMContentLoaded", function() {
    // Establecer idioma por defecto: Catalán
    const idiomaPorDefecto = 'ca';
    document.getElementById('idiomaSelect').value = idiomaPorDefecto;

    // Llamar a la función para establecer el idioma correctamente
    cambiarIdioma();

    // Resto del código para el carrusel, reloj, etc.
    aleatorizarImagenes();
    iniciarCarrusel();
    setInterval(actualizarReloj, 1000);
    actualizarReloj();

    const hash = window.location.hash; // Obtener el hash de la URL
    const subseccion = hash ? hash.substring(1) : ''; // Quitar el '#' del hash

    // Cambia a la sección "tienda" por defecto
    mostrarSeccion('tienda');

    // Si hay una subsección en la URL
    if (subseccion) {
        console.log("Mostrando subsección:", subseccion); // Log para depuración
        mostrarSubseccion(subseccion); // Mostrar la subsección

        // Desplazamiento después de que la sección sea visible
        setTimeout(() => {
            const elementoSubseccion = document.getElementById(subseccion);
            if (elementoSubseccion) {
                elementoSubseccion.scrollIntoView({ behavior: 'smooth' }); // Desplazarse suavemente
            }
        }, 100);
    } else {
        // Si no hay subsección, desplazarse directamente a la sección "tienda"
        setTimeout(() => {
            const tiendaElemento = document.getElementById('tienda');
            if (tiendaElemento) {
                tiendaElemento.scrollIntoView({ behavior: 'smooth' }); // Desplazarse suavemente
            }
        }, 100);
    }
});