<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Student account updated
<div class="mx-auto" style="width: 200px;">
    <a href="../SignIn.php" type="button" class="btn btn-primary" >Sign In</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
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

$studentObject = new StudentOrRefugeeAccountObject();

if(!empty($firstNameFromForm)){
    $studentObject->setFirstName($firstNameFromForm);
}
if(!empty($lastNameFromForm)){
    $studentObject->setLastName($lastNameFromForm);
}
if(!empty($ageFromForm)){
    $studentObject->setAge($ageFromForm);
}
if(!empty($organizationFromForm)){
    $studentObject->setOrganizationOrSchool($organizationFromForm);
}
if(!empty($genderFromForm)){
    $studentObject->setGender($genderFromForm);
}
if(!empty($ethnicityFromForm)){
    $studentObject->setEthnicity($ethnicityFromForm);
}
if(!empty($languagesFromForm)){
    $studentObject->setLanguages($languagesFromForm);
}
if(!empty($gradeFromForm)){
    $studentObject->setGrade($gradeFromForm);
}
if(!empty($interestsAndHobbiesFromForm)){
    $studentObject->setInterestsAndHobbies($interestsAndHobbiesFromForm);
}
if(!empty($subjectsFromForm)){
    $studentObject->setSubjects($subjectsFromForm);
}


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