<?php
function redirect($url)
{
    header('Location: ' . $url);
    die();
}

function validate_login()
{
    if (!isset($_SESSION["user_id"])) {
        redirect("login.php");
    }
}
