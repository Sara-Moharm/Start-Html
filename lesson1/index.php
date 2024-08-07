<?php

    $num1 = 200;
    $num1 = 400;
    $op = '+';
    if($op === '+'){
        $result = $num1 + $num1;
        echo "$num1 + $num2 = $result";
    }elseif($op === '-'){
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result";
    }elseif($op === '*'){
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result";
    }elseif($op === '/'){
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result";
    }else{
        echo "Invalid operator";
    }
