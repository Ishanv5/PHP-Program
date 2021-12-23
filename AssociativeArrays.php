<?php
$age=array(
    "Bill"=>25,
    "Peter"=>30,
    "Joey"=>21
);
$age["Joey"]=50;
echo $age["Bill"] . "\n";
echo $age["Peter"] . "\n";
echo $age["Joey"];
print_r($age);
var_dump($age);
?>