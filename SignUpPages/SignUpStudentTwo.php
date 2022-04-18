<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="SignUpRefugeeThree.php" method="post">

    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input class="form-control" name="FirstName" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input class="form-control" name="LastName" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Age</label>
        <input class="form-control" name="Age" required >
    </div>
    <div class="mb-3">
        <label class="form-label">School</label>
        <input class="form-control" name="School" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Gender</label>
        <input class="form-control" name="Gender" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Ethnicity</label>
        <input class="form-control" name="Ethnicity" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Languages</label>
        <input class="form-control" name="Languages" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Grade</label>
        <input class="form-control" name="Grade" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Interests and Hobbies</label>
        <input class="form-control" name="InterestsAndHobbies" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Subjects</label>
        <input class="form-control" name="Subjects" required >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
require ('../dbFiles/PushDataIntoDB.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

if(empty($_POST["Username"]) || empty($_POST["Password"])){
    header("Location: sign_up_-_refugee_1.php");
}
$usernameFromForm = $_POST["Username"];
$passwordFromForm = $_POST["Password"];

if(getAccountObject($usernameFromForm, "Student") != FALSE){
    header("Location: SignUpErrorPage.php");
}else{

    $_SESSION["Username"] = $usernameFromForm;
    $_SESSION["Password"] = $passwordFromForm;
    print("You are good");
}
