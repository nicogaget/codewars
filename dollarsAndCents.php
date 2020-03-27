<?php
function format_money(float $amount): string {
    // Your formatting code here
    $dollars_format_number = number_format($amount,2,'.','');

    return "$". $dollars_format_number;


}