<?php
function litres($t) {

    $conso = 0.5;
    $totalConso = $t * $conso;

    return floor($totalConso);
}