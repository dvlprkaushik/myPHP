<?php

$num1 = 0;
$num2 = 0;

$return_and = $num1 && $num2; //AND
var_dump($return_and);

$return_or = $num1 || $num2;  //OR
var_dump($return_or);

$num1 =!$num2;                //NOT
var_dump($num1);


$comp = 9;  //TERNARY OPERATOR
$comp > 3 ? $flag = "<br>YES IT IS GREATER" : $flag = "NO!";
var_dump($flag);

?>

<script>
    document.write('<br>HELLO PHP!')
</script>