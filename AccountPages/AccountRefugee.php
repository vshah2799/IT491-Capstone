<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

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

$refugeeObject = $_SESSION["AccountObject"];

echo $refugeeObject->getUsername();
echo $refugeeObject->getPassword();
echo $refugeeObject->getFirstName();
echo $refugeeObject->getLastName();
echo $refugeeObject->getAge();
echo $refugeeObject->getOrganizationOrSchool();
echo $refugeeObject->getGender();
echo $refugeeObject->getEthnicity();
echo $refugeeObject->getLanguages();
echo $refugeeObject->getGrade();
echo $refugeeObject->getInterestsAndHobbies();
echo $refugeeObject->getSubjects();
