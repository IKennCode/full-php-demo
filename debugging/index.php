<?php
function print_names($array_of_names)
{
    for ($x = 0; $x <= count($array_of_names); $x++) {
        $name = $array_of_names[$x];
        echo $name . "<br>";
    }
}


$names = array("Juan", "John", "Jane", "Maria");
print_names($names);
