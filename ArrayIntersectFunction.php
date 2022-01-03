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
    //  $newArray=array_intersect($a1,$a2);
    //  $newArray=array_intersect_key($a1,$a2);
    // //  $newArray=array_intersect_assoc($a1,$a2);
    //  $newArray=array_intersect_uassoc($a1,$a2,"compare");
    //  $newArray=array_intersect_ukey($a1,$a2,"compare");
    //  $newArray=array_uintersect($a1,$a2,"compare");
     $newArray=array_uintersect_uassoc($a1,$a2,"compare","comparevalue");
     print_r($newArray);

?>