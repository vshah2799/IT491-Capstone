<?php
include ('../dbFiles/PushDataIntoDB.php');
include ('../dbFiles/StudentOrRefugeeAccountObject.php');
include ('../dbFiles/SchoolAccountObject.php');
include ('../dbFiles/RefugeeOrganizationAccountObject.php');

$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

$usernameFromSignIn = $_POST["Username"];
$passwordFromSignIn = $_POST["Password"];
$accountType = $_POST["AccountType"];

//Check for username and password entry
if(empty($usernameFromSignIn)) {
    header ("Location: sign_in.php");
    exit();
}
else if (empty($passwordFromSignIn)) {
    header ("Location: sign_in.php");
    exit();
}

$accountObject = getAccountObject($usernameFromSignIn, $accountType);

if(!$accountObject){
    header("Location: sign_in.php");
    exit();
}

if (($accountObject->getPassword() == $passwordFromSignIn) && ($accountObject->getUsername() == $usernameFromSignIn)){

    echo 'Successfully logged in!';
    $_SESSION['Username'] = $accountObject->getUsername();
    $_SESSION['AccountObject'] = $accountObject;
    $_SESSION['AccountType'] = $accountObject->getAccountType();
    header("Location: home.php");
}
else{
    header("Location: sign_in.php");
    exit();
}