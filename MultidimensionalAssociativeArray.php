<?php
$mark=[
    "Krishna"=>["Physic"=>86,"Math"=>76,"Chemistry"=>72],
    "Salman"=>["Physic"=>86,"Math"=>76,"Chemistry"=>72],
    "Mohan"=>["Physic"=>86,"Math"=>76,"Chemistry"=>72]
];
foreach($mark as $key=>$v1){
    echo $key;
    foreach($v1 as $v2){
        echo $v2 . " ";
    }
    echo "\n";
}
print_r($mark);
?>