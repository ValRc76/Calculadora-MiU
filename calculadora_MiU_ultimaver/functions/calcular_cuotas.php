<?php
function calcularCuotas($costo,$cred,$mat,$seg){
if($cred<7||$cred>25)return "Error";
$cursos=$costo*$cred;
$total=$cursos+$mat+$seg;
return[$cursos,$mat,$seg,$total];
}
?>