<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Refugee account Created
<div class="mx-auto" style="width: 200px;">
    <a href="../SignIn.php" type="button" class="btn btn-primary" >Sign In</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
require ('../dbFiles/PushDataIntoDB.php');
require ('../dbFiles/StudentOrRefugeeAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"])){
    header("Location: SignUpRefugeeOne.php");
}

$firstNameFromForm = $_POST["FirstName"];
$lastNameFromForm = $_POST["LastName"];
$ageFromForm = intval($_POST["Age"]);
$organizationFromForm = $_POST["Organization"];
$genderFromForm = $_POST["Gender"];
$ethnicityFromForm = $_POST["Ethnicity"];
$languagesFromForm = $_POST["Languages"];
$gradeFromForm = intval($_POST["Grade"]);
$interestsAndHobbiesFromForm = $_POST["InterestsAndHobbies"];
$subjectsFromForm = $_POST["Subjects"];


$refugeeObject = new StudentOrRefugeeAccountObject();
$refugeeObject->setUsername($_SESSION["Username"]);
$refugeeObject->setPassword($_SESSION["Password"]);
$refugeeObject->setFirstName($firstNameFromForm);
$refugeeObject->setLastName($lastNameFromForm);
$refugeeObject->setAge($ageFromForm);
$refugeeObject->setOrganizationOrSchool($organizationFromForm);
$refugeeObject->setGender($genderFromForm);
$refugeeObject->setEthnicity($ethnicityFromForm);
$refugeeObject->setLanguages($languagesFromForm);
$refugeeObject->setGrade($gradeFromForm);
$refugeeObject->setInterestsAndHobbies($interestsAndHobbiesFromForm);
$refugeeObject->setSubjects($subjectsFromForm);
$refugeeObject->setAccountType("Refugee");

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
echo $refugeeObject->getAccountType();

//pushAccountObjectIntoDB($refugeeObject->getUsername(),$refugeeObject->getAccountType(),$refugeeObject);