<?php

// Función que calcula:
// 1. La nota necesaria para aprobar el curso
// 2. La cantidad de evaluaciones ya registradas
function calc($c1,$p,$c2,$f){

    // Arreglo de pesos de cada evaluación:
    // C1 = 20%, Parcial = 25%, C2 = 20%, Final = 35%
    $w=[0.2,0.25,0.2,0.35];

    // Arreglo con las notas ingresadas por el usuario
    $n=[$c1,$p,$c2,$f];

    // Inicialización de variables:
    // $sum = suma ponderada de las notas ingresadas
    // $pend = peso total de evaluaciones pendientes
    // $count = cantidad de evaluaciones ya ingresadas
    $sum=0;
    $pend=0;
    $count=0;

    // Recorre las 4 evaluaciones
    for($i=0;$i<4;$i++){

        // Si la nota NO está vacía, se considera como ya registrada
        if($n[$i]!==""){
            // Se suma su valor ponderado
            $sum+=$n[$i]*$w[$i];

            // Se incrementa el contador de evaluaciones completadas
            $count++;
        }
        else{
            // Si está vacía, se considera pendiente
            // Se acumula su peso para el cálculo futuro
            $pend+=$w[$i];
        }
    }

    // Cálculo de la nota necesaria para aprobar (nota mínima = 11)
    // Se divide entre el peso pendiente
    // ($pend?:1) evita división entre cero
    $need=(11-$sum)/($pend?:1);

    // Retorna:
    // $need → nota necesaria
    // $count → cantidad de evaluaciones completadas
    return[$need,$count];
}
?>