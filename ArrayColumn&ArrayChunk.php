<?php
$array=  array(
array(
    'id'=>2201,
    'first_name'=>'Ishan',
    'last_name'=>'Vaghela',
),
array(
    'id'=>2202,
    'first_name'=>'Meet',
    'last_name'=>'Vaghela',
),
array(
    'id'=>2203,
    'first_name'=>'Sujal',
    'last_name'=>'Gohil',
)
);
// $newArray=array_column($array,'first_name','id');
$newArray=array_chunk($array,2);
print_r($newArray);
?>