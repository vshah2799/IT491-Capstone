<?php
require ('../dbFiles/PushDataIntoDB.php');
require ('../dbFiles/SchoolAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"])) {
  header("Location: SignUpForSchool.php");
}
$usernameFromForm = $_POST["Username"];
$passwordFromForm = $_POST["Password"];

if(getAccountObject($usernameFromForm, "School") != FALSE){
    header("Location: SignUpErrorPage.php");
}else{

    $_SESSION["Username"] = $usernameFromForm;
    $_SESSION["Password"] = $passwordFromForm;
    print("You are good");
}


$firstNameFromForm = $_POST["AdminFirstName"];
$lastNameFromForm = $_POST["AdminLastName"];
$schoolFromForm = $_POST["School"];
$addressFromForm = $_POST["Address"];

$studentObject = new SchoolAccountObject();
$studentObject ->setUsername($usernameFromForm);
$studentObject->setPassword($passwordFromForm);
$studentObject ->setAdminFirstName($firstNameFromForm);
$studentObject ->setAdminLastName($lastNameFromForm);
$studentObject ->setSchool($schoolFromForm);
$studentObject ->setAddress($addressFromForm);
$studentObject ->setAccountType("School");

/*
echo $studentObject ->getUsername();
echo $studentObject->getPassword();
echo $studentObject ->getAdminFirstName();
echo $studentObject ->getAdminLastName();
echo $studentObject ->getSchool();
echo $studentObject ->getAddress();
echo $studentObject ->getAccountType();
*/

//pushAccountObjectIntoDB($refugeeObject->getUsername(),$refugeeObject->getAccountType(),$refugeeObject);
