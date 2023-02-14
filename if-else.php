<?php

$age = 16;

if ($age >= 18) {
    # code...
    echo "Yes you can vote";
} elseif ($age == 17) {
    echo "Please wait one more year";
} elseif ($age == 16) {
    echo "Please wait two more year";
} else
    echo "No you cannot vote";

?>
