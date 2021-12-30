<?php
  $colors=['a'=>"red",'b'=> "blue",'c'=> "indigo"];
  $coin=['b'=>'Bitcoin', 'Doggy', 'nath'];
  $shares=['Tata', 'tesla','relaince'];
//   $newArray=array_merge($colors,$coin,$shares);
//   $newArray=array_merge_recursive($colors,$coin,$shares);
  $newArray=array_combine($colors,$coin);
  print_r($newArray);
  
?>