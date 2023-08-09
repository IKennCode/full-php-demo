<?php
if (isset($_GET['submit'])) {
    echo $_GET['first_name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET SuperGlobal</title>
</head>

<body>
    <form action="home.php" method="get">
        <label> First Name </label>
        <input type="text" name="first_name">
        <label> Password </label>
        <input type="text" name="password">
        <input type="submit" name="submit">
    </form>

    <a href="home.php?first_name=davy">Go to Home</a>

</body>

</html>