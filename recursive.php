<?php

$array=[1,2,[1,2,[1,2,[1,2,3,[1,2],[2,3]]],3,4],[5,6,7],8,9];
$s=0;

function sum($arr,&$s)
{
    for ($i=0;$i<sizeof($arr);$i++)
    {
        if(gettype($arr[$i])=="integer"){
            $s+=$arr[$i];
        }
        else if (gettype($arr[$i])=="array"){
            sum($arr[$i], $s);
        }
    }

    return $s;
}

echo ("The sum is: ".sum($array,$s));

?>