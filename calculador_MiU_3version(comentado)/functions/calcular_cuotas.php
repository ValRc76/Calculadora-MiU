<?php

// Función que calcula el costo total del semestre académico
// en base al costo por crédito, cantidad de créditos,
// matrícula y seguro
function calcularCuotas($costo,$cred,$mat,$seg){

    // Validación:
    // Verifica que la cantidad de créditos esté dentro del rango permitido (7 a 25)
    // Si no cumple, retorna un mensaje de error
    if($cred<7||$cred>25)return "Error";

    // Cálculo del costo total de los cursos
    // (costo por crédito * número de créditos)
    $cursos=$costo*$cred;

    // Cálculo del costo total del semestre
    // sumando cursos, matrícula y seguro
    $total=$cursos+$mat+$seg;

    // Retorna un arreglo con:
    // [0] => costo de cursos
    // [1] => matrícula
    // [2] => seguro
    // [3] => total del semestre
    return[$cursos,$mat,$seg,$total];
}
?>