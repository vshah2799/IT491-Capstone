<?php
require ('../dbFiles/PushDataIntoDB.php');
require ('../dbFiles/RefugeeOrganizationAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"])) {
    header("Location: SignUpForRefugeeOrganizationOne.php");
}
$usernameFromForm = $_POST["Username"];
$passwordFromForm = $_POST["Password"];

if(getAccountObject($usernameFromForm, "ROA") != FALSE){
    header("Location: SignUpErrorPage.php");
}else{

    $_SESSION["Username"] = $usernameFromForm;
    $_SESSION["Password"] = $passwordFromForm;
    print("You are good");
}


$firstNameFromForm = $_POST["AdminFirstName"];
$lastNameFromForm = $_POST["AdminLastName"];
$organizationFromForm = $_POST["Organization"];
$addressFromForm = $_POST["Address"];

$roaObject = new RefugeeOrganizationAccountObject();
$roaObject ->setUsername($usernameFromForm);
$roaObject->setPassword($passwordFromForm);
$roaObject ->setAdminFirstName($firstNameFromForm);
$roaObject ->setAdminLastName($lastNameFromForm);
$roaObject ->setOrganization($organizationFromForm);
$roaObject ->setAddress($addressFromForm);
$roaObject ->setAccountType("ROA");

/*
echo $roaObject ->getUsername();
echo $roaObject->getPassword();
echo $roaObject ->getAdminFirstName();
echo $roaObject ->getAdminLastName();
echo $roaObject ->getOrganization();
echo $roaObject ->getAddress();
echo $roaObject ->getAccountType();
*/

//pushAccountObjectIntoDB($roaObject->getUsername(),$roaObject->getAccountType(),$roaObject);
