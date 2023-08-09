<?php
require_once "includes/util.inc.php";

session_start();

session_destroy();

redirect("login.php");
exit;
