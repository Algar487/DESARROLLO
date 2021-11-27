<?php

$horario=['10:00-13:30','16:30-20:30'];
$ocupacion=['11:30-12:30','12:31-13:30','16:30-18:00'];
$hora= "11:30";
$tramo= "11:30-12:30"


function convertirHoraAMinutos ($hora){
    $minutos = explode(":", $hora);
    $hours=$minutos[0];
    $minutes=$minutos[1];
    $resultado=$minutes+$hours*60;
    return $resultado;
}

echo convertirHoraAMinutos("11:30");

function convertirTramoHorasATramoMinutos ($tramo){

}
