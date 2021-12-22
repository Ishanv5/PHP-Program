<?php
$x=10;
$y=5;
 function test(){
     global $x,$y;
    //  echo "Variable x inside function : $x \n";
     $x=$x+$y;

 }
 test();
//  echo "Variable x outside function : $x";
 echo $x;
?>