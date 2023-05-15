<?php
   /* $a=10;
    $b=20;

    function sum($x,$y){
        return $x+$y;
    }

    echo ("The sum is: ".sum($a,$b));
*/
    $odd_array=[1,3,5,7,9];
    $even_array=[2,4,6,8,10];



    function arraykosum($arr)
    {
        $sum =0;
        for($i=0;$i<sizeof($arr);$i++){
            $sum=$sum+$arr[$i];
        }
        echo ("The sum of array is: ".$sum."<br>");
    }


    arraykosum($odd_array);
    arraykosum($even_array);


?>