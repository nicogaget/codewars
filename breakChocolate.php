<?php
function breakChocolate ($n, $m) {

    if(($n * $m) != 1){
        return $n * $m -1;
    }
    else{
        return 0;
    }

};