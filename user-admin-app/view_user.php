<?php
require_once "includes/util.inc.php";
session_start();
validate_login();


require_once "database/db.include.php";
$user_id = $_GET['user_id'];

$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <h1>View User</h1>
    <p>
        <label>First Name</label>
        <input type="text" readonly value="<?php echo $user['first_name'] ?>">
    </p>
    <p>
        <label>Last Name</label>
        <input type="text" readonly value="<?php echo $user['last_name'] ?>">
    </p>
    <p>
        <label>Email</label>
        <input type="text" readonly value="<?php echo $user['email'] ?>">
    </p>
    <p>
        <label>User Name</label>
        <input type="text" readonly value="<?php echo $user['user_name'] ?>">
    </p>
    <p>
        <label>Active</label>
        <input type="checkbox" disabled <?php echo $user['active'] == 1 ? 'checked' : '' ?>>
    </p>

    <p><a href="edit_user.php?user_id=<?php echo $user['id'] ?>">Edit User</a></p>
    <p><a href="delete_user.php?user_id=<?php echo $user['id'] ?>">Delete User</a></p>
    <p><a href="list_users.php">Go back to List</a></p>


</body>

</html>