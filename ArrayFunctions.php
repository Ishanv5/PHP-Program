<?php
//  $food=array('orange', 'banana', 'apple');
//  echo count($food);
 
  $food=array(
      'fruits'=>array('orange', 'banana', 'apple'),
      'veggie'=>array('carrot','peas','reddish')
  );
  echo sizeof($food["fruits"],1);
  echo array_count_values($food);
?>