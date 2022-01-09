<?php
$food=array('Dosa','Pani-puri','Pizza','Burger');
echo "Current : " . current($food);
echo key($food);
echo pos($food);
next($food);
echo "Current : " . current($food);

prev($food);
echo "Current : " . current($food);
end($food);
echo "Current : " . current($food);
print_r(each($food));
echo "Current : " . current($food);
?>