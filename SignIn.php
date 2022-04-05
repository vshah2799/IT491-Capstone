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
session_start();
include "database_placeholder.php"; //replace this

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

//Check for username and password entry
if(empty($user)) {
    header ("Location: index.php?error=Username is Required");
    exit();
}
else if (empty($password)) {
    header ("Location: index.php?error=Password is Required");
    exit();
}

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql); //watch out for $conn

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $password) {
        echo 'Successfully logged in!';
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php"); //placeholder for homepage
        exit();
    }
    else{
        header ("Location: index.php?error=Incorrect username or password");
    }
}
else{
    header("Location: index.php");
    exit();
}

?>
