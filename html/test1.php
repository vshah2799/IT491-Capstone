<?php
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
print($_SESSION['Username']);
print($_SESSION['AccountObject']);
print($_SESSION['AccountType']);