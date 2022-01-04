<?php
$a=array(
    "Bill"=>10,
    "Joe"=>20,
    "Peter"=>30
);
// $newArray=array_flip($a);
$newArray=array_change_key_case($a,CASE_UPPER);
print_r($newArray);
?>