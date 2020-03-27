<?php
function findIt(array $seq) : int
{
// Enter your code here
    $findIt= (array_count_values($seq));
    foreach ($findIt as $key =>$value) {
        if ($value%2 !==0) {
            return $key;
            break;
        }
    }
}