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
//Function for validating data, may not be needed
if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

$email = $_POST['username'];
//Validating email
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //nothing required
}
else {
    echo("$email is not a valid email address");
    exit();
}


//Check for username and password entry
if(empty($user)) {
    header ("Location: index.php?error=Username is Required");
    exit();
}
else if (empty($password)) {
    header ("Location: index.php?error=Password is Required");
    exit();
}
else if (empty($email)) {
    header ("Location: index.php?error=Email is Required");
    exit();
}

$accountObject = getAccountObject($username, "Student", "sql2.njit.edu", "vs598", "7p984^KTdv@M8o^");

if (($accountObject->getPassword() == $password) && ($accountObject->getUsername() == $username)) {

    echo 'Successfully logged in!';
    $_SESSION['username'] = $username;
    header("Location: home.php"); //placeholder for homepage
}
else{
    header("Location: index.php");
    exit();
}



?>
