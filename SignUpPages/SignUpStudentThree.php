<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Student account Created
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
    header("Location: SignUpStudentOne.php");
}

$firstNameFromForm = $_POST["FirstName"];
$lastNameFromForm = $_POST["LastName"];
$ageFromForm = intval($_POST["Age"]);
$schoolFromForm = $_POST["School"];
$genderFromForm = $_POST["Gender"];
$ethnicityFromForm = $_POST["Ethnicity"];
$languagesFromForm = $_POST["Languages"];
$gradeFromForm = intval($_POST["Grade"]);
$interestsAndHobbiesFromForm = $_POST["InterestsAndHobbies"];
$subjectsFromForm = $_POST["Subjects"];


$studentObject = new StudentOrRefugeeAccountObject();
$studentObject->setUsername($_SESSION["Username"]);
$studentObject->setPassword($_SESSION["Password"]);
$studentObject->setFirstName($firstNameFromForm);
$studentObject->setLastName($lastNameFromForm);
$studentObject->setAge($ageFromForm);
$studentObject->setOrganizationOrSchool($schoolFromForm);
$studentObject->setGender($genderFromForm);
$studentObject->setEthnicity($ethnicityFromForm);
$studentObject->setLanguages($languagesFromForm);
$studentObject->setGrade($gradeFromForm);
$studentObject->setInterestsAndHobbies($interestsAndHobbiesFromForm);
$studentObject->setSubjects($subjectsFromForm);
$studentObject->setAccountType("Student");

/*
echo $studentObject->getUsername();
echo $studentObject->getPassword();
echo $studentObject->getFirstName();
echo $studentObject->getLastName();
echo $studentObject->getAge();
echo $studentObject->getOrganizationOrSchool();
echo $studentObject->getGender();
echo $studentObject->getEthnicity();
echo $studentObject->getLanguages();
echo $studentObject->getGrade();
echo $studentObject->getInterestsAndHobbies();
echo $studentObject->getSubjects();
echo $studentObject->getAccountType();
*/

//pushAccountObjectIntoDB($studentObject->getUsername(),$studentObject->getAccountType(),$studentObject);