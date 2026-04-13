<?php 
// Se incluyen los archivos necesarios:
// header.php contiene la estructura inicial HTML
// calcular_notas.php contiene la lógica de cálculo de notas
include("includes/header.php"); 
include("functions/calcular_notas.php");

// Inicialización de variables:
// $r almacenará el resultado (nota necesaria)
// $prog almacenará el progreso del curso en porcentaje
$r=null;
$prog=0;

// Verifica si el formulario fue enviado (método POST)
if($_POST){

    // Llama a la función calc() enviando las notas ingresadas
    // list() permite capturar múltiples valores retornados:
    // $need = nota necesaria
    // $count = cantidad de evaluaciones ya registradas
    list($need,$count)=calc($_POST['c1'],$_POST['p'],$_POST['c2'],$_POST['f']);

    // Redondea la nota necesaria a 2 decimales
    $r=round($need,2);

    // Calcula el progreso del curso en porcentaje
    // Cada evaluación representa el 25% del total (4 evaluaciones)
    $prog=$count*25;
}
?>

<div class="card">
<h2>Notas</h2>

<!-- Formulario para ingresar notas -->
<form method="POST">
    <!-- Campo para nota de C1 -->
    <input name="c1" placeholder="C1">

    <!-- Campo para nota del examen parcial -->
    <input name="p" placeholder="Parcial">

    <!-- Campo para nota de C2 -->
    <input name="c2" placeholder="C2">

    <!-- Campo para nota del examen final -->
    <input name="f" placeholder="Final">

    <!-- Botón para enviar el formulario -->
    <button>Calcular</button>
</form>

<?php if($r): ?>
    <!-- Muestra la nota necesaria calculada -->
    <h3>Necesitas: <?=$r?></h3>

    <!-- Barra de progreso visual -->
    <!-- Representa el porcentaje de evaluaciones completadas -->
    <div class="progress">
        <div class="progress-bar" style="width:<?=$prog?>%"></div>
    </div>

    <!-- Canvas para el gráfico -->
    <canvas id="chart"></canvas>

    <!-- Librería Chart.js para gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    // Creación de gráfico tipo dona (doughnut)
    new Chart(document.getElementById('chart'),{
        type:'doughnut',
        data:{
            // Etiquetas del gráfico
            labels:['Hecho','Falta'],
            datasets:[{
                // Datos: porcentaje completado vs restante
                data:[<?=$prog?>,100-<?=$prog?>]
            }]
        }
    });
    </script>
<?php endif;?>

<!-- Enlace para volver al menú principal -->
<a href="index.php">⬅ Volver</a>

</div>

<?php 
// Se incluye el footer (cierre de HTML)
include("includes/footer.php"); 
?>
