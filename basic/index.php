<?php
// phpinfo();

echo "-----Comments----";

// single line comment
# single line comment
/* 
  multi line comment
*/


echo nl2br("\n\n-------Variables---");

$greetings = "Hello World!";
$first_name = "Juan";
$last_name = "Dela Cruz";
$age = 20;
$value = 1000.50;
$is_success = true;
$cars = array("Toyota", "Mitsubishi", "Nissan");
$obj = new stdClass();
$null = null;

echo "<br>";
echo gettype($greetings);
echo "<br>";
echo gettype($age);
echo "<br>";
echo gettype($value);
echo "<br>";
echo gettype($is_success);
echo "<br>";
echo gettype($cars);
echo "<br>";
echo gettype($obj);
echo "<br>";
echo gettype($null);
echo "<br>";

var_dump($greetings);
echo "<br>";
var_dump($cars);


echo nl2br("\n\n-------Constants---");
define("VERSION_NUMBER", 1.0);
define("APP_NAME", "Inventory System");

echo "<br>";
echo APP_NAME;

echo "<br>";
echo VERSION_NUMBER;


define("CARS", ["Ferrar", "BMW", "Toyota"]);
echo "<br>";
echo CARS[0];

echo nl2br("\n\n-------Strings---");
echo "<br>";
echo "<br>";

$full_name = "my name is " . $first_name . " " . $last_name;
echo $full_name;

echo "<br>";

$full_name2 = "my name is $first_name $last_name";
echo $full_name2;

echo "<br>";

$str = "sample text";
// value of $str is sample text
$text = "value of \$str is $str";
echo $text;
echo "<br>";

echo htmlspecialchars("<h1>") . "Sample Text" . htmlspecialchars("<h1>");


echo nl2br("\n\n-------Strings Methods---");
echo "<br>";

echo strlen($text);

echo "<br>";
$full_name3 = str_replace("Juan Dela Cruz", "John Doe", $full_name);
echo $full_name3;
echo "<br>";

echo strpos($text, "sample text");

echo "<br>";
echo join(" ", $cars);


echo nl2br("\n\n-------TypeCasting---");

$number = "32";
settype($number, "integer");

echo "<br>";
echo $number;
echo "<br>";
echo gettype($number);
echo "<br>";
var_dump($number);

$x = 32;
settype($x, "string");
echo "<br>";
var_dump($x);

echo nl2br("\n\n-------IS functions---");

$y = null;
echo "<br>";

if (isset($y)) {
  echo "variable has a value";
} else {
  echo "variable has a null value";
};

echo "<br>";
echo is_numeric($x);

echo "<br>";
echo is_numeric($full_name);

echo nl2br("\n\n------------Operators-----------");
$num1 = 10;
$num2 = 5;

echo "<br>";
echo $num1 + $num2;

echo "<br>";
echo $num1 % $num2;

echo "<br>";
echo $num1 ** $num2;

echo "<br>";
$s = "test1";
//$s = $s . " test2"
$s .= " test2";

echo $s;


echo nl2br("\n\n------------Assignment-----------");

$num3 = 10;
echo "<br>";

// $num3 = $num3 + 1;
$num3 += 1;
echo $num3;

echo "<br>";

$num3 -= 1;
echo $num3;

echo "<br>";

$num3++;
echo $num3;

echo "<br>";

echo ++$num3;

echo $num3++;

echo nl2br("\n\n------------If Statement-----------\n");

$grade = "100";

if ($grade == 100) {
  echo "your grade is perfect";
} else if ($grade < 100 and $grade >= 0) {
  echo "your grade is high";
} else {
  echo "you need to study harder";
}

echo "<br>";

if ($grade === 100) {
  echo "its identical";
} else {
  echo "its not identical";
}

echo "<br>";

if ($grade == 1000 xor $grade > 0) {
  echo "condition is true";
} else {
  echo "condition is false";
}

echo nl2br("\n\n------------Ternary Operator-----------\n");

$u = "sample text";
// $u = null;
echo (isset($u) ? $u : "value is null");


