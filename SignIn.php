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
//include ('dbFiles/PushDataIntoDB.php');
require __DIR__.'dbFiles/PushDataIntoDB.php';
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

//Validating email
function validateEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "{$email}: A valid email"."<br>";
    }
    else {
        echo "{$email}: Not a valid email"."<br>";
    }
}

$email = validateEmail($_POST['email']);


//Check for username and password entry
if(empty($user)) {
    header ("Location: index.php?error=Username is Required");
    exit();
}
else if (empty($password)) {
    header ("Location: index.php?error=Password is Required");
    exit();
}

//HardCoded, temporary, must replace
$accountUsername = "accountUsername"; //Not sure why there are two checks for username
$accountType = "Student";


if (getAccountObject($accountUsername, $accountType, $email, $username, $password)) {
    //Not sure how to grab the password from the database here to check for password
    //if ($password == $databasePassword)

    echo 'Successfully logged in!';
    $_SESSION['username'] = $username; //placeholder variables
    $_SESSION['name'] = $accountUsername;
    header("Location: home.php"); //placeholder for homepage
    exit();
}
else{
    header("Location: index.php");
    exit();
}

?>
