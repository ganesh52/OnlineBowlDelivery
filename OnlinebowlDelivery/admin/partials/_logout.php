<?php

session_start();
echo "Logging you out. Please wait...";
unset($_SESSION["adminloggedin"]);
unset($_SESSION["adminusername"]);
unset($_SESSION["adminuserId"]);



header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
