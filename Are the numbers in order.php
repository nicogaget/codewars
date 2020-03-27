<?php

function in_asc_order($arr){
    $default = $arr;
    sort($arr);
    $ascendent =true;
    foreach($arr as $key =>$value){
        if ($value != $default[$key]){
            $ascendent = false;
        }
    }
    return $ascendent;
}