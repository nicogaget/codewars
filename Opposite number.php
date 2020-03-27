<?php
function opposite($n) {
    // Your code here
    if ($n<0){
        return abs($n);
    }else{
        return "-$n";
    }
}