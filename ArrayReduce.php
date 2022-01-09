<?php
function myFunction($n,$m){
//    return $n . "-" . $m;
return $n+$m;
}
// $a=['orange','lemon','apple'];
$a=[1,2,3,4];
// $newArray=array_reduce($a,'myFunction','banana');
$newArray=array_reduce($a,'myFunction');
print_r($newArray);
?>