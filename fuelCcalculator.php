<?php
function fuel_price($litres, $price_per_liter) {
    $discount = 0;
    if ($litres<2){
        $discount = 0 ;
    } elseif (($litres>= 2) && ($litres < 4)){
        $discount = 0.05;
    } elseif (($litres>=4) && ($litres<6)){
        $discount=0.1;
    } elseif (($litres>=6) && ($litres<8)){
        $discount=0.15;
    } elseif (($litres>=8) && ($litres<10)){
        $discount=0.20;
    } elseif ($litres>=10) {
        $discount=0.25;
    }
    return round(($price_per_liter-$discount)*$litres, 2);

}