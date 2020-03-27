<?php
function count_smileys($arr): int
{
    $array1 = $arr;
    $array2 = [':)', ':D', ':-)', ':-D', ':~)', ':~D', ';)', ';D', ';-)', ';-D', ';~)', ';~D'];
    $diff = array_diff($array1,$array2);

    $result = count($arr)-count($diff);

    return $result;

}

count_smileys([';]', ':[', ';*', ':$', ';-D']);
echo $result;

