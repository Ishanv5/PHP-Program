<?php
 $shares=["First"=>'Tata',"Second"=> 'tesla',"third"=>'relaince'];
//  $newArray=array_keys($shares);
//  $newArray=array_key_first($shares);
//  $newArray=array_key_last($shares);
 $newArray=array_key_exists("third",$shares);
 $newArray=key_exists("third",$shares);
//  print_r($newArray);
if($newArray)
{
  echo "Key exists";
}
else{
echo "Key doesnot exists";
}
?>