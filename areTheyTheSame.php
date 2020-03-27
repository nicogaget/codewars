<?php
function comp($a1, $a2) {
if ($a1 === null or $a2 === null) {
return false;
}
sort($a1);
sort($a2);
foreach ($a1 as $key => $values) {
if ($values * $values !== $a2[$key]) {
return false;
}
}
return true;
}