echo nl2br("\n\n------------Null coalescing-----------\n");
echo $u ?? "value is null";


echo nl2br("\n\n------------Switch Statement-----------\n");
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color";
    break;
  case "green":
    echo "Your favorite color";
    break;
  default:
    echo "unknow color";
}

echo "<br>";

switch ($grade) {
  case $grade == 100:
    echo "Your perfect score";
    break;
  case $grade < 100 and $grade > 90:
    echo "You have high score";
    break;
  default:
    echo "unknow color";
}


echo nl2br("\n\n------------For Loop -----------\n");
echo "<br>";

for ($i = 0; $i < 10; $i++) {
  echo $i;
  echo "<br>";
}

echo nl2br("\n\n------------While Loop -----------\n");

$i = 0;
while ($i < 10) {
  echo $i;
  echo "<br>";

  $i++;
}

echo nl2br("\n\n------------Do While Loop -----------\n");

$i = 0;
do {
  echo $i;
  $i++;
  echo "<br>";
} while ($i < 10);


echo nl2br("\n\n------------Foreach Loop -----------\n");

foreach ($cars as $c) {
  echo $c;
  echo "<br>";
}

echo nl2br("\n\n------------Break-----------\n");

for ($j = 0; $j < 10; $j++) {
  if ($j == 5) {
    break;
  }
  echo $j;
  echo "<br>";
}

echo nl2br("\n\n------------Continue -----------\n");

for ($j = 0; $j < 10; $j++) {
  if ($j == 5) {
    continue;
  }
  echo $j;
  echo "<br>";
}

echo "<br>";


echo nl2br("\n\n------------Arrays -----------\n");

$car_array = array();
array_push($car_array, "ferrari", "lamborghini", "lexus");

print_r($car_array);
echo "<br>";

foreach ($car_array as $c) {
  echo $c;
  echo "<br>";
}

echo "<br>";
for ($j = 0; $j < count($car_array); $j++) {
  echo $car_array[$j];
  echo "<br>";
}

echo nl2br("\n\n------------Named/Associative Arrays -----------\n");

$cars_named_array = array("car1" => "ferrari", "car2" => "lamborghini", "car3" => "lexus");
echo $cars_named_array["car1"];
echo "<br>";
echo $cars_named_array["car2"];
echo "<br>";
echo $cars_named_array["car3"];

echo nl2br("\n\n------------Arrays Functions -----------\n");
echo "<br>";

$number_array = array(1, 3, 4, 2, 5);
print_r($number_array);
echo "<br>";
sort($number_array);
print_r($number_array);
echo "<br>";
rsort($number_array);
print_r($number_array);

echo "<br>";
if (in_array("lexus", $car_array)) {
  echo "lexus found";
} else {
  echo "lexus lost";
}

echo nl2br("\n\n------------Object Literal -----------\n");

$person_obj = (object)[
  "first_name" => "Juan",
  "last_name" => "Dela Cruz",
  "age" => 20,
  "hobbies" => array("eating", "sleeping", "playing")
];

print_r($person_obj);
echo "<br>";
var_dump($person_obj);
echo "<br>";
echo $person_obj->first_name;
echo "<br>";
print_r($person_obj->hobbies);
echo "<br>";
echo $person_obj->hobbies[0];


echo nl2br("\n\n------------Date -----------\n");

echo date_default_timezone_get();
echo "<br>";
echo date("Y-m-d h:i:s a");

date_default_timezone_set("Asia/Manila");
echo "<br>";
echo date("Y-m-d h:i:s a");
echo "<br>";

$date = date_create("2023-07-31 11:36:53 am");
echo gettype($date);
echo "<br>";
echo date_format($date, 'Y-m-d');

echo "<br>";
date_add($date, date_interval_create_from_date_string("40 days"));
echo date_format($date, 'Y-m-d');

echo nl2br("\n\n------------Function -----------\n");

function add_number($a, $b)
{
  return $a + $b;
}


echo add_number(10, 11);

$x = 10;
function change_number($a)
{
  $a = 11;
}
echo "<br>";
echo $x;
