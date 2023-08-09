<?php
if (isset($_REQUEST['submit'])) {
    echo $_REQUEST['first_name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REQUEST SuperGlobal</title>
</head>

<body>
    <!-- <form action="" method="get"> -->
    <form action="home.php?id=10" method="post">
        <label> First Name </label>
        <input type="text" name="first_name">
        <input type="submit" name="submit">
    </form>

</body>

</html>