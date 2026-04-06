<?php include("includes/header.php"); include("functions/calcular_notas.php");
$r=null;$prog=0;
if($_POST){
list($need,$count)=calc($_POST['c1'],$_POST['p'],$_POST['c2'],$_POST['f']);
$r=round($need,2);
$prog=$count*25;
}
?>
<div class="card">
<h2>Notas</h2>
<form method="POST">
<input name="c1" placeholder="C1">
<input name="p" placeholder="Parcial">
<input name="c2" placeholder="C2">
<input name="f" placeholder="Final">
<button>Calcular</button>
</form>
<?php if($r): ?>
<h3>Necesitas: <?=$r?></h3>
<div class="progress"><div class="progress-bar" style="width:<?=$prog?>%"></div></div>
<canvas id="chart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
new Chart(document.getElementById('chart'),{
type:'doughnut',
data:{labels:['Hecho','Falta'],datasets:[{data:[<?=$prog?>,100-<?=$prog?>]}]}
});
</script>
<?php endif;?>
<a href="index.php">⬅ Volver</a>
</div>
<?php include("includes/footer.php"); ?>
