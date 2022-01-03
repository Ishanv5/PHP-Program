<?php
function compare($a,$b)
{
    if($a===$b){
        return 0;
    }
    return ($a>$b)? 1 : -1;
}
function comparevalue($a,$b)
{
    if($a===$b){
        return 0;
    }
    return ($a>$b)? 1 : -1;
}
 $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $a2=array("a"=>"red","f"=>"green","d"=>"purple");
//  $newArray=array_diff($a1,$a2);
//  $newArray=array_diff_key($a1,$a2);
//  $newArray=array_diff_assoc($a1,$a2);
//  $newArray=array_diff_uassoc($a1,$a2,"compare");
//  $newArray=array_udiff_assoc($a1,$a2,"compare");
//  $newArray=array_diff_ukey($a1,$a2,"compare");
$newArray=array_udiff($a1,$a2,"compare");
$newArray=array_udiff_uassoc($a1,$a2,"compare","comparevalue");

    print_r($newArray);
?>