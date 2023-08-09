<?php
$host = "localhost";
$username = "root";
$database = "user_administration";
$password = "password123!";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo $con->connect_error;
}

function insert_user($first_name, $last_name, $user_name, $password, $email)
{
    global $con;

    $sql = "INSERT INTO user(first_name, last_name, user_name, password, email) VALUES(?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $first_name, $last_name, $user_name, $password, $email);

    if ($stmt->execute()) {
        echo "Insert successfull";
    }

    return $con->insert_id;
}

function update_email($email, $user_id)
{
    global $con;

    $sql = "UPDATE user SET email = ? WHERE id = ?";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("si", $email, $user_id);

    if ($user_id == 0) {
        throw new Exception("Incorrect user id");
    }

    if ($stmt->execute()) {
        echo "Update successfull";
    }
}

$first_name = "Juan";
$last_name = "Dela Cruz";
$user_name = "jdelacruz";
$password = "password123";
$email = "jdelacruz@email.com";

$con->begin_transaction();
try {
    $id = insert_user($first_name, $last_name, $user_name, $password, $email);
    update_email("jdelacruz2@email.com", $id);
    $con->commit();
} catch (Exception $e) {
    $con->rollback();
    echo $e->getMessage();
}
