<?php
function hello($fname,$Lname){
    $v = "Hello $fname $Lname ";
    return $v;
}
function sum($math,$sci,$eng){
  $s=$math+$sci+$eng;
  return $s;
   
}
function percentage($st){
   $per=$st/3;
   echo $per;
}
$total=sum(45,45,45);
percentage($total);
echo $total;
echo hello("Ishan","Software");
$n=hello("Ishan","Software");
echo $n;
?>