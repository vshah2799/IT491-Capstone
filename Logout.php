<?php
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location: index.php");