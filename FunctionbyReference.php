<?php
   function testing(&$string){
      $string .= "  and something extra...";
   }
   $str="This is a string";
   testing($str);
   echo $str;
   function first($num){
        $num += 5;
   }
  function second(&$num){
      $num += 7;
  }
  $number=10;
  first($number);
  echo "Original Value :  $number \n";
  
  second($number);
  echo "Original Value :  $number \n";
 
?>