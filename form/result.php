<?php
$result = "";
if (isset($_POST['submit'])) {
    $operator = $_POST['submit'];

    $first_number = $_POST['first_num'];
    $second_number = $_POST['second_num'];

    if (is_numeric($first_number) and is_numeric($second_number)) {
        if ($operator == "add") {
            $result = $first_number + $second_number;
        } else if ($operator == "subtract") {
            $result = $first_number - $second_number;
        }
    }

    echo $result;
}
