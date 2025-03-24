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

function iniciarCarrusel() {
    interval = setInterval(() => {
        mostrarImagen(indiceActual + 1);
    }, 7000);
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
        subseccionActual.style.display = 'block'; // Mostrar subsección elegida
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

// Esperar a que el contenido del DOM esté cargado
document.addEventListener("DOMContentLoaded", function() {
    aleatorizarImagenes();
    iniciarCarrusel();
    setInterval(actualizarReloj, 1000);
    actualizarReloj();

    // Manejo de la URL para redirigir y desplazarse a la sección correcta
    const hash = window.location.hash; // Obtener el hash de la URL
    const subseccion = hash ? hash.substring(1) : ''; // Quitar el '#' del hash

    // Siempre muestra la sección "tienda"
    mostrarSeccion('tienda'); 

   if (subseccion) {
    console.log("Mostrando subsección:", subseccion); // Agregar este log
    mostrarSubseccion(subseccion); // Mostrar la subsección

        // Asegurándonos de que el desplazamiento se ejecute después de que la sección sea visible
        setTimeout(() => {
            const elementoSubseccion = document.getElementById(subseccion);
            if (elementoSubseccion) {
                elementoSubseccion.scrollIntoView({ behavior: 'smooth' }); // Desplazarse suavemente
            }
        }, 100); // Ajustar el tiempo según sea necesario
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