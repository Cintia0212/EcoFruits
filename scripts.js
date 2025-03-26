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

// Esperar a que el contenido del DOM esté cargado
document.addEventListener("DOMContentLoaded", function() {
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