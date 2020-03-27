<?
function duplicate_encode($word){

    $word = str_split(strtolower($word));
    $countLetter = array_count_values($word);

    foreach($word as $key => $letter){
        if($countLetter[$letter] > 1)
            $word[$key] = ")";
        else
            $word[$key] = "(";
    }
    return implode("",$word);
}