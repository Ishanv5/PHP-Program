<?php
function square($n,$m){
    // return $n*$n;
    return "$n=>$m";
}
$a=[1,2,3,4];
$b=['lemon','orange','apple','banana'];
// $newArray=array_map('square',$a);
// $newArray=array_map('square',$a,$b);
$newArray=array_map(null,$a,$b);

print_r($newArray);
?>