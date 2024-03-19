<?php
/*
EJERCICIOS SECCION 1

1. CALCULAR E IMPRIMIR EL AREA DE UN RECTANGULO

2. VERIFICAR SI UN NUMERO ES PAR O IMPAR

3. COMPROBAR SI UN ESTUDIANTE APROBO O REPROBO UN EXAMEN

4. CALCULAR E IMPRIMIR LA CIRCUNFERENCIA DE UN CIRCULO

5. DETERMINAR SI UN YEAR ES BISIESTO O NO

6. DETERMINAR LA ESTACION DEL YEAR SEGUN UN MES (POR NUMERO DE MES)

*/

//1

$ladoA = 8;
$ladoB = 3;
$areaDelRectangulo = $ladoA * $ladoB;
echo'<br/>'."area del rectangulo de base $ladoB y altura $ladoA = $areaDelRectangulo".'<br/>';

//2

$numero = 4;
if($numero % 2 == 0){
    echo "el numero $numero es par".'<br/>';
}else{
    echo"el numero $numero es inpar".'<br/>';
}

//3

$calificacion = 8;
if ($calificacion >= 10){
    echo"El estudiante ha aprobado la materia con $calificacion puntos".'<br/>';
}else{
    echo"El estudiante ha reprobado la materia con $calificacion puntos".'<br/>';
}

//4
$pi = 3.14;
$diametro = 10;
$circunferencia = $pi * $diametro;
echo "La circunferencia del circulo cuyo diametro es $diametro es igual a $circunferencia".'<br/>';

//5
$year = 2024;
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo"$year es bisiesto".'<br/>';
}else{
    echo"$year no es bisiesto".'<br/>';
}

//6
$mesdelano = date('m');
if ($mesdelano == 12 || $mesdelano == 1 || $mesdelano == 2) {
    echo 'Estás en invierno'.'<br/>';
} elseif ($mesdelano == 3 || $mesdelano == 4 || $mesdelano == 5) {
    echo 'Estás en primavera'.'<br/>';
} elseif ($mesdelano == 6 || $mesdelano == 7 || $mesdelano == 8) {
    echo 'Estás en verano'.'<br/>';
} elseif ($mesdelano == 9 || $mesdelano == 10 || $mesdelano == 11) {
    echo 'Estás en otoño'.'<br/>';
}
?>
