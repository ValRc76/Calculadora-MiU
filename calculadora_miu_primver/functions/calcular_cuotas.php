<?php
function calcularCuotas($costoCredito, $creditos) {

    if ($creditos < 7 || $creditos > 25) {
        return "Créditos fuera de rango (7 - 25)";
    }

    $matricula = 150;
    $seguro = 50;

    $costoCursos = $costoCredito * $creditos;
    $total = $costoCursos + $matricula + $seguro;

    return [
        "costoCursos" => $costoCursos,
        "matricula" => $matricula,
        "seguro" => $seguro,
        "total" => $total
    ];
}
?>
