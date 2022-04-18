<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Login into your account</title>
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
include ('dbFiles/PushDataIntoDB.php');
include ('dbFiles/StudentOrRefugeeAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

$usernameFromSignIn = $_POST["Username"];
$passwordFromSignIn = $_POST["Password"];
$accountType = $_POST["AccountType"];

//Check for username and password entry
if(empty($usernameFromSignIn)) {
    header ("Location: signIn.php");
    exit();
}
else if (empty($passwordFromSignIn)) {
    header ("Location: signIn.php");
    exit();
}

$accountObject = getAccountObject($usernameFromSignIn, $accountType);


if (($accountObject->getPassword() == $passwordFromSignIn) && ($accountObject->getUsername() == $usernameFromSignIn)) {

    echo 'Successfully logged in!';
    $_SESSION['Username'] = $accountObject->getUsername();
    $_SESSION['AccountObject'] = $accountObject->getPassword();
    $_SESSION['AccountType'] = $accountObject->getAccountType();
    header("Location: index.php");
}
else{
    header("Location: signIn.php");
    exit();
}


