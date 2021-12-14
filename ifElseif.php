<?php
$per=85;
if($per>=80 && $per<=100)
{
    echo "You are in merit";
}
elseif($per>=60 && $per<=80)
{
    echo "You are in Ist Division";
}
elseif($per>=45 && $per<=60)
{
    echo "You are in IInd Division";
}
elseif($per>=33&& $per<=45)
{
    echo "You are in IIIrd Division";
}
elseif($per<33)
{
    echo "You are fail";
}
else{
    echo "Plz enter valid Percentage";
}
?>