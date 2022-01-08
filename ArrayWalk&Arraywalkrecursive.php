<?php
$veggie=array("1"=>"Carrot","2"=>"Tamato");
$fruits=array(
    $veggie,
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple"
);
// array_walk($fruits,"myFunction","is a key of");
array_walk_recursive($fruits,"myFunction","is a key of");
function myFunction($v,$key,$p){
    echo "$key $p  $v \n";
}
?>