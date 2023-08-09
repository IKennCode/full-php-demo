<?php
require_once "database/db.include.php";
require_once "includes/util.inc.php";
session_start();
validate_login();

$user_id = $_GET['user_id'];

if (isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['user_name'];
    $active = isset($_POST['active']) ? 1 : 0;


    $sql = "UPDATE user SET first_name = ?, last_name=?, user_name=?, email=?, active = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssii", $first_name, $last_name, $username, $email, $active, $user_id);

    if ($stmt->execute()) {
        redirect("view_user.php?user_id=$user_id");
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
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <h1>Edit User</h1>
    <form method="post">
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo $user['first_name'] ?>">
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo $user['last_name'] ?>">
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $user['email'] ?>">
        </p>
        <p>
            <label>User Name</label>
            <input type="text" name="user_name" value="<?php echo $user['user_name'] ?>">
        </p>
        <p>
            <label>Active</label>
            <input type="checkbox" name="active" value="yes" <?php echo $user['active'] == 1 ? 'checked' : '' ?>>
        </p>

        <button type="submit" name="update">Update</button>
        <button type="submit" name="cancel">Cancel</button>
    </form>

</body>

</html>