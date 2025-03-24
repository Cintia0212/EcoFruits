<?php
// Establecer la localización en español para PHP
setlocale(LC_TIME, 'es_ES.UTF-8', 'Spanish_Spain.UTF-8');

// Obtener la fecha actual en español
$fecha = strftime('%A %d de %B de %Y');
echo '<div style="text-align: center; font-family: Arial, sans-serif;">';
echo '<p style="font-size: 20px; margin: 10px;">' . $fecha . '</p>';
// Mostrar el reloj en un tamaño grande
echo '<p style="font-size: 50px; margin: 10px;" id="reloj"></p>';
echo '</div>';
?>

<script>
// Script de JavaScript para actualizar el reloj en tiempo real
// Función para formatear la fecha al español
function formatearFecha(fecha) {
    return new Intl.DateTimeFormat('es-ES', {
        weekday: 'long',
        day: '2-digit',
        month: 'long',
        year: 'numeric'
    }).format(fecha);
}

function actualizarReloj() {
    const ahora = new Date();
    // Formatear la hora en formato local español
    const hora = ahora.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
    document.getElementById('reloj').textContent = hora;
}

// Función para mostrar la fecha al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    const ahora = new Date();
    // Mostrar la fecha formateada al cargar la página
    document.querySelector('p').textContent = formatearFecha(ahora);
});

// Actualizar el reloj cada segundo
setInterval(actualizarReloj, 1000);
actualizarReloj();
</script>