<?php
function toCamelCase($str){
    var_dump($str);
    $element = array('_', '-');
    $newstr= str_replace($element, " ", $str);

    $newstr= ucwords($newstr);
    var_dump($newstr);

    $newstr= str_replace(" ", "", $newstr);
    var_dump($newstr);
    if (ctype_lower($str[0])){
        $newstr = lcfirst($newstr);
        return $newstr;
    }else {

        return $newstr;
    }

}

$a="the_stealth_warrior";
$b="The-Big-Balloon";
$c="A-B-C";
echo toCamelCase($a);
echo toCamelCase($b);
echo toCamelCase($c);