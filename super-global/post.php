<?php
if (isset($_POST['submit'])) {
    echo $_POST['first_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Super Global</title>
</head>

<body>
    <form action="home.php" method="post">
        <label>First Name</label>
        <input type="text" name="first_name">
        <input type="submit" name="submit">
    </form>

</body>

</html>