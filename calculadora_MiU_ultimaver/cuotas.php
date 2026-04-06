<?php include("includes/header.php"); include("functions/calcular_cuotas.php");
$r=null;
if($_POST){$r=calcularCuotas($_POST['costo'],$_POST['cred'],$_POST['mat'],$_POST['seg']);}
?>
<div class="card">
<h2>Cuotas</h2>
<form method="POST">
<input name="costo" placeholder="Costo crédito" required>
<input name="cred" placeholder="Créditos" required>
<input name="mat" placeholder="Matrícula" value="150">
<input name="seg" placeholder="Seguro" value="50">
<button>Calcular</button>
</form>
<?php if($r): ?>
<p>Cursos: <?=$r[0]?></p>
<p>Matrícula: <?=$r[1]?></p>
<p>Seguro: <?=$r[2]?></p>
<h3>Total: <?=$r[3]?></h3>
<?php endif;?>
<a href="index.php">⬅ Volver</a>
</div>
<?php include("includes/footer.php"); ?>
