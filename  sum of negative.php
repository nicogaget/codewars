<?php
function countPositivesSumNegatives($input) {

    if(count($input) == 0) {
        return [];
    }

    $positive = [];
    $negative = [];

    foreach ($input as $number) {

        if ($number < 0) {

            $negative[] = $number;

        } elseif ($number > 0) {

            $positive[] = $number;

        }
    }
    return [count($positive), array_sum($negative)];
}