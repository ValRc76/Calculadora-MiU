<?php 
include("includes/header.php"); 
include("functions/calcular_cuotas.php");

$resultado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $costo = $_POST["costo"];
    $creditos = $_POST["creditos"];

    $resultado = calcularCuotas($costo, $creditos);
}
?>

<div class="card">
    <h2>Calculadora de Cuotas</h2>

    <form method="POST">
        <input type="number" name="costo" placeholder="Costo por crédito" required>
        <input type="number" name="creditos" placeholder="Cantidad de créditos" required>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado && is_array($resultado)): ?>
        <p>Costo Cursos: S/ <?php echo $resultado["costoCursos"]; ?></p>
        <p>Matrícula: S/ <?php echo $resultado["matricula"]; ?></p>
        <p>Seguro: S/ <?php echo $resultado["seguro"]; ?></p>
        <h3>Total: S/ <?php echo $resultado["total"]; ?></h3>
    <?php endif; ?>

    <a href="index.php">⬅ Volver</a>
</div>

<?php include("includes/footer.php"); ?>
