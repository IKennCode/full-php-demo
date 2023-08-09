<?php

$is_invalid = false;

if (isset($_POST['login'])) {
    require_once "database/db.include.php";
    require_once "includes/util.inc.php";

    $username = $_POST['user_name'];

    $sql = "SELECT * FROM user WHERE user_name = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user and $user['active']) {

        if (password_verify($_POST["password"], $user["password"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            redirect("list_users.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>

    <h1>Login</h1>

    <?php if ($is_invalid) : ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <form method="post">
        <label>User Name</label>
        <input type="text" name="user_name">

        <label for="password">Password</label>
        <input type="password" name="password">

        <button type="submit" name="login">Log in</button>
    </form>

</body>

</html>