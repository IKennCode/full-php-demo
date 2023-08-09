<?php

session_start();

$_SESSION["user_id"] = 1052; //hard coded user_id

if (isset($_SESSION["user_id"])) {

    require_once("includes/db.inc.php");

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $con->query($sql);

    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>

    <h1>Home</h1>

    <?php if (isset($user)) : ?>

        <p>Hello <?= $user["user_name"] ?></p>

        <p><a href="list_users.php">Manage</a> or <a href="logout.php">Log out</a> </p>

    <?php else : ?>

        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>

    <?php endif; ?>
</body>

</html>