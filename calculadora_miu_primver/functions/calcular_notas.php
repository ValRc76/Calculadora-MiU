<?php
function calcularNotaNecesaria($c1, $parcial, $c2) {

    $finalMinimo = 11;

    $notaActual = ($c1 * 0.20) + ($parcial * 0.25) + ($c2 * 0.20);

    $notaNecesaria = ($finalMinimo - $notaActual) / 0.35;

    if ($notaNecesaria > 20) {
        return "No es posible aprobar";
    }

    return round($notaNecesaria, 2);
}
?>
