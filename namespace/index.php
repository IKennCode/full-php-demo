<?php

use util1 as u1;
use util2 as u2;

require_once "util1.php";
require_once "util2.php";
require_once "welcome1.php";


echo u1\add_number(10, 11);
echo "<br>";
echo u2\add_number(10, 11);

$p = new util1\Person;
