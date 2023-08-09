<?php
// echo "Get from Home <br>";
// echo $_GET['first_name'];

// echo $_POST['first_name'];

// session_start();

// echo $_SESSION['user_name'];


if (isset($_REQUEST['submit'])) {
    echo "First Name " . $_REQUEST['first_name'];
    echo "<br>";
    echo "ID " . $_REQUEST['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

</body>

</html>