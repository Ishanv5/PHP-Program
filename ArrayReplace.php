<?php
$fruit=['orange','banana','apple','grapes'];
$veggie=['carrot','peas'];
$colors=['red','blue','green'];
$newArray=array_replace($fruit, $veggie, $colors);
$newArray=array_replace_recursive($fruit, $veggie, $colors);
print_r($newArray);
?>