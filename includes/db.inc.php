<?php
$host = "localhost";
$username = "root";
$database = "user_administration";
$password = "password123!";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo $con->connect_error;
}
