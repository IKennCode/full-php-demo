<?php
include("includes/db.inc.php");


echo nl2br("\n\n===================SELECT Statement=======\n");

$sql = "SELECT * FROM user";

$users = $con->query($sql) or die($con->error);

while ($row = $users->fetch_assoc()) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}

echo nl2br("\n\n===================SELECT Statement Parameterize=======\n");

$sql = "SELECT * FROM user WHERE id = ?";

$id = 2;

$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}

echo $user['first_name'] . " " . $user['last_name'] . "<br>";


$first_name = "Juan";
$last_name = "Dela Cruz";
$user_name = "jdelacruz";
$password = "password123";
$email = "jdelacruz@email.com";

echo nl2br("\n\n===================INSERT Statement=======\n");
$sql = "INSERT INTO user(first_name, last_name, user_name, password, email) VALUES(?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param("sssss", $first_name, $last_name, $user_name, $password, $email);

if ($stmt->execute()) {
    echo "Insert successfull";
}

echo nl2br("\n\n===================UPDATE Statement=======\n");
$sql = "UPDATE user SET first_name = ?, last_name = ?, user_name = ?, password = ?, email = ? WHERE id = ?";

$id = 1;
$stmt = $con->prepare($sql);
$stmt->bind_param("sssssi", $first_name, $last_name, $user_name, $password, $email, $id);

if ($stmt->execute()) {
    echo "Update successfull";
}

echo nl2br("\n\n===================DELETE Statement=======\n");
$sql = "DELETE FROM user WHERE id = ?";

$id = 1;
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Delete successfull";
}
