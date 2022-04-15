<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="AccountStudentThree.php" method="post">

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input class="form-control" name="Password"  >
    </div>
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input class="form-control" name="FirstName"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input class="form-control" name="LastName"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Age</label>
        <input class="form-control" name="Age"  >
    </div>
    <div class="mb-3">
        <label class="form-label">School</label>
        <input class="form-control" name="School"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Gender</label>
        <input class="form-control" name="Gender"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Ethnicity</label>
        <input class="form-control" name="Ethnicity"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Languages</label>
        <input class="form-control" name="Languages"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Grade</label>
        <input class="form-control" name="Grade"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Interests and Hobbies</label>
        <input class="form-control" name="InterestsAndHobbies"  >
    </div>
    <div class="mb-3">
        <label class="form-label">Subjects</label>
        <input class="form-control" name="Subjects"  >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
require ('../dbFiles/PushDataIntoDB.php');
require ('../dbFiles/StudentOrRefugeeAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
if(!isset($_SESSION["Username"]) || !isset($_SESSION["AccountObject"])){
    header("Location: ../SignUpPages/SignUpSelectAccountBeingSelected.php");
}

if($_SESSION["AccountObject"] instanceof RefugeeOrganizationAccountObject){
    header("Location: AccountRefugeeOrganization.php");
}elseif ($_SESSION["AccountObject"] instanceof SchoolAccountObject){
    header("Location: SchoolAccountObject.php");
}