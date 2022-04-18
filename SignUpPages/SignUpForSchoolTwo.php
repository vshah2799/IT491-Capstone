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

$schoolObject = new SchoolAccountObject();
$schoolObject ->setUsername($usernameFromForm);
$schoolObject->setPassword($passwordFromForm);
$schoolObject ->setAdminFirstName($firstNameFromForm);
$schoolObject ->setAdminLastName($lastNameFromForm);
$schoolObject ->setSchool($schoolFromForm);
$schoolObject ->setAddress($addressFromForm);
$schoolObject->setAccountType("School");

/*
echo $schoolObject ->getUsername();
echo $schoolObject->getPassword();
echo $schoolObject ->getAdminFirstName();
echo $schoolObject ->getAdminLastName();
echo $schoolObject ->getSchool();
echo $schoolObject ->getAddress();
echo $schoolObject ->getAccountType();
*/

//pushAccountObjectIntoDB($schoolObject->getUsername(),$schoolObject->getAccountType(),$schoolObject);
