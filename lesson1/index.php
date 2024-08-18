<?php

    // $num1 = 200;
    // $num2 = 400;
    // $op = '+';
    // if($op === '+'){
    //     $result = $num1 + $num2;
    //     echo "$num1 + $num2 = $result";
    // }elseif($op === '-'){
    //     $result = $num1 - $num2;
    //     echo "$num1 - $num2 = $result";
    // }elseif($op === '*'){
    //     $result = $num1 * $num2;
    //     echo "$num1 * $num2 = $result";
    // }elseif($op === '/'){
    //     $result = $num1 / $num2;
    //     echo "$num1 / $num2 = $result";
    // }else{
    //     echo "Invalid operator";
    // }
    function factorial($num){
        $fac = 1;
        for($i = $num; $i >= 1; $i--){
            $fac *= $i;
        }
        return $fac;
    }

    echo factorial(5);