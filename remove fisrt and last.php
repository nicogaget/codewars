<?php
function remove_char(string $s): string {
    // Write your code here
    $string = substr($s,1,-1);
    return $string;
}