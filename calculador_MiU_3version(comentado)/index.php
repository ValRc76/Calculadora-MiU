<?php 
// Se incluye el archivo header.php
// Contiene la estructura inicial HTML, estilos y encabezado de la página
include("includes/header.php"); 
?>

<div class="card">
    <!-- Título del menú principal -->
    <h2>Menú Principal</h2>

    <!-- Botón que redirige a la calculadora de cuotas -->
    <a href="cuotas.php">
        <button>💰 Calculadora de Cuotas</button>
    </a>

    <!-- Botón que redirige a la calculadora de notas -->
    <a href="notas.php">
        <button>📚 Calculadora de Notas</button>
    </a>
</div>

<?php 
// Se incluye el archivo footer.php
// Contiene el cierre de la estructura HTML
include("includes/footer.php"); 
?>
