<?php
function invert(array $a): array {
    $b=[];
    foreach ($a as $key){
        $key = $key-$key-$key;
        $b[]=$key;
    }


    return ($b);
}