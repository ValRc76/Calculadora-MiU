<?php 
include("includes/header.php"); 
include("functions/calcular_notas.php");

$resultado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c1 = $_POST["c1"];
    $parcial = $_POST["parcial"];
    $c2 = $_POST["c2"];

    $resultado = calcularNotaNecesaria($c1, $parcial, $c2);
}
?>

<div class="card">
    <h2>Calculadora de Notas</h2>

    <form method="POST">
        <input type="number" name="c1" placeholder="C1 (20%)" required>
        <input type="number" name="parcial" placeholder="Parcial (25%)" required>
        <input type="number" name="c2" placeholder="C2 (20%)" required>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado): ?>
        <h3>Nota mínima en Final: <?php echo $resultado; ?></h3>
    <?php endif; ?>

    <a href="index.php">⬅ Volver</a>
</div>

<?php include("includes/footer.php"); ?>
