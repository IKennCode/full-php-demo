<?php

$first_name = "Juan";

function print_first_name($fName)
{
    echo $fName;
    //    echo $GLOBALS['first_name'];
}

print_first_name($first_name);
