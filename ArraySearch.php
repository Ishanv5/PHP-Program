<?php
$food=array('orange', 'banana', 'apple',55);
// if(in_array('55', $food,true)) 
// echo "Find Successful";
// else
// echo "Cant Find";
echo array_search("apple",$food);
?>