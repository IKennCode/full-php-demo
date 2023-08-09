<?php
require_once "includes/util.inc.php";
session_start();
validate_login();


require_once "database/db.include.php";
$sql = "SELECT *,  CASE WHEN active THEN 'true' ELSE 'false' END as status FROM user ORDER BY id DESC";
$users = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>User Management System</h1>

    <p>
        <span><a href="create_user.php">Create New User</a></span>
        <span class="align-right"><a href="logout.php">Log out</a></span>
    </p>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Name</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        <?php while ($rows = $users->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $rows['first_name'] ?></td>
                <td><?php echo $rows['last_name'] ?></td>
                <td><?php echo $rows['user_name'] ?></td>
                <td><?php echo $rows['status'] ?></td>
                <td><a href="view_user.php?user_id=<?php echo $rows['id'] ?>">View</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>