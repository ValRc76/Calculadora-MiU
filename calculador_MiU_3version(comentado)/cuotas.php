<?php 
// Se incluye el archivo header.php (estructura inicial de la página)
// y el archivo calcular_cuotas.php que contiene la lógica de cálculo
include("includes/header.php"); 
include("functions/calcular_cuotas.php");

// Inicialización de variable que almacenará el resultado del cálculo
$r=null;

// Verifica si el formulario fue enviado mediante método POST
if($_POST){
    // Llama a la función calcularCuotas() pasando los datos ingresados:
    // costo por crédito, cantidad de créditos, matrícula y seguro
    $r=calcularCuotas($_POST['costo'],$_POST['cred'],$_POST['mat'],$_POST['seg']);
}
?>

<div class="card">
<h2>Cuotas</h2>

<!-- Formulario para ingresar los datos necesarios -->
<form method="POST">
    <!-- Campo para ingresar el costo por crédito -->
    <input name="costo" placeholder="Costo crédito" required>

    <!-- Campo para ingresar la cantidad de créditos -->
    <input name="cred" placeholder="Créditos" required>

    <!-- Campo para ingresar el costo de matrícula (valor por defecto: 150) -->
    <input name="mat" placeholder="Matrícula" value="150">

    <!-- Campo para ingresar el costo de seguro (valor por defecto: 50) -->
    <input name="seg" placeholder="Seguro" value="50">

    <!-- Botón para enviar el formulario -->
    <button>Calcular</button>
</form>

<?php if($r): ?>
    <!-- Muestra los resultados del cálculo -->

    <!-- Costo total de los cursos (créditos * costo por crédito) -->
    <p>Cursos: <?=$r[0]?></p>

    <!-- Costo de matrícula -->
    <p>Matrícula: <?=$r[1]?></p>

    <!-- Costo de seguro -->
    <p>Seguro: <?=$r[2]?></p>

    <!-- Costo total del semestre -->
    <h3>Total: <?=$r[3]?></h3>
<?php endif;?>

<!-- Enlace para regresar al menú principal -->
<a href="index.php">⬅ Volver</a>

</div>

<?php 
// Se incluye el footer (cierre de la estructura HTML)
include("includes/footer.php"); 
?>
