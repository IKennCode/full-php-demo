<?php

setcookie("first_name", "Juan", time() + 60 * 60);

echo $_COOKIE['first_name'];
