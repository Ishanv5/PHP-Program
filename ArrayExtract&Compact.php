<?php
$a = "neon";
$color=array('a'=>'red','b'=>'green','c'=>'blue');
// extract($color,EXTR_OVERWRITE);
// extract($color,EXTR_SKIP);
extract($color,EXTR_PREFIX_ALL, "test");
// extract($color,EXTR_PREFIX_SAME, "test");
echo "Value of a : $a \n"; 
echo "Value of a : $test_a \n"; 
echo "Value of b : $test_b \n"; 
echo "Value of c : $test_c \n"; 
$firstname="ishan";
$lastname="software";
$age="18";
$gender="male";
$country="India";
$extra=["gender","country"];
$newArray=compact("firstname","lastname","age",$extra);
print_r($newArray);
?>