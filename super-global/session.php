<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['user_name'] = $_POST['user_name'];
    echo session_id();
    echo "<br>";
    echo $_SESSION['user_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Super Global</title>
</head>


<body>
    <form action="" method="post">
        <label>User Name</label>
        <input type="text" name="user_name">
        <input type="submit" name="submit">
    </form>


</body>

</html>