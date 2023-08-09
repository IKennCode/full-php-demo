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
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="" method="get">
        <p>
            <label>First Number</label>
            <input type="number" name="first_num" required value="<?php echo $first_number ?>">
        </p>
        <p>
            <label>Second Number</label>
            <input type="number" name="second_num" required value="<?php echo $second_number ?>">
        </p>
        <button type="submit" name="submit" value="add">Add</button>
        <button type="submit" name="submit" value="subtract">Subtract</button>

        <p>Result <?php echo $result ?> </p>

    </form>
</body>

</html>