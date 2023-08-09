<?php
require_once "database/db.include.php";
require_once "includes/util.inc.php";

session_start();
validate_login();


$user_id = $_GET['user_id'];

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM user WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $user_id);
    if ($stmt->execute()) {
        redirect("list_users.php");
    }
} else if (isset($_POST['cancel'])) {
    redirect("view_user.php?user_id=$user_id");
} else {
    $sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <h1>Delete User</h1>
    <form method="post">
        <p>
            <label>Are you sure you want to delete user <strong> <?php echo htmlspecialchars($user['user_name']) ?>? </strong></label>
        </p>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="cancel">Cancel</button>

    </form>

</body>

</html